    @if(!Auth::guest())
    <div id="resume" class="resume-flow spaceElementFlow">
        <div class="div-block-343">
            <div class="div-block-352">
                <p class="text-block-353-copy">{{__('This month')}}</p>
                <div class="resume-activitee">
                    <div class="nombre-de">
                        <p class="text-block-351">{{__('Videos viewed')}}</p>
                        <div class="div-block-344">
                            <div class="div-block-345">
                            @if($look_videos)
                                <p class="text-block-352">{{count($look_videos)}}</p>
                            @endif
                            </div>
                            <div class="div-block-347">
                                <img src="{{ asset('img/Mu-video-regarder2x.png') }}" class="imgRegarde" width="61" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="nombre-de">
                        <p class="text-block-351">{{__('Favourite videos')}}</p>
                        <div class="div-block-344">
                            <div class="div-block-345">
                                @if($like_videos)
                                <p class="text-block-352">{{$like_videos->likes}} </p>
                                @else
                                <p class="text-block-352">0</p>
                                @endif
                            </div>
                            <div class="div-block-348">
                                <img src="{{ asset('img/Mu-video-likee2x.png') }}" class="imgVideoLike"  alt=""></div>
                        </div>
                    </div>
                    <div class="nombre-de">
                        <p class="text-block-351">{{__('Shared videos')}}</p>
                        <div class="div-block-344">
                            <div class="div-block-345">
                                <p class="text-block-352">0 </p>
                            </div>
                            <div class="div-block-349">
                                <img src="{{ asset('img/Mu-nbr-de-partage2x.png') }}" class="imgVideoLike" alt=""></div>
                        </div>
                    </div>
                    <div class="nombre-de">
                        <p class="text-block-351">{{__('Sadakatiyas supported')}}</p>
                        <div class="div-block-344">
                            <div class="div-block-345">
                                <p class="text-block-352">0</p>
                            </div>
                            <div class="div-block-350">
                                <img src="{{ asset('img/Mu-sadaka-support2x.png') }}" class="imgVideoLike" alt=""></div>
                        </div>
                    </div>
                    <div class="nombre-de">
                        <p class="text-block-351">{{__('Channels followed')}}</p>
                        <div class="div-block-344">
                            <div class="div-block-345">
                            @if($follows)
                                @if($follows->trends)
                                    <p class="text-block-352">{{$follows->trends}} </p>
                                @endif
                            @else
                                <p class="text-block-352">0</p>
                            @endif
                            </div>
                            <div class="div-block-351">
                                <img src="{{ asset('img/Mu-chaine-follow-gris2x.png') }}"  class="imgVideoLike"></div>
                        </div>
                    </div>
                </div>
                <div>
                @php
                    $date = null;
                    if($date && count($date) > 0){
                        $hijri_year = $date[1];
                        $hijri_month =  explode(" ", $date[0])[6];
                        $hijri_day = explode(" ", $date[0])[5];
                    }
                    $gregorian =  (new \Datetime())->format('d.m.Y');
                @endphp

                    <div class="time-mon-flow">
                        <div class="div-block-342"><img src="{{ asset('img/Time-shahid.svg') }}"  alt="" class="shadid103"></div>
                        <div class="div-block-341">
                            <p class="text-block-290">Time shahid</p>
                            @php $shahid = explode(":",$shahid); if($shahid[0] == "00") $shahid[0] = "0"; @endphp
                            @if($shahid)<p class="temps-tsha">{{$shahid[0]}}h {{$shahid[1]}} mn</p>@endif
                            <p class="text-block-329" style="font-size:1.0em">{{$hijri_day}} {{$hijri_month}} {{$hijri_year}}</p>
                            <p class="text-block-329" style="font-size:0.8em">{{$gregorian}}</p>
                        </div>
                    </div>
                    @php
                        $start =  (new \Datetime())->format('Y-m-01 H:i:s');
                        $end =   (new \Datetime())->format('Y-m-30 H:i:s');
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
    @endif

<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('bootstrap/bootstrap.min.js')}}"></script>
<script src="{{asset('swiper/swiper-bundle.min.js')}}"></script>
<script>
    var swiper = new Swiper('.swipeSuggestion', {
        slidesPerView: 4,
        spaceBetween: 10,
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
<script>
    var swiper = new Swiper('.swipeContainermodife3', {
        slidesPerView: 4,
        spaceBetween: 10,
        // Responsive breakpoints
        breakpoints: {

            // when window width is <= 320px
            320: {
                slidesPerView: 3.6,
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
</body> -->
