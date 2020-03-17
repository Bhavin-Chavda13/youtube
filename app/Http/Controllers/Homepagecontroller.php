<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\youtube;
use App\category;
use App\Likes;
use App\User;
use App\comments;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class Homepagecontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $members = youtube::all();
        $data = category::all();
        // $data=DB::table('');
        return view('Homepage',compact('members','data'));
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $query = DB::table('likes')
        ->select(array( DB::raw('COUNT(id) as likes')))
        ->where('video_id', '=', $id )
        ->get();

        $result = DB::table('comments')
            ->join('users', 'users.id', '=', 'comments.user_id')
            ->where('video_id', '=', $id )
            ->select('users.name', 'users.email','users.profile', 'comments.comments')
            ->get();

        $query2 = DB::table('comments')
        ->select(array( DB::raw('COUNT(id) as comments')))
        ->where('video_id', '=', $id )
        ->get();

        
        $data = category::all();
        $member = youtube::findOrFail($id);
        return view('Display', compact('data','query','member','result','query2'));
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
