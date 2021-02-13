<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;
use App\Models\Video;
use App\User;
use App\Models\Read;

use Carbon\Carbon;
use Auth;

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
        $profile = Profile::find($id);
        session(['profile' => $profile]);
        return redirect('/');
    }

    public function play($id){

        $video = Video::find($id);
        $user = User::find($video->user_id); 

        $dt = Carbon::now();
        $time = $dt->format('h:i:s');
        $inputs_read = ['time_read' => $time, 'video_id' => $id, 'user_id' => Auth::id()];

        Read::create($inputs_read);

        session(['video' => $video, 'user' => $user]);
        return redirect('/play');
    }
}
