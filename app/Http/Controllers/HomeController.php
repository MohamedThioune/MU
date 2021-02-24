<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;
use App\Models\Video;
use App\User;
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
        $video->users()->attach(Auth::id());
        session(['video' => $video, 'user' => $user]);
        return redirect('/play');
    }
}
