@extends('layouts.sidbarNavigation')
<head>
    @section('css')
    <link rel="stylesheet" href="{{asset('bootstrap/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/menu.css')}}">
    <link rel="stylesheet" href="{{asset('swiper/swiper-bundle.min.css')}}">
    @endsection
</head>
<body>
@section('content-play-element')
<div class="contentOneMonFlow">
    <div class="pub-bando-connect d-block">
        <!--  <div class="info-pub-bando">
             <div class="accroche">
                 <a class="accrocheskate" href="">
                     <img class="accrocheskateImg" src="{{ asset('img/Nuage-rose.png') }}" alt="">
                     <p class="link-212">Trouves ton skate</p>
                 </a>
             </div>
             <div class="annonces">
                 <p class="text-block-294">Annonces</p>
                 <p class="link-229">www.pub-link</p>
                 <a href="" class="go w-inline-block text-block-295">Go!</a>
             </div>
             <div class="like-notication2">
                 <button class="btn btnNote">
                     <img src="{{ asset('img/Image-5.png') }}" alt="">
                 </button>
                 <button class="btn btnNote">
                     <img src="{{ asset('img/Image-6.png') }}" alt="">
                 </button>
             </div>
         </div>
         <div class="imgPubBlock">
             <img src="{{ asset('img/Mu-bandeau-Pub.jpg') }}" alt="">
         </div>
     </div> -->
    <p class="text-block-350">{{count($follows) > 0 ?  count($follows) . " notifications" : "0 notification ". __('- you have to follow a chain to get it.') }} </p>
    <div class="div-block-406">
        @foreach($follows as $box)
        <div class="div-block-407">
            @php
            $video = DB::Table('videos')->select('videos.*')
                    ->where('videos.user_id', $box->user_id)
                    ->whereNull('videos.deleted_at')
                    ->orderByDesc('videos.created_at')
                    ->first();
            @endphp
            <div class="div-block-414" style="width:100%">
                <a href="{{route('play', $video->id)}}" class="div-block-412" style="width:40%; text-decoration: none;">
                    <div class="vignette">
                        @if($video->thumbnail)
                            <img class="image-135" src="{{ asset('vids/thumbnails/') }}/{{$video->thumbnail}}" alt="">
                        @else
                            <img src="{{ asset('img/grille.png') }}" class="image-135">
                        @endif
                    </div>
                    <div class="div-block-410">
                        <div class="text-block-394" style="color:333333">{{substr($video->description, 0, 60)}} ...</div>
                        <!-- Date creation relative -->
                        @if(intval(abs(strtotime("now") - strtotime($video->created_at))/ 86400) == 0)
                                                @if(intval(abs(strtotime("now") - strtotime($video->created_at))/ 3600) > 0)
                                                <p class="publication-info-recom">{{intval(abs(strtotime("now") - strtotime($video->created_at))/3600)}} hours ago </p>
                                                @else(intval(abs(strtotime("now") - strtotime($video->created_at))/ 3600) == 0)
                                                <p class="publication-info-recom">{{intval(abs(strtotime("now") - strtotime($video->created_at))/60)}} minutes ago </p>
                                                @endif
                                                @elseif(intval(abs(strtotime("now") - strtotime($video->created_at))/ 86400) == 1)
                                                <p class="publication-info-recom">Yesterday at {{strftime("%H:%M", strtotime($video->created_at))}}</p>
                                                @elseif(intval(abs(strtotime("now") - strtotime($video->created_at))/ 86400) >= 2 && intval(abs(strtotime("now") - strtotime($video->created_at))/ 86400) <= 27)
                                                <p class="publication-info-recom"> {{intval(abs(strtotime("now") - strtotime($video->created_at))/ 86400)}} days ago </p>
                                                @elseif(intval(abs(strtotime("now") - strtotime($video->created_at))/ 86400) > 30)
                                                <p class="publication-info-recom">{{intval(abs(strtotime("now") - strtotime($video->created_at))/ 2592000) }} months ago</p>
                                                @else(intval(abs(strtotime("now") - strtotime($video->created_at))/ 2592000) > 12)
                                                <p class="publication-info-recom">{{intval(abs(strtotime("now") - strtotime($video->created_at))/ 2592000 * 12) }} years ago</p>
                                                @endif
                    </div>
                </a>
                
                <a href="{{route('channel.visitor', $box->id)}}" class="div-block-413" style="width:55%; color:333333; text-decoration:none;">
                    <div class="div-block-409">
                        <img src="{{asset('img')}}/{{$box->logo}} " alt="" class="image-136">
                    </div>
                    <div class="text-block-395">{{$box->name}}</div>
                </a>
            </div>
            <!-- <button class="points-vertical">
                <div class="div-block-411"></div>
                <div class="div-block-411"></div>
                <div class="div-block-411"></div>
            </button> -->
        </div>
        @endforeach
    </div>

    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('bootstrap/bootstrap.min.js')}}"></script>
    <script src="{{asset('swiper/swiper-bundle.min.js')}}"></script>
    <script src="{{asset('js/fixeElement.js')}}"></script>
    @endsection
</body>