<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    function items()
    {
        $data = array(
            'list' => DB::table('users')->get()
        );

        return view('account', $data);
    }

    function add(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'nick' => 'required',
            'nick' => 'required',
            'quantity' => 'required',
            'category' => 'required',
            'type' => 'required',
            'image' => 'required'
        ]);

        $query = DB::table('items')->insert([
            'name' => $request->input('name'),
            'quantity' => $request->input('quantity'),
            'category' => $request->input('category'),
            'type' => $request->input('type'),
            'inputs' => $request->input('inputs'),
            'outputs' => $request->input('outputs'),
            'docs' => $request->input('docs'),
            'image' => $request->input('image')
        ]);

        return redirect('/');
    }

    function edit($id)
    {
        $row = DB::table('users')
            ->where('id', $id)
            ->first();
        $data = [
            'Info' => $row
        ];
        
        return view('edit', $data);
    }

    function update(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'quantity' => 'required',
            'category' => 'required',
            'type' => 'required',
            'image' => 'required'
        ]);

        $updating = DB::table('items')
            ->where('id', $request->input('cid'))
            ->update([
                'name' => $request->input('name'),
                'quantity' => $request->input('quantity'),
                'category' => $request->input('category'),
                'type' => $request->input('type'),
                'inputs' => $request->input('inputs'),
                'outputs' => $request->input('outputs'),
                'docs' => $request->input('docs'),
                'image' => $request->input('image')
            ]);

        return redirect('items');
    }

    function delete($id)
    {
        $delete = DB::table('items')
            ->where('id', $id)
            ->delete();

        return redirect('items');
    }
}
