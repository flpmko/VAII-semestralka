<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LaravelCrud extends Controller
{
    function index()
    {
        $data = array(
            'list' => DB::table('crud')->get()
        );

        return view('crud.index', $data);
    }

    function add(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'quantity' => 'required',
            'category' => 'required',
            'type' => 'required'
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

        if ($query) {
            return back()->with('succes', 'Success!');
        } else {
            return back()->with('fail', 'Fail!');
        }
    }

    function edit($id)
    {
        $row = DB::table('items')
            ->where('id', $id)
            ->first();
        $data = [
            'Info' => $row,
            'Title' => 'Edit'
        ];

        return view('crud.edit', $data);
    }

    function update(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'quantity' => 'required',
            'category' => 'required',
            'type' => 'required'
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

        return redirect('crud');
    }

    function delete($id)
    {
        $delete = DB::table('items')
            ->where('id', $id)
            ->delete();

        return redirect('crud');
    }
}
