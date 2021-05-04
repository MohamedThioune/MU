@extends('layouts.sidbarNavigation')
<html lang="fr">
<head>
    @section('css')
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <link rel="stylesheet" href="{{asset('swiper/swiper-bundle.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/menu.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    @endsection

</head>
<?php 
if(!Auth::guest()){
     
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
            $video = App\Models\Video::find($look->video_id);
            if($video->duration){
                $duration = strtotime($video->duration);
                $shahid += $duration;
            }
        };
    
        $shahid = date('H:i:s', $shahid);

        $looks = DB::table('videos')
        ->join('reads','videos.id','reads.video_id')
        ->where('reads.user_id', Auth::id())
        ->where('reads.created_at', '>=', $start)
        ->where('reads.created_at', '<', $end)
        ->whereNull('videos.deleted_at')
        ->count();
        
       

        $date = new hijri();
        $date = explode(",",$date->date(null,2,false));
        $hijri_year = $date[1];
        $hijri_month =  explode(" ", $date[0])[6];
        $hijri_day = explode(" ", $date[0])[5];
        $gregorian =  (new \Datetime())->format('d.m.Y');
        /* 
          * 
        */
        }
?>
<body>
@section('content-play-element')


                <div class="" style="margin-top:150px;width:50%; height:1000px !important; margin-left:18%">
                <div class="time-mon-flow" >
                    <div class="div-block-342"><img src="{{ asset('img/Time-shahid.svg') }}"  alt="" class="shadid103"></div>
                    <div class="div-block-341">
                        <p class="text-block-290">Time shahid</p>
                        @php $shahid = explode(":",$shahid); if($shahid[0] == "00") $shahid[0] = "0"; @endphp
                        <p class="temps-tsha">{{$shahid[0]}}h {{$shahid[1]}} mn</p>
                        <p class="text-block-329" style="font-size:1.0em">{{$hijri_day}} {{$hijri_month}} {{$hijri_year}}</p>
                        <p class="text-block-329" style="font-size:0.8em">{{$gregorian}}</p>
                    </div>
                </div>
                @php
                    $start =  (new \Datetime())->format('Y-m-01 H:i:s');
                    $end =  (new \Datetime())->format('Y-m-30 H:i:s');
                @endphp
                @if($looks > 0)
                <div class="div-block-364">
                    <div class="div-block-354">
                    @php
                        $variant = DB::table('videos')
                                ->join('reads','videos.id','reads.video_id')
                                ->join('sub_topics','sub_topics.id','videos.subtopic_id')
                                ->join('main_topics','main_topics.id','sub_topics.mainTopic_id')
                                ->where('reads.created_at', '>=', $start)
                                ->where('reads.created_at', '<', $end)
                                ->where('reads.user_id', Auth::id())
                                ->where('main_topics.id', 7)
                                ->whereNull('videos.deleted_at')
                                ->count();
                        @endphp
                        <p class="text-block-354">In sha Allah</p>

                        <div class="progress-bar" role="progressbar bg-info" style="width:{{$variant != 0 ?(($variant/$looks)*100):'0'}}%; height:15px; border-radius:10px; background:#ebebeb; " aria-valuenow="{{($variant/$looks)*100}}" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="div-block-354">
                        @php
                        $variant = DB::table('videos')
                                ->join('reads','videos.id','reads.video_id')
                                ->join('sub_topics','sub_topics.id','videos.subtopic_id')
                                ->join('main_topics','main_topics.id','sub_topics.mainTopic_id')
                                ->where('reads.user_id', Auth::id())
                                ->where('reads.created_at', '>=', $start)
                                ->where('reads.created_at', '<', $end)
                                ->where('reads.user_id', Auth::id())
                                ->where('main_topics.id', 6)
                                ->whereNull('videos.deleted_at')
                                ->count();
                        @endphp
                        <p class="text-block-355">Din</p>
                        <div class="progress-bar" role="progressbar bg-info" style="width:{{$variant != 0 ?(($variant/$looks)*100):'0'}}%; height:15px; border-radius:10px; background:#ebebeb; " aria-valuenow="{{($variant/$looks)*100}}" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="div-block-354">
                        @php
                        $variant = DB::table('videos')
                                ->join('reads','videos.id','reads.video_id')
                                ->join('sub_topics','sub_topics.id','videos.subtopic_id')
                                ->join('main_topics','main_topics.id','sub_topics.mainTopic_id')
                                ->where('reads.user_id', Auth::id())
                                ->where('reads.created_at', '>=', $start)
                                ->where('reads.created_at', '<', $end)
                                ->where('reads.user_id', Auth::id())
                                ->where('main_topics.id', 4)
                                ->whereNull('videos.deleted_at')
                                ->count();
                        @endphp
                        <p class="text-block-356">Business </p>
                        <div class="progress-bar" role="progressbar bg-info" style="width:{{$variant != 0 ?(($variant/$looks)*100):'0'}}%; height:15px; border-radius:10px; background:#ebebeb; " aria-valuenow="{{($variant/$looks)*100}}" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="div-block-354">
                        @php
                        $variant = DB::table('videos')
                                ->join('reads','videos.id','reads.video_id')
                                ->join('sub_topics','sub_topics.id','videos.subtopic_id')
                                ->join('main_topics','main_topics.id','sub_topics.mainTopic_id')
                                ->where('reads.created_at', '>=', $start)
                                ->where('reads.created_at', '<', $end)
                                ->where('reads.user_id', Auth::id())
                                ->where('main_topics.id', 1)
                                ->whereNull('videos.deleted_at')
                                ->count();
                        @endphp
                        <p class="text-block-357">Health</p>
                        <div class="progress-bar" role="progressbar bg-info" style="width:{{$variant != 0 ?(($variant/$looks)*100):'0'}}%; height:15px; border-radius:15px; background:#ebebeb; " aria-valuenow="{{($variant/$looks)*100}}" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="div-block-354">
                        @php
                        $variant = DB::table('videos')
                                ->join('reads','videos.id','reads.video_id')
                                ->join('sub_topics','sub_topics.id','videos.subtopic_id')
                                ->join('main_topics','main_topics.id','sub_topics.mainTopic_id')
                                ->where('reads.created_at', '>=', $start)
                                ->where('reads.created_at', '<', $end)
                                ->where('reads.user_id', Auth::id())
                                ->where('main_topics.id', 3)
                                ->whereNull('videos.deleted_at')
                                ->count();
                        @endphp
                        <p class="text-block-359">Sport Fit</p>
                        <div class="progress-bar" role="progressbar bg-info" style="width:{{$variant != 0 ?(($variant/$looks)*100):'0'}}%; height:15px; border-radius:10px; background:#ebebeb; " aria-valuenow="{{($variant/$looks)*100}}" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="div-block-354">
                        @php
                        $variant = DB::table('videos')
                                ->join('reads','videos.id','reads.video_id')
                                ->join('sub_topics','sub_topics.id','videos.subtopic_id')
                                ->join('main_topics','main_topics.id','sub_topics.mainTopic_id')
                                ->where('reads.created_at', '>=', $start)
                                ->where('reads.created_at', '<', $end)
                                ->where('reads.user_id', Auth::id())
                                ->where('main_topics.id', 2)
                                ->whereNull('videos.deleted_at')
                                ->count();
                        @endphp
                        <p class="text-block-367">Life </p>
                        <div class="progress-bar" role="progressbar bg-info" style="width:{{$variant != 0 ?(($variant/$looks)*100):'0'}}%; height:15px; border-radius:10px; background:#ebebeb; " aria-valuenow="{{($variant/$looks)*100}}" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="div-block-354">
                        @php
                        $variant = DB::table('videos')
                                ->join('reads','videos.id','reads.video_id')
                                ->join('sub_topics','sub_topics.id','videos.subtopic_id')
                                ->join('main_topics','main_topics.id','sub_topics.mainTopic_id')
                                ->where('reads.created_at', '>=', $start)
                                ->where('reads.created_at', '<', $end)
                                ->where('reads.user_id', Auth::id())
                                ->where('main_topics.id', 5)
                                ->whereNull('videos.deleted_at')
                                ->count();
                        @endphp
                        <p class="text-block-361">Tech et science </p>
                        <div class="progress-bar" role="progressbar bg-info" style="width:{{$variant != 0 ?(($variant/$looks)*100):'0'}}%; height:15px; border-radius:10px; background:#ebebeb; " aria-valuenow="{{($variant/$looks)*100}}" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="div-block-354">
                        <p class="text-block-358">Education</p>
                        <!-- <div class="progress-bar" role="progressbar bg-info" style="width:{{$variant != 0 ?(($variant/$looks)*100):'0'}}%; height:15px; border-radius:10px; background:#ebebeb; " aria-valuenow="{{($variant/$looks)*100}}" aria-valuemin="0" aria-valuemax="100"></div> -->
                    </div>
                    <div class="div-block-354">
                        <p class="text-block-360">News</p>
                        <!-- <div class="progress-bar" role="progressbar bg-info" style="width:{{$looks != 0 & $variant != 0 ?(($variant/$looks)*100):'0'}}%; height:15px; border-radius:10px; background:#ebebeb; " aria-valuenow="{{($variant/$looks)*100}}" aria-valuemin="0" aria-valuemax="100"></div> -->
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>

<script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('bootstrap/bootstrap.min.js')}}"></script>
    <script src="{{asset('swiper/swiper-bundle.min.js')}}"></script>
<script>
    var swiper = new Swiper('.swipeContainermodife1', {
        slidesPerView: 3,
        spaceBetween: 30
    });
</script>
<script>
    var swiper = new Swiper('.swipeContainermodife3', {
        slidesPerView: 3,
        spaceBetween: 30
    });
</script>

<script>
    var swiper = new Swiper('.swiper-helatcare', {
        slidesPerView: 4.4,
        spaceBetween: 30,
        // Responsive breakpoints
        breakpoints: {

            // when window width is <= 320px
            320: {
                slidesPerView: 1.2,
                spaceBetween: 10
            },
            // when window width is <= 480px
            480: {
                slidesPerView: 2.3,
                spaceBetween: 10
            },
            980: {
                slidesPerView: 3,
                spaceBetween: 10
            },
            1200: {
                slidesPerView: 4.4,
                spaceBetween: 30
            },


        }
    });
</script>
    <script src="{{asset('js/fixeElement.js')}}"></script>
    @endsection
</body>
