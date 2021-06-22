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
<body class="home-body">
@php if(isset($_COOKIE['lang'])) App::setLocale($_COOKIE['lang']); @endphp
@section('content-play-element')
<div class="contentOneMonFlow"></div>
    @php
        $link = DB::Table('users')->select('channels.*')
        ->join('channels', 'users.id', 'channels.user_id')
        ->where('users.id', Auth::id())
        ->first();
    @endphp
    <p class="text-block-350" style="font-size: 1.5em;">{{__('All your information at a glance')}}</p>
    <div class="menu-content-business-copy business-Web">
        <!-- <span class="link-26"  data-toggle="tooltip" data-placement="top" title="Vous avez acces a toutes vos infos sur cette page">Infos</span> -->
        <a href="#event" class="link-26">Events.</a>
        <a href="#resume" class="link-26">Resume</a>
        <a href="#Playlist-flow" class="link-26">Playlist</a>
        <a href="{{route('channel.visitor',[$link->id])}}#Offre-business" class="link-26">{{__('Offers')}}</a>
    </div>
    <div class="business-MOb">
        <div class="swiper-container swipeContainermodife3">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <a href="#" class="link-26">Infos</a>
                </div>
                <div class="swiper-slide">
                    <a href="#" class="link-26">Events.</a>
                </div>
                <div class="swiper-slide">
                    <a href="{{route('flow')}}" class="link-26">Resume</a>
                </div>
                <div class="swiper-slide">
                    <a href="#" class="link-26">{{__('Offers')}}</a>
                </div>
            </div>
        </div>
    </div>

<div id="hot" class="hot-notification-block spaceElementFlow">
    <div class="div-block-403">
        <p class="titre-recommandation ">{{__('Hot notifications')}}</p>
        <a href="{{route('notification')}}" class="text-block-392">{{__('All notifications')}}</a>
    </div>
    <div class="div-block-367">
        @if(Auth::user()->state == 0)
            <div class="div-block-476">
                <div class="div-block-391-copy">
                    <div class="div-block-393">
                        <div class="div-block-392">
                            <img src="{{asset('img/Mu-video-format-bike-girl.jpg')}}"class="image-130">
                        </div>
                        <div class="text-hot-flow">
                            <div>
                                <p class="hot-flow-description-txt-2-copy">Je m&#x27;implique dans ma oumma</p>
                                <p class="mb-0">J&#x27;active mon abonnement</p>
                                <div class="like-notication"></div>
                            </div>
                        </div>
                    </div>
                    <a href="#" class="button-35 w-button">Bismillah</a>
                    <p class="text-block-427">Pourquoi activé mon abonnement ?</p>
                </div>
            </div>
        @endif
        @if($video && count($video) > 0)
            <div class="recondation-video-card">
                <a href="{{route('play', $video->id)}}" class="video-vignette-recom">
                    @if($video->thumbnail)
                        <img src="{{asset('vids/thumbnails/') }}/{{$video->thumbnail}}" class="vignette-video-sugg">
                    @else
                        <img src="{{asset('img/grille.png')}}" class="vignette-video-sugg">
                    @endif
                </a>
                @php 
                    $date = explode(":",$video->duration);
                    if($date && count($date) > 0)
                        if($date[0] = "00")
                            $video->duration = $date[1] . ":" . $date[2];
                @endphp
                <p class="durationVideo2">{{$video->duration}}</p>
                <div class="vignette-vid-info-recom">
                    <div class="div-block-295">
                    <a href="{{route('play',$video->id)}}" class="titre-v-c-recom" style="text-decoration:none">{{$video->main_title}}</a>
                        <div class="badge-eval">
                            <img src="{{asset('img/Mu-badge-vide2x.png')}}" class="image-111">
                        </div>
                    </div>
                    <div class="resume-vigne-stat">
                        <div class="bull-name-stat">
                            @php
                                $channel = DB::Table('users')->select('channels.*')
                                    ->join('channels', 'users.id', 'channels.user_id')
                                    ->where('users.id', $video->user_id)
                                    ->first();

                                $playlist = DB::Table('playlists')->select('playlists.*')
                                    ->where('playlists.user_id', Auth::id())
                                    ->where('playlists.video_id', $video->id)
                                    ->first();
                            @endphp
                            @if($channel)
                            <a href="{{route('channel.visitor', $channel->id)}}" class="bull-id-acount-recom w-inline-block">
                                <img src="{{ asset('/img') }}/{{$channel->logo}}" class="image-109">
                            </a>
                            
                            <div class="div-block-292">
                                <a href="{{route('channel.visitor', $channel->id)}}" style="text-decoration:none" class="smuusin-name-recom">{{$channel->name}}</a>
                                <div>
                                    
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

                                <div class="div-block-294">
                                    <p class="text-block-301">100k</p>
                                    <div class="div-block-293">
                                        <img src="{{asset('img/Mu-eye-lune-3333332x.png')}}" class="image-110">
                                    </div>
                                </div>
                                
                            </div>
                            @endif
                        </div>
                    </div>

                </div>
                @if($playlist && $video)
                <div class="d-flex justify-content-between blockPlayist" >
                    <p class="numberviewsSuggestion"> </p>
                    <a  href="{{route('playlist.remove', $video->id)}}" data-toggle="tooltip" data-placement="top" title="Remove to my playlist"><img src="{{ asset('img/report-Orange.svg') }}"  alt="Remove to my playlist"></a>
                </div>
                @else
                <div class="d-flex justify-content-between blockPlayist" >
                    <p class="numberviewsSuggestion"> </p>
                    <a href="{{route('playlist.add', $video->id)}}" data-toggle="tooltip" data-placement="top" title="Add to my playlist"><img src="{{ asset('img/report-gris.svg') }}"  alt="Add to my playlist"></a>
                </div>
                @endif
            </div>
        @endif

        <div class="hot-notification-copy-copy-copy">
            <div class="hot-green">
                <img src="{{asset('img/Mu-hot-info.png')}}" class="image-131">
            </div>
            <div class="BlockTimeTrush">
                <p class="text-block-383">{{$event->libelle}}...</p>
                <div>
                    @if(intval(abs(strtotime("now") - strtotime($event->created_at))/ 86400) == 0)
                    @if(intval(abs(strtotime("now") - strtotime($event->created_at))/ 3600) > 0)
                    <p class="publication-info-recom">{{intval(abs(strtotime("now") - strtotime($event->created_at))/3600)}} hours ago </p>
                    @else(intval(abs(strtotime("now") - strtotime($video->created_at))/ 3600) == 0)
                    <p class="publication-info-recom">{{intval(abs(strtotime("now") - strtotime($event->created_at))/60)}} minutes ago </p>
                    @endif
                    @elseif(intval(abs(strtotime("now") - strtotime($event->created_at))/ 86400) == 1)
                    <p class="publication-info-recom">Yesterday at {{strftime("%H:%M", strtotime($event->created_at))}}</p>
                    @elseif(intval(abs(strtotime("now") - strtotime($event->created_at))/ 86400) >= 2 && intval(abs(strtotime("now") - strtotime($event->created_at))/ 86400) <= 27)
                    <p class="publication-info-recom"> {{intval(abs(strtotime("now") - strtotime($event->created_at))/ 86400)}} days ago </p>
                    @elseif(intval(abs(strtotime("now") - strtotime($event->created_at))/ 86400) > 30)
                    <p class="publication-info-recom">{{intval(abs(strtotime("now") - strtotime($event->created_at))/ 2592000) }} months ago</p>
                    @else(intval(abs(strtotime("now") - strtotime($video->created_at))/ 2592000) > 12)
                    <p class="publication-info-recom">{{intval(abs(strtotime("now") - strtotime($event->created_at))/ 2592000 * 12) }} years ago</p>
                    @endif
                </div>
                <p class="hot-flow-txt-description">{{$event->text}}</p>
                <div class="like-notication">
                    <div class="div-block-398"><img src="{{asset('img/Image-5.png')}}" loading="lazy" alt=""></div>
                    <div><img src="{{asset('img/Image-6.png')}}" loading="lazy" width="28" alt=""></div>
                </div>
            </div>

        </div>
    </div>
</div>


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
</body>
