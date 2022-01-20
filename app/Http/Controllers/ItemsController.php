<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ItemsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Item::all();
        $userInfo = NULL;
        if (Auth::user())
            $userInfo = User::where('id', Auth::user()->id)->get();

        return view('items', [
            'items' => $items,
            'userInfo' => $userInfo
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('item-new');
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
            'name' => ['required', 'string', 'max:60'],
            'quantity' => ['required', 'int'],
            'category' => ['required', 'string', 'max:10'],
            'type' => ['required', 'string', 'max:20'],
            'image' => ['required', 'mimes:jpeg,bmp,png']
        ]);

        $pathImage = $request->file('image')->store(
            'item-images',
            ["disk" => "public"]
        );

        $item = Item::create([
            'name' => $request->input('name'),
            'quantity' => $request->input('quantity'),
            'category' => $request->input('category'),
            'type' => $request->input('type'),
            'inputs' => $request->input('inputs'),
            'outputs' => $request->input('outputs'),
            'image' => $pathImage
        ]);

        $userId = Auth::user()->id;
        app('App\Http\Controllers\LogsController')->store($userId, 'ADDED_ITEM_#_' . $item->id);

        return redirect('items');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = Item::find($id);
        return view('item-detail')->with('item', $item);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Item::find($id);
        return view('item-edit')->with('item', $item);
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
            'name' => ['required', 'string', 'max:60'],
            'quantity' => ['required', 'int'],
            'category' => ['required', 'string', 'max:10'],
            'type' => ['required', 'string', 'max:20']
        ]);

        $item = Item::where('id', $id)
            ->update([
                'name' => $request->input('name'),
                'quantity' => $request->input('quantity'),
                'category' => $request->input('category'),
                'type' => $request->input('type'),
                'inputs' => $request->input('inputs'),
                'outputs' => $request->input('outputs')
            ]);

        if ($request->input('image') != NULL) {
            $request->validate([
                'image' => ['mimes:jpeg,bmp,png']
            ]);
            $pathImage = $request->file('image')->store(
                'item-images',
                ["disk" => "public"]
            );
            $item = Item::where('id', $id)
                ->update([
                    'image' => $pathImage
                ]);
        }

        $userId = Auth::user()->id;
        app('App\Http\Controllers\LogsController')->store($userId, 'EDITED_ITEM_#_' . $id);

        return redirect('items');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Item::find($id);
        $item->delete();

        $userId = Auth::user()->id;
        app('App\Http\Controllers\LogsController')->store($userId, 'DELETED_ITEM_#_' . $id);

        return redirect('items');
    }
}
