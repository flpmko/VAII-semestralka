<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

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

        return view('items', [ 'items' => $items ]);
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
            'item-images', ["disk"=>"public"]
        );

        $pathManual = NULL;
        if ($request->input('docs') != NULL) {
            $pathManual = $request->file('docs')->store(
                'item-documents', ["disk"=>"public"]
            );
        }

        $item = Item::create([
            'name' => $request->input('name'),
            'quantity' => $request->input('quantity'),
            'category' => $request->input('category'),
            'type' => $request->input('type'),
            'inputs' => $request->input('inputs'),
            'outputs' => $request->input('outputs'),
            'manual' => ($pathManual != NULL) ? $pathManual : NULL,
            'image' => $pathImage
        ]);

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
            'type' => ['required', 'string', 'max:20'],
            'image' => ['required', 'mimes:jpeg,bmp,png']
        ]);

        $pathImage = $request->file('image')->store(
            'item-images', ["disk"=>"public"]
        );

        $pathManual = NULL;
        if ($request->input('docs') != NULL) {
            $pathManual = $request->file('docs')->store(
                'item-documents', ["disk"=>"public"]
            );
        }

        $item = Item::where('id', $id)
        ->update([
            'name' => $request->input('name'),
            'quantity' => $request->input('quantity'),
            'category' => $request->input('category'),
            'type' => $request->input('type'),
            'inputs' => $request->input('inputs'),
            'outputs' => $request->input('outputs'),
            'manual' => ($pathManual != NULL) ? $pathManual : NULL,
            'image' => $pathImage
        ]);

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
        return redirect('items');
    }
}
