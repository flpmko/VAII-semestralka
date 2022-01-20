<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rental;
use Illuminate\Support\Facades\Auth;
use App\Models\Item;
use App\Models\ItemRental;

class RentalsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rentals = null;
        if (Auth::user())
            $rentals = Rental::where('user_id', Auth::user()->id)->get();

        return view('rentals', ['rentals' => $rentals]);
    }

    public function getRentalsForHome()
    {
        $lastRented = null;
        $notReturnedRentals = null;
        if (Auth::user()) {

            $lastRents = Rental::where('user_id', Auth::user()->id)
                ->latest('created_at')
                ->take(4)
                ->get();

            if (sizeof($lastRents) > 0)
                $lastRented = $this->getLastItems($lastRents);


            $notReturnedRentals = Rental::where([['user_id', Auth::user()->id], ['date_of_return', NULL]])
                ->latest('created_at')
                ->take(4)
                ->get();
        }

        return view('home', [
            'lastRented' => $lastRented,
            'notReturned' => $notReturnedRentals
        ]);
    }

    private function getLastItems($lastRents)
    {
        for ($i = 0; $i < sizeof($lastRents[0]->items); $i++) {
            $lastItems[$i] = $lastRents[0]->items[$i];
        }

        $size = sizeof($lastItems);

        switch ($size) {
            case 3:
                if (sizeof($lastRents) > 1)
                    $lastItems[3] = $lastRents[1]->items[0];
                break;
            case 2:
                if (sizeof($lastRents) > 1) {
                    $lastItems[2] = $lastRents[1]->items[0];
                    if (sizeof($lastRents[1]->items) > 1) {
                        $lastItems[3] = $lastRents[1]->items[1];
                    } else {
                        $lastItems[3] = $lastRents[2]->items[0];
                    }
                }
                break;
            case 1:
                if (sizeof($lastRents) > 1) {
                    $lastItems[1] = $lastRents[1]->items[0];
                    if (sizeof($lastRents[1]->items) > 1) {
                        $lastItems[2] = $lastRents[1]->items[1];
                        if (sizeof($lastRents[1]->items) > 2) {
                            $lastItems[3] = $lastRents[1]->items[2];
                        } else if (sizeof($lastRents) > 2) {
                            $lastItems[3] = $lastRents[2]->items[0];
                        }
                    } else {
                        $lastItems[2] = $lastRents[2]->items[0];
                        if (sizeof($lastRents[2]->items) > 1) {
                            $lastItems[3] = $lastRents[2]->items[1];
                        } else {
                            $lastItems[3] = $lastRents[3]->items[0];
                        }
                    }
                }
                break;
            default:
                break;
        }

        return $lastItems;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('rental-new', ['items' => Item::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'date_of_rent' => ['required'],
            'event_name' => ['required', 'string', 'max:255'],
        ]);

        $id_to_qty = $this->mapItems($request);
        $userId = $request->input('user_id');

        $rental = Rental::create([
            'user_id' => $userId,
            'date_of_rent' => $request->input('date_of_rent'),
            'event_name' => $request->input('event_name')
        ]);

        $rental->items()->sync($id_to_qty, false);

        app('App\Http\Controllers\LogsController')->store($userId, 'CREATED_RENTAL_#_' . $rental->id);

        return redirect('rentals');
    }

    /**
     * Map items for insertion into pivot table and update quantities of items.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return Array
     */
    private function mapItems(Request $request)
    {
        $ids = array_keys($request->borrow);

        $i = 0;
        foreach ($ids as $id) {
            $old[$i] = Item::where('id', $id)
                ->get();
            $i++;
        }

        $qtys = [sizeof($ids)];
        for ($i = 0; $i < sizeof($ids); $i++) {
            $qtys[$i] = $request->items[$ids[$i]];
            $poc = $old[$i];
            Item::where('id', $ids[$i])
                ->update(['quantity' => ($poc[0]->quantity - $qtys[$i])]);
        }

        $i = 0;
        foreach ($ids as $id) {

            $id_to_qty[$id] = ['quantity' => $qtys[$i]];
            $i++;
        }
        return $id_to_qty;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $rental = Rental::find($id);
        return view('rental-detail')->with('rental', $rental);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $rental = Rental::find($id);
        $rental->load('items');

        $items = Item::get()->map(function ($item) use ($rental) {
            $item->value = data_get($rental->items->firstWhere('id', $item->id), 'pivot.quantity') ?? null;
            return $item;
        });

        return view('rental-edit', [
            'items' => $items,
            'rental' => $rental
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'date_of_rent' => ['required'],
            'event_name' => ['required', 'string', 'max:100']
        ]);

        $rental = Rental::where('id', $id)
            ->update([
                'date_of_rent' => $request->input('date_of_rent'),
                'event_name' => $request->input('event_name')
            ]);

        return redirect('rentals');
    }

    /**
     * Update the specified resource's date_of_return to current date
     * and update the quantities of borrowed items.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function returnRental($id)
    {
        $itemRental = ItemRental::where('rental_id', $id)
            ->get();
        $i = 0;
        foreach ($itemRental as $record) {
            $old[$i] = Item::where('id', $record->item_id)
                ->get();
            $i++;
        }

        $i = 0;
        foreach ($itemRental as $record) {
            $oldQuantity = $old[$i];
            Item::where('id', $record->item_id)
                ->update([
                    'quantity' => ($oldQuantity[0]->quantity + $record->quantity),
                ]);
            $i++;
        }

        $rental = Rental::where('id', $id)
            ->update([
                'date_of_return' => date("Y-m-d")
            ]);

        $userId = Auth::user()->id;
        app('App\Http\Controllers\LogsController')->store($userId, 'RETURNED_RENTAL_#_' . $id);

        return redirect('rentals');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Rental::find($id);
        $item->delete();
        return redirect('rentals');
    }
}
