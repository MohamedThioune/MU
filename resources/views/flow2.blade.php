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
<div class="contentOneMonFlow">
    <div class="abo-now">
        <div class="div-block-477">
            <p class="text-block-429">Bienvenue sur la version gratuite </p>
            <p class="text-block-430"> tu peux regarder</p>
            <p class="text-block-431"> 1 vidéo Gratuitement chaque jour</p>
        </div>
        <div class="div-block-479">
            <img src="{{asset('img/Doobl-buble2x.png')}}" loading="lazy"  alt="">
        </div>
        <div class="div-block-478">
            <p class="text-block-433">Active ton abonnement</p>
            <p class="text-block-432">pour profite de tous les services</p>
            <p class="text-block-432">et implique toi d&#x27;avantage dans la oumma</p>
            <a href="#" class="button-35 w-button">Bismillah</a>
        </div>
        <div>
            <img class="imgGris7" src="{{asset('img/Mu-bull-gris-.png')}}" loading="lazy"  alt="">
        </div>
    </div>
    @if($videos_haltcare)
    @if(count($videos_haltcare) > 0)
    <div class="content-Haltcare content-Block-slide">
        <div class="container-fluid">
            <div class="contentSwipeToday">
                <div class="barreLatraleNoir vertBarre">
                    <div class="categorie-name">
                        <img src="{{ asset('img/Mu-feuille-noir2x.png') }}"  alt="">
                    </div>
                </div>
                <div class="swiper-slide swipe2">
                    <div class="swipeTitle">
                        <div class="categorie-name1">
                            <img src="{{ asset('img/Mu-feuille-noir2x.png') }}"  alt="">
                        </div>
                        <p class="text-hel">Healthcares</p>
                    </div>
                    <div class="swiper-container swiper-helatcare">
                        <div class="swiper-wrapper">
                            @php
                            $user = App\User::find($video->user_id);
                            $playlist = DB::Table('playlists')->select('playlists.*')
                            ->where('playlists.user_id', Auth::id())
                            ->where('playlists.video_id', $video->id)
                            ->first();
                            @endphp
                            @foreach($videos_haltcare as $video)
                            <div class="swiper-slide recondation-video-card">
                                <div class="video-vignette-recom">
                                    @if($video->thumbnail)
                                    <a href="{{route('play', $video->id)}}"  style="text-decoration:none">
                                        <img src="{{ asset('vids/thumbnails/') }}/{{$video->thumbnail}}" class="vignette-video-sugg">
                                    </a>
                                    @elseif($user->age <= 15)
                                    <a href="{{route('play', $video->id)}}"  style="text-decoration:none">
                                        <img src="{{asset('images/kids_preloader.png')}}" class="vignette-video-sugg">
                                    </a>
                                    @elseif($user->age > 15 && $user->sex == '1')
                                    <a href="{{route('play', $video->id)}}"  style="text-decoration:none">
                                        <img src="{{asset('images/flow_preloader.png')}}" class="vignette-video-sugg">
                                    </a>
                                    @elseif($user->age > 15 && $user->sex == '0')
                                    <a href="{{route('play', $video->id)}}"  style="text-decoration:none">
                                        <img src="{{asset('images/sista_preloader.png')}}" class="vignette-video-sugg">
                                    </a>
                                    @endif
                                </div>
                                <div class="vignette-vid-info-recom">
                                    <div class="div-block-295">
                                        <a href="{{route('play', $video->id)}}" class="titre-v-c-recom">{{$video->main_title}}</a>
                                        <div class="badge-eval">
                                            <img src="{{asset('img/Mu-badge-vide2x.png')}}" loading="lazy" alt="" class="image-111">
                                        </div>
                                    </div>
                                    <div class="resume-vigne-stat">
                                        @php
                                        $channel = DB::Table('users')->select('channels.*')
                                        ->join('channels', 'users.id', 'channels.user_id')
                                        ->where('users.id', $video->user_id)
                                        ->first();
                                        @endphp
                                        <div class="bull-name-stat">
                                            <a href="{{route('channel.visitor', $channel->id)}}" class="bull-id-acount-recom w-inline-block">
                                                <img src="{{ asset('/img') }}/{{$channel->logo}}" class="image-109">
                                            </a>
                                            <div class="div-block-292">
                                                <p class="smuusin-name-recom">{{$channel->name}}</p>
                                                <div>
                                                    <!-- Date creation relative -->
                                                    @if(intval(abs(strtotime("now") - strtotime($video->created_at))/ 86400) == 0)
                                                    @if(intval(abs(strtotime("now") - strtotime($video->created_at))/ 3600) > 0)
                                                    <p class="day">{{intval(abs(strtotime("now") - strtotime($video->created_at))/3600)}} hours ago </p>
                                                    @else(intval(abs(strtotime("now") - strtotime($video->created_at))/ 3600) == 0)
                                                    <p class="day">{{intval(abs(strtotime("now") - strtotime($video->created_at))/60)}} minutes ago </p>
                                                    @endif
                                                    @elseif(intval(abs(strtotime("now") - strtotime($video->created_at))/ 86400) == 1)
                                                    <p class="day">Yesterday at {{strftime("%H:%M", strtotime($video->created_at))}}</p>
                                                    @elseif(intval(abs(strtotime("now") - strtotime($video->created_at))/ 86400) >= 2 && intval(abs(strtotime("now") - strtotime($video->created_at))/ 86400) <= 27)
                                                    <p class="day"> {{intval(abs(strtotime("now") - strtotime($video->created_at))/ 86400)}} days ago </p>
                                                    @else(intval(abs(strtotime("now") - strtotime($video->created_at))/ 86400) > 27)
                                                    <p class="day">On {{strftime("%d/%m/%Y", strtotime($video->created_at))}}</p>
                                                    @endif
                                                </div>
                                            </div>
                                            @if($playlist)
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
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    @endif
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
</body>
