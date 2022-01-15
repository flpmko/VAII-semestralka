<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ItemController extends Controller
{
    function items()
    {
        $data = array(
            'list' => DB::table('items')->get()
        );

        return view('items', $data);
    }

    function add(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:60'],
            'quantity' => ['required', 'int'],
            'category' => ['required', 'string', 'max:10'],
            'type' => ['required', 'string', 'max:20'],
            'image' => ['required', 'mimes:jpeg,bmp,png']
        ]);

        $pathImage = $request->file('image')->store(
            'item-images', ["disk"=>"public"]
        );

        $pathDoc = NULL;
        if ($request->input('docs') != NULL) {
            $pathDoc = $request->file('docs')->store(
                'item-documents', ["disk"=>"public"]
            );
        }

        $query = DB::table('items')->insert([
            'name' => $request->input('name'),
            'quantity' => $request->input('quantity'),
            'category' => $request->input('category'),
            'type' => $request->input('type'),
            'inputs' => $request->input('inputs'),
            'outputs' => $request->input('outputs'),
            'docs' => ($pathDoc != NULL) ? $pathDoc : NULL,
            'image' => $pathImage
        ]);

        return redirect('items');
    }

    function edit($id)
    {
        $row = DB::table('items')
            ->where('id', $id)
            ->first();
        $data = [
            'Info' => $row
        ];

        return view('item-edit', $data);
    }

    function update(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:60'],
            'quantity' => ['required', 'int'],
            'category' => ['required', 'string', 'max:10'],
            'type' => ['required', 'string', 'max:20'],
            'image' => ['required', 'mimes:jpeg,bmp,png']
        ]);

        $pathImage = $request->file('image')->store(
            'item-images', ["disk"=>"public"]
        );

        $pathDoc = NULL;
        if ($request->input('docs') != NULL) {
            $pathDoc = $request->file('docs')->store(
                'item-documents', ["disk"=>"public"]
            );
            echo("docs");
        }

        $updating = DB::table('items')
            ->where('id', $request->input('cid'))
            ->update([
                'name' => $request->input('name'),
                'quantity' => $request->input('quantity'),
                'category' => $request->input('category'),
                'type' => $request->input('type'),
                'inputs' => $request->input('inputs'),
                'outputs' => $request->input('outputs'),
                'docs' => ($pathDoc != NULL) ? $pathDoc : NULL,
            'image' => $pathImage
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
