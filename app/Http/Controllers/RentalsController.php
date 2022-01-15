<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class RentalsController extends Controller
{
    function rentals()
    {
        $data = array(
            'list' => DB::table('rentals')
                ->where('user_id', Auth::user()->id)
                ->get()
        );

        return view('rentals', $data);
    }

    function add(Request $request)
    {
        $request->validate([
            'date_of_rent' => ['required'],
            'event_name' => ['required', 'string', 'max:100']
        ]);

        $query = DB::table('rentals')->insert([
            'date_of_rent' => $request->input('date_of_rent'),
            'date_of_return' => NULL,
            'event_name' => $request->input('event_name'),
            'user_id' => $request->input('user_id')
        ]);

        return redirect('rentals');
    }

    function edit($id)
    {
        $row = DB::table('rentals')
            ->where('id', $id)
            ->first();
        $data = [
            'Info' => $row
        ];

        return view('rentals-edit', $data);
    }

    function update(Request $request)
    {
        $request->validate([
            'date_of_rent' => ['required'],
            'event_name' => ['required', 'string', 'max:100']
        ]);

        $updating = DB::table('rentals')
            ->where('id', $request->input('cid'))
            ->update([
                'date_of_rent' => $request->input('date_of_rent'),
                'date_of_return' => NULL,
                'event_name' => $request->input('event_name'),
                'user_id' => $request->input('user_id')
            ]);

        return redirect('rentals');
    }

    function setReturnDate($id)
    {
        $updating = DB::table('rentals')
            ->where('id', $id)
            ->update([
                'date_of_return' => date("Y-m-d"),
            ]);

        return redirect('rentals');
    }

    function delete($id)
    {
        $delete = DB::table('rentals')
            ->where('id', $id)
            ->delete();

        return redirect('rentals');
    }
}
