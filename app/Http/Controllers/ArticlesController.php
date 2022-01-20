<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use Illuminate\Support\Facades\Auth;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::all();
        return view('help', ['articles' => $articles]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('article-new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            'heading' => ['required', 'max: 100'],
            'article' => ['required'],
            'image' => ['required', 'mimes:jpeg,bmp,png']
        ]);


        $pathImage = $request->file('image')->store(
            'article-images', ["disk"=>"public"]
        );

        $article = Article::create([
            'heading' => $request->input('heading'),
            'text' => $request->input('article'),
            'image' => $pathImage
        ]);

        $userId = Auth::user()->id;
        app('App\Http\Controllers\LogsController')->store($userId, 'ADDED_ARTICLE_#_' . $article->id);

        return redirect('help');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $article = Article::find($id);
        return view('article-detail')->with('article', $article);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = Article::find($id);
        return view('article-edit')->with('article', $article);
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
            'heading' => ['required', 'max: 100'],
            'article' => ['required'],
            'image' => ['required', 'mimes:jpeg,bmp,png']
        ]);

        $pathImage = $request->file('image')->store(
            'article-images', ["disk"=>"public"]
        );

        $article = Article::where('id', $id)
        ->update([
            'heading' => $request->input('heading'),
            'article' => $request->input('article'),
            'image' => $pathImage
        ]);

        $userId = Auth::user()->id;
        app('App\Http\Controllers\LogsController')->store($userId, 'EDITED_ARTICLE_#_' . $article->id);

        return redirect('help');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article = Article::find($id);
        $article->delete();

        $userId = Auth::user()->id;
        app('App\Http\Controllers\LogsController')->store($userId, 'DELETED_ARTICLE_#_' . $id);

        return redirect('help');
    }
}
