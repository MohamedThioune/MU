<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;
use App\Models\Video;
use App\Models\SubTopic;
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

        /* 
        * Time shahid and Progress bar 
        */

        $start =  (new \Datetime())->format('Y-m-01 H:i:s');
        $end =   (new \Datetime())->format('Y-m-30 H:i:s');

        $look_videos = DB::table('reads')
        ->join('videos','videos.id','reads.video_id')
        ->where('reads.user_id',Auth::id())
        ->whereNull('videos.deleted_at')
        ->where('reads.created_at', '>=', $start)
        ->where('reads.created_at', '<', $end)
        ->select(DB::raw('count(*) as views, reads.video_id'))
        ->groupBy('reads.video_id')
        ->get();

        $shahid = strtotime('i:s');

        foreach($look_videos as $look){
            $video = Video::find($look->video_id);
            if($video->duration){
                $duration = strtotime($video->duration);
                $shahid += $duration;
            }
        };
    
        $shahid = date('H:i:s', $shahid);

        /* 

        */

        $looks = DB::table('videos')
        ->join('reads','videos.id','reads.video_id')
        ->where('reads.user_id', Auth::id())
        ->where('reads.created_at', '>=', $start)
        ->where('reads.created_at', '<', $end)
        ->whereNull('videos.deleted_at')
        ->count();
        
        /* 
        * 
        */
    
        $video = Video::find($id);
        $user = User::find($video->user_id); 
        $users = array();

        $subtopics = SubTopic::all();

        $reads = DB::Table('reads')
        ->where('video_id', $id)
        ->count();

        $comments = DB::Table('comments')->select('comments.user_id','comments.value' ,'comments.id as comment_id' ,'comments.created_at')
        ->where('comments.video_id', $id)
        ->orderBy('comments.created_at', 'desc')
        ->get();

        foreach($comments as $comment){
            $auth =  User::find($comment->user_id);
            array_push($users, $auth);
        };

        $counts = count($comments);
        $inputs_read = ['video_id' => $id, 'user_id' => Auth::id()];

        Read::create($inputs_read);

        session(['video' => $video, 'user' => $user]);
        return view('play', compact('comments', 'counts', 'reads', 'users', 'subtopics','looks','shahid'));
    }
}
