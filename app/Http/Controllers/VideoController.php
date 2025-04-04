<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateVideoRequest;
use App\Http\Requests\UpdateVideoRequest;
use App\Http\Controllers\AppBaseController;
use App\Models\Video;
use App\Models\SubTopic;
use App\Models\MainTopic;
use Illuminate\Http\Request;
use Flash;
use Response;
use Illuminate\Support\Str;
use Auth;
use DB;
use getID3;
use Math;
use Carbon\Carbon; 
use App\Models\Unlike;

class VideoController extends AppBaseController
{
    /**
     * Display a listing of the videos.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        // /** @var Video $videos */
        // $videos = Video::all();

        /** @var Subtopic $subtopics */
        $subtopics = SubTopic::all();

        $duration = null;
        $id = Auth::id();
        $videos = DB::Table('users')->select('videos.*')
                                      ->join('videos', 'users.id', 'videos.user_id')
                                      ->where('users.id', $id)
                                      ->whereNull('videos.deleted_at')
                                      ->get();

        /** @var Channel $channel */
        $channel = DB::Table('users')->select('channels.*')
                                        ->join('channels', 'users.id', 'channels.user_id')
                                        ->where('users.id', Auth::id())
                                        ->first();
        foreach ($videos as $video) {
            if ($video->duration){
                $durations = explode(':', $video->duration);

                if($durations[0] == "00")
                    $duration = $durations[1]. ':' .$durations[2];
                else
                    $duration = $durations[0]. ':' .$durations[1]. ':' .$durations[2];
            }
        }

        $_COOKIE['state'] = "channel";
        
        return view('videos.index', compact('videos', 'subtopics', 'channel'));
    }

    /**
     * Show the form for creating a new videos.
     *
     * @return Response
     */
    public function create()
    {
        $subtopics = SubTopic::all();
    
        /** @var SubTopic $subtopics */
        $subtopics_health = DB::Table('sub_topics')->select('sub_topics.*')
        ->join('main_topics', 'main_topics.id', 'sub_topics.maintopic_id')
        ->where('sub_topics.maintopic_id', 3)
        ->get();

        $subtopics_life = DB::Table('sub_topics')->select('sub_topics.*')
        ->join('main_topics', 'main_topics.id', 'sub_topics.maintopic_id')
        ->where('sub_topics.maintopic_id', 2)
        ->get();

        $subtopics_healthcare = DB::Table('sub_topics')->select('sub_topics.*')
        ->join('main_topics', 'main_topics.id', 'sub_topics.maintopic_id')
        ->where('sub_topics.maintopic_id', 1)
        ->get();

        $subtopics_education = DB::Table('sub_topics')->select('sub_topics.*')
        ->join('main_topics', 'main_topics.id', 'sub_topics.maintopic_id')
        ->where('sub_topics.maintopic_id', 6)
        ->get();

        $subtopics_business = DB::Table('sub_topics')->select('sub_topics.*')
        ->join('main_topics', 'main_topics.id', 'sub_topics.maintopic_id')
        ->where('sub_topics.maintopic_id', 4)
        ->get();

        $subtopics_new = DB::Table('sub_topics')->select('sub_topics.*')
        ->join('main_topics', 'main_topics.id', 'sub_topics.maintopic_id')
        ->where('sub_topics.maintopic_id', 5)
        ->get();

        $subtopics_inshaallah = DB::Table('sub_topics')->select('sub_topics.*')
        ->join('main_topics', 'main_topics.id', 'sub_topics.maintopic_id')
        ->where('sub_topics.maintopic_id', 7)
        ->get();


        /** @var Channel $channel */
        $channel = DB::Table('users')->select('channels.*')
                                                        ->join('channels', 'users.id', 'channels.user_id')
                                                        ->where('users.id', Auth::id())
                                                        ->first();

        $_COOKIE['state'] = "channel";

        return view('videos.create',compact('subtopics_health', 'subtopics_life', 'subtopics_healthcare', 'subtopics_business', 'subtopics_education', 'subtopics_new', 'subtopics_inshaallah', 'subtopics', 'channel'));
    }

    /**
     * Store a newly created Video in storage.
     *
     * @param CreateVideoRequest $request
     *
     * @return Response
     */
    public function store(CreateVideoRequest $request)
    {
        $input = $request->all();
        $input['user_id'] = Auth::id();
        //define type uploaded
        $video_type = "video";

        //retrieve the image thumbnail & the video
        $video = $request->file('vid');
        $thumbnail = $request->file('thumbnail');

        if($video){
            
            //Call to anonnymous function to upload image
            $input['vid'] = (function() use ($video, $video_type){  
               
               //check if the file has been uploaded without error.
               if($video) {
                   $path = config($video_type.'.path');
       
                   $extension = $video->getClientOriginalExtension();

                   //download the file
                   do{
                       $nom = Str::random(25). '.' . $extension;
                   }
                   while(file_exists($path ."/". $nom));
                   
                   if($video->move($path, $nom)){
                       //redirection with success
                       return $nom;
                   }
                   
               } 
               else{
                   Flash::error('Your file is corrupted, please choose another one or try again later.');
                   return redirect(route('videos.index'));
                }
           })();
           $path = config($video_type.'.path');
           $getID3 = new getID3;
           $data = $getID3->analyze($path."/".$input['vid']); 
           $duration_hours =  floor($data['playtime_seconds'] / 360) ;
           $duration_minutes = floor($data['playtime_seconds'] / 60) ;
           $duration_seconds = floor($data['playtime_seconds'] - $duration_minutes * 60);
           $input['duration'] = Carbon::createFromTime($duration_hours, $duration_minutes, $duration_seconds);
       }

       if($thumbnail){
        //Call to anonnymous function to upload image
        $input['thumbnail'] = (function() use ($thumbnail, $video_type){  
           
           //check if the file has been uploaded without error.
           if($thumbnail) {
               $path = config($video_type.'.second_path');
   
               $extension = $thumbnail->getClientOriginalExtension();
               //download the file
               do{
                   $nom = Str::random(25). '.' . $extension;
               }
               while(file_exists($path ."/". $nom));
               
               if($thumbnail->move($path, $nom)){
                   //redirection with success
                   return $nom;
               }
           } 
           else{
               Flash::error('Your file is corrupted, please choose another one or try again later.');
               return redirect(route('videos.index'));
            }
       })();
   }
        $input['online'] = 1;
        /** @var Video $video */
        $video = Video::create($input);

        Flash::success('Video saved successfully.');

        return redirect(route('videos.index'));
    }

    /**
     * Display the specified videos.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Video $video */
        $video = Video::find($id);

        if (empty($video)) {
            Flash::error('Video not found');

            return redirect(route('videos.index'));
        }

        return view('videos.show')->with('video', $video);
    }

    /**
     * Show the form for editing the specified videos.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var Video $video */
        $video = Video::find($id);

        /** @var MainTopic $maintopics */
        $subtopics = SubTopic::all();

        if (empty($video)) {
            Flash::error('Video not found');

            return redirect(route('videos.index'));
        }

        return view('videos.edit',compact('video','subtopics'));
    }

    /**
     * Update the specified Video in storage.
     *
     * @param int $id
     * @param UpdateVideoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateVideoRequest $request)
    {
        /** @var Video $video */
        $vid = Video::find($id);

        if (empty($vid)) {
            Flash::error('Video not found');

            return redirect(route('videos.index'));
        }

        $input = $request->all();
        
        //define type uploaded
        $video_type = "video";

        //retrieve the image thumbnail & the video
        $video = $request->file('vid');
        $thumbnail = $request->file('thumbnail');
        $input['mainTopic'] = $request->mainTopic_id;

        if($video){
                $getID3 = new getID3;
                //Call to anonnymous function to upload image
                $input['vid'] = (function() use ($video, $video_type){  
               
               //check if the file has been uploaded without error.
               if($video) {
                   $path = config($video_type.'.path');
       
                   $extension = $video->getClientOriginalExtension();

                   //download the file
                   do{
                       $nom = Str::random(25). '.' . $extension;
                   }
                   while(file_exists($path ."/". $nom));
                   
                   if($video->move($path, $nom)){
                       //retrieve name video
                       return $nom;
                   }
                   
               } 
               else{
                   Flash::error('Your file is corrupted, please choose another one or try again later.');
                   return redirect(route('videos.index'));
                }
           })();
       }else{
            $input['vid'] = $vid->vid;
       }

       if($thumbnail){
            //Call to anonnymous function to upload image
            $input['thumbnail'] = (function() use ($thumbnail, $video_type){  
            
            //check if the file has been uploaded without error.
            if($thumbnail) {
                $path = config($video_type.'.second_path');
    
                $extension = $thumbnail->getClientOriginalExtension();
                //download the file
                do{
                    $nom = Str::random(25). '.' . $extension;
                }
                while(file_exists($path ."/". $nom));
                
                if($thumbnail->move($path, $nom)){
                    //redirection with success
                    return $nom;
                }
            } 
            else{
                Flash::error('Your file is corrupted, please choose another one or try again later.');
                return redirect(route('videos.index'));
                }
            })();
       }else

        $vid->fill($input);
        $vid->save();

        Flash::success('Video updated successfully.');

        return redirect(route('videos.index'));
    }

    /**
     * Remove the specified Video from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Video $video */
        $video = Video::find($id);

        if (empty($video)) {
            Flash::error('Video not found');

            return redirect(route('videos.index'));
        }

        $video->delete();

        Flash::success('Video deleted successfully.');

        return redirect(route('videos.index'));
    }

    public function likeVideo($video_id){
        $user = Auth::user();
        $video = Video::find($video_id);

        $user->toggleLike($video);
        $unlike = Unlike::where([
            ['user_id', '=', $user->id],
            ['video_id', '=', $video->id],
        ])->delete();
        
        return redirect()->back();
    }

    public function dislikeVideo($video_id){
        $user = Auth::user();
        $video = Video::find($video_id);
        $unlikes = Unlike::where([
            ['user_id', '=', $user->id],
            ['video_id', '=', $video->id],
        ])->first();
        if(empty($unlikes)){
            $unlike = new Unlike();

            $unlike->user_id = Auth::user()->id;
            $unlike->video_id = $video_id;
            $unlike->save();
            
        }
        else{
            $unlike = Unlike::where([
                ['user_id', '=', $user->id],
                ['video_id', '=', $video->id],
            ])->delete();
        }
        $user->unlike($video);
        
        return redirect()->back();
    }

    public function deletes(){
        if($_POST['checkboxes']){
            extract($_POST);

            if(count($checkboxes) == 1 && $checkboxes[0]=="null")
            return redirect()->back();

            foreach($checkboxes as $checkbox){
                if($checkbox != "null"){
                $video = Video::find($checkbox);
                $video->delete();
                }
            }
            Flash::success('Videos deleted successfully.');
        }

        return redirect()->back();
    }
}