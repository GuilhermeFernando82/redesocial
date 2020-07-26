<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\post;
use Illuminate\Support\Facades\DB;
use App\User;
class postsystem extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posttable = DB::table('postagens')->get();
        $usertable = DB::table('users')->get();
        $comentary = DB::table('coment')->get();
        $users = DB::table('users')->where('id', auth()->user()->id)->get();
        return view("/sistem",  compact("posttable", "usertable","comentary","users"));
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
    public function store(Request $request, post $users)
    {
        $request->validate([
            'titulo' => 'required',
            'pb' => 'required',
        ]);
        $users->user_id = auth()->user()->id;
        $users->nome_user = auth()->user()->name;
        $users->titulo = $request->titulo;
        $users->publications = $request->pb;
        $users->save();
        return redirect('sistem');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
