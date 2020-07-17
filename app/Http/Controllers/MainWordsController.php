<?php

namespace App\Http\Controllers;

use App\Groups;
use App\Main_words;
use Illuminate\Http\Request;

class MainWordsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $requestのidを$idに格納
        $id = $request->id;
        //Main_wordsデータを全て格納
        $main_words = Main_words::all();
        // $main_wordsにMain_wordsモデルの'group_id'を取得して格納
        // $main_words = $Main_words->orderBy('group_id')->get();
        
        return view('main_words.index',compact('main_words','id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Main_words  $main_words
     * @return \Illuminate\Http\Response
     */
    public function show(Main_words $main_words)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Main_words  $main_words
     * @return \Illuminate\Http\Response
     */
    public function edit(Main_words $main_words)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Main_words  $main_words
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Main_words $main_words)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Main_words  $main_words
     * @return \Illuminate\Http\Response
     */
    public function destroy(Main_words $main_words)
    {
        //
    }
}
