<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return News::all();
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show( News $news)
    {
        return News::find($news);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $news=News::create($request->all());
        return response()->json($news, 201);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, News $news)
    {
        $news=News::findOrFail($news);
        $news->update($request->all());
        return response()->json($news, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request,News $news)
    {
        $news=News::findOrFail($news);
        $news->delete();
        return response()->json($news, 204);
    }
}
