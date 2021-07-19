<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;
use Arcanedev\Arabic\DateTime as hijri;

use App\User;
use DB;
use Auth;

class MonthAPIController extends AppBaseController
{
    public function month($id){

        $start =  (new \Datetime())->format('Y-m-01 H:i:s');
        $end =   (new \Datetime())->format('Y-m-30 H:i:s');

        $user = User::find($id);
        $message = "";

        $views = 0;
        $favourite = 0;
        $shared = 0;
        $followed = 0;
        
        /* Videos seen by the user in the month */
        $view_videos = DB::table('reads')
        ->join('videos','videos.id','reads.video_id')
        ->where('reads.user_id', $id)
        ->whereNull('videos.deleted_at')
        ->where('reads.created_at', '>=', $start)
        ->where('reads.created_at', '<', $end)
        ->select(DB::raw('count(*) as views, reads.video_id'))
        ->groupBy('reads.video_id')
        ->get();

        if($view_videos)
            if(count($view_videos))
                $views = count($view_videos);

        /* Videos liked by the user in the month */
        $like_videos = DB::table('likes')
        ->where('likeable_type','App\Models\Video')
        ->where('likes.user_id', $id)
        ->where('likes.created_at', '>=', $start)
        ->where('likes.created_at', '<', $end)
        ->select(DB::raw('count(*) as likes, likes.user_id'))
        ->groupBy('likes.user_id')
        ->first();

        if($like_videos)
            if(count($like_videos))
                $favourite = $like_videos;

        /* Videos shared by the user in the month */
         $share_videos = DB::table('shares')
         ->where('shares.user_id', $id)
         ->where('shares.created_at', '>=', $start)
         ->where('shares.created_at', '<', $end)
         ->count();

         if($share_videos)
            if(count($share_videos))
                $shared = $share_videos;

        /* Videos followed by the user in the month */
        $follows = DB::table('abonne_channel')
        ->where('abonne_channel.user_id', $id)
        ->where('abonne_channel.created_at', '>=', $start)
        ->where('abonne_channel.created_at', '<', $end)
        ->select(DB::raw('count(*) as trends, abonne_channel.user_id'))
        ->groupBy('abonne_channel.user_id')
        ->first();

        if($follows)
            if(count($follows))
                $followed = $follows->trends;

        $month = array('view_videos' => $views, 'like_videos' => $favourite, 'share_videos' => $shared, '$follows' => $followed);

        if($user){
            if($month)
                if(count($month))
                    $message  = "Interaction of this month 'user' : ".$user->name;
                else 
                    return $this->sendError("No interaction yet this month 'user' : ".$user->name);   
        }else 
            return $this->sendError('Usser with id {'.$id.'} not found, try again'); 

        return $this->sendResponse($month, $message);
    }

    public function gregorianToHijri($id){
        $date = new hijri();
        $bismi = new hijri();

        $user = User::find($id);
        if($user){
            if($user->date){
                $anniversary = strtotime($user->date);
                $hajj = explode(",",$date->hijriDate($anniversary));
                $hijri_year = trim($hajj[1]);
                $hijri_month =  explode(" ", $hajj[0])[6];
                $hijri_day = explode(" ", $hajj[0])[5];

                $hijri = $hijri_day ."-". $hijri_month ."-" . $hijri_year;

                $muslim = explode(",",$bismi->date(null,2,false));
                $muslim_year = trim($muslim[1]);
                
                $hegir = $muslim_year - $hijri_year;

                $shahid = array('hijri_day' => $hijri_day, 'hijri_month' => $hijri_month, 'hijri_year' => $hijri_year, 'age' => $hegir);

                $message  = "Hijri informations retrieved sucessfully 'user' : ".$user->name;
            }else 
                return $this->sendError('No birthday date for this user '.$user->name);   
        }else 
            return $this->sendError('User with id {'.$id.'} not found, try again');   
        
        return $this->sendResponse($shahid, $message);
    }

    public function todayToHijri(){
        $date = new hijri();
        $date = explode(",",$date->date(null,2,false));
        if($date && count($date) > 0){
            $hijri_year = $date[1];
            $hijri_month =  explode(" ", $date[0])[6];
            $hijri_day = explode(" ", $date[0])[5];
            $todayHijri = array('DayHijri' => $hijri_day, 'MonthHijri' => $hijri_month, 'YearHijri' => $hijri_year, 'Arabic' => $date);
        }
        else 
            return $this->sendError('Error encountered !');   

        return $this->sendResponse($todayHijri, "The date today in Hijri version retrieved successfully");
    }

    public function barTopic($id){

        $bar = array();

        $bar_sport = 0;
        $bar_din = 0;
        $bar_heal = 0;
        $bar_life = 0;
        $bar_bus = 0;
        $bar_insha = 0;
        $bar_tech = 0;

        $start =  (new \Datetime())->format('Y-m-01 H:i:s');
        $end =   (new \Datetime())->format('Y-m-30 H:i:s');

        $user  = User::find($id);
        $message = "";

        if($user){
            $looks = DB::table('videos')
                    ->join('reads','videos.id','reads.video_id')
                    ->where('reads.user_id', $id)
                    ->where('reads.created_at', '>=', $start)
                    ->where('reads.created_at', '<', $end)
                    ->whereNull('videos.deleted_at')
                    ->count();

            $variant_insha = DB::table('videos')
                    ->join('reads','videos.id','reads.video_id')
                    ->join('sub_topics','sub_topics.id','videos.subtopic_id')
                    ->join('main_topics','main_topics.id','sub_topics.mainTopic_id')
                    ->where('reads.created_at', '>=', $start)
                    ->where('reads.created_at', '<', $end)
                    ->where('reads.user_id', $id)
                    ->where('main_topics.id', 7)
                    ->whereNull('videos.deleted_at')
                    ->count();

            $variant_din = DB::table('videos')
                    ->join('reads','videos.id','reads.video_id')
                    ->join('sub_topics','sub_topics.id','videos.subtopic_id')
                    ->join('main_topics','main_topics.id','sub_topics.mainTopic_id')
                    ->where('reads.created_at', '>=', $start)
                    ->where('reads.created_at', '<', $end)
                    ->where('reads.user_id', $id)
                    ->where('main_topics.id', 6)
                    ->whereNull('videos.deleted_at')
                    ->count();

            $variant_bus = DB::table('videos')
                    ->join('reads','videos.id','reads.video_id')
                    ->join('sub_topics','sub_topics.id','videos.subtopic_id')
                    ->join('main_topics','main_topics.id','sub_topics.mainTopic_id')
                    ->where('reads.created_at', '>=', $start)
                    ->where('reads.created_at', '<', $end)
                    ->where('reads.user_id', $id)
                    ->where('main_topics.id', 4)
                    ->whereNull('videos.deleted_at')
                    ->count();

            $variant_heal = DB::table('videos')
                    ->join('reads','videos.id','reads.video_id')
                    ->join('sub_topics','sub_topics.id','videos.subtopic_id')
                    ->join('main_topics','main_topics.id','sub_topics.mainTopic_id')
                    ->where('reads.created_at', '>=', $start)
                    ->where('reads.created_at', '<', $end)
                    ->where('reads.user_id', $id)
                    ->where('main_topics.id', 1)
                    ->whereNull('videos.deleted_at')
                    ->count();

            $variant_sport = DB::table('videos')
                    ->join('reads','videos.id','reads.video_id')
                    ->join('sub_topics','sub_topics.id','videos.subtopic_id')
                    ->join('main_topics','main_topics.id','sub_topics.mainTopic_id')
                    ->where('reads.created_at', '>=', $start)
                    ->where('reads.created_at', '<', $end)
                    ->where('reads.user_id', $id)
                    ->where('main_topics.id', 3)
                    ->whereNull('videos.deleted_at')
                    ->count();

            $variant_life = DB::table('videos')
                    ->join('reads','videos.id','reads.video_id')
                    ->join('sub_topics','sub_topics.id','videos.subtopic_id')
                    ->join('main_topics','main_topics.id','sub_topics.mainTopic_id')
                    ->where('reads.created_at', '>=', $start)
                    ->where('reads.created_at', '<', $end)
                    ->where('reads.user_id', $id)
                    ->where('main_topics.id', 2)
                    ->whereNull('videos.deleted_at')
                    ->count();

            $variant_tech = DB::table('videos')
                    ->join('reads','videos.id','reads.video_id')
                    ->join('sub_topics','sub_topics.id','videos.subtopic_id')
                    ->join('main_topics','main_topics.id','sub_topics.mainTopic_id')
                    ->where('reads.created_at', '>=', $start)
                    ->where('reads.created_at', '<', $end)
                    ->where('reads.user_id', $id)
                    ->where('main_topics.id', 5)
                    ->whereNull('videos.deleted_at')
                    ->count();

            if($variant_life != 0)
                $bar_life = ($variant_life/$looks)*100;
            if($variant_sport != 0)
                $bar_sport = ($variant_sport/$looks)*100;
            if($variant_heal != 0)
                $bar_heal = ($variant_heal/$looks)*100;
            if($variant_bus != 0)
                $bar_bus = ($variant_bus/$looks)*100;
            if($variant_din != 0)
                $bar_din = ($variant_din/$looks)*100;
            if($variant_insha != 0)
                $bar_insha = ($variant_insha/$looks)*100;
            if($variant_tech != 0)
                $bar_tech = ($variant_tech/$looks)*100;

            $bar = array('bar_inshallah' => $bar_insha, 'bar_din' => $bar_din, 'bar_business' => $bar_bus, 'bar_healthcare' => $bar_heal, 'bar_sport' => $bar_sport, 'bar_life' => $bar_life, 'bar_tech' => $bar_tech, 'bar_education' => null, 'bar_news' => null );

            $message  = "Shahid bar informations retrieved sucessfully 'user' ".$user->name;
        }else 
            return $this->sendError('User with id {'.$id.'} not found, try again'); 

        return $this->sendResponse($bar, $message);
    }
}
