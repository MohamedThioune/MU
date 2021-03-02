<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;
use App\Models\Video;
use App\User;
use App\Models\Read;

use Auth;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //     return view('home');
    // }

    public function connected($id){
        //List videos read by a user
        $user_views =  DB::Table('reads')
        ->where('user_id', Auth::id());

        $profile = Profile::find($id);
        session(['profile' => $profile]);
        return redirect('/');
    }

    public function play($id){

        $video = Video::find($id);
        $user = User::find($video->user_id); 

        $reads = DB::Table('reads')
        ->where('video_id', $id)
        ->count();

        $comments = DB::Table('comments')->select('users.*','comments.value' ,'comments.id as comment_id' ,'comments.created_at as created_at')
        ->join('videos', 'videos.id', 'comments.video_id')
        ->join('users', 'videos.user_id', 'users.id')
        ->where('comments.video_id', $id)
        ->get();

        $counts = count($comments);
        $inputs_read = ['video_id' => $id, 'user_id' => Auth::id()];

        Read::create($inputs_read);

        session(['video' => $video, 'user' => $user]);
        return view('play', compact('comments','counts','reads'));
    }
}
