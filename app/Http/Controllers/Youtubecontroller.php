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


class Youtubecontroller extends Controller
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
        return view('index',compact('members','data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = category::all();
        return view('form_upload',compact('data'));
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
            'name' => 'required',
            'desc' => 'required',
            'image' => 'required|image|max:2048'
            ]);

        $image = $request->file('image');
        $video =$request->file('video');

        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $new_name1= rand() . '.' . $video->getClientOriginalExtension();
        $image->move(public_path('images'), $new_name);
        $video->move(public_path('videos'), $new_name1);

        $form_data = array(
            'name' => $request->name,
            'desc' => $request->desc,
            'user_id' => $request->user_id,
            'cat_id' => $request->category_id,
            'image' => $new_name,
            'video' => $new_name1
            
            );
            youtube::create($form_data);

            return redirect('Youtube')->with('success', 'Data Added successfully.');
            
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
        return view('single', compact('data','query','member','result','query2'));
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
        $member = youtube::findOrFail($id);  
        $member->delete();
        return redirect('my_videos')->with('success', 'Data Added successfully.');
    }
}
