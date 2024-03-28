<?php

namespace App\Http\Controllers;

use App\Models\Board;
use Illuminate\Http\Request;

class BoardContoller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $boards = Board::all();
        return view('boards.index') ->with('lists', $boards);
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
        $request -> validate([
            'subject' => 'required',
            'contents' => 'required',
        ]);

        //필드명이랑 name값이 같을 경우 아래와 같이 사용가능
        Board::create($request -> all());

        return redirect() -> route('index');        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Board  $board
     * @return \Illuminate\Http\Response
     */
    public function show(Board $board)
    {
        //Board 모델을 통해 일치하는 아이디값 데이터를 하나만 가져옴
        $board = Board::where('id', $board->id) -> first();

        return view('boards.show') ->with('board', $board);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Board  $board
     * @return \Illuminate\Http\Response
     */
    public function edit(Board $board)
    {
        //Board 모델을 통해 일치하는 아이디값 데이터를 하나만 가져옴
        $board = Board::where('id', $board->id) -> first();

        return view('boards.edit') ->with('board', $board);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Board  $board
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Board $board)
    {
        $request -> validate([
            'subject' => 'required',
            'contents' => 'required',
        ]);

        
        $board->update($request -> all());

        return redirect() -> route('boards.index');        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Board  $board
     * @return \Illuminate\Http\Response
     */
    public function destroy(Board $board)
    {
        //
        $board->delete();
        return redirect() -> route('boards.index');     
    }
}
