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
    <p class="text-block-350" style="font-size: 1.4em;">{{__('All your information at a glance')}}</p>
    <div class="menu-content-business-copy business-Web">
        <a href="#" class="link-26">Infos</a>
        <a href="#event" class="link-26">Events.</a>
        <a href="#resume" class="link-26">Resume</a>
        <a href="#Playlist-flow" class="link-26">Playlist</a>
        <a href="#" class="link-26">{{__('Offers')}}</a>
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
    <div class="hot-notification-block spaceElementFlow">
        <div class="div-block-403">
            <p class="text-block-428">{{__('Hot notifications')}}</p>
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
            <div class="recondation-video-card">
                @php $user = App\User::find($video->user_id); @endphp
                <a href="{{route('play', $video->id)}}" class="video-vignette-recom">
                    @if($video->thumbnail)
                        <img src="{{asset('vids/thumbnails/') }}/{{$video->thumbnail}}" class="vignette-video-sugg">
                    @else
                        <img src="{{asset('img/grille.png')}}" class="vignette-video-sugg">
                    @endif
                </a>
                @php 
                    $date = explode(":",$video->duration);
                    if($date[0] == "00")
                        $video->duration =  $date[1]. ":" .$date[2];
                @endphp
                <div class="vignette-vid-info-recom">
                    <div class="div-block-295">
                        <a href="{{route('play',$video->id)}}" class="titre-v-c-recom" style="text-decoration:none">{{$video->main_title}}  - {{$video->duration}}</a>
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
                            <a href="{{route('channel.visitor', $channel->id)}}" class="bull-id-acount-recom w-inline-block">
                                <img src="{{ asset('/img') }}/{{$channel->logo}}" class="image-109">
                            </a>
                            <div class="div-block-292">
                                <a href="{{route('channel.visitor', $channel->id)}}" class="smuusin-name-recom">{{$channel->name}}</a>
                                <div>
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

                                <div class="div-block-294">
                                    <p class="text-block-301">100k</p>
                                    <div class="div-block-293">
                                        <img src="{{asset('img/Mu-eye-lune-3333332x.png')}}" class="image-110">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hot-notification-copy-copy-copy">
                <div class="hot-green">
                    <img src="{{asset('img/Mu-hot-info.png')}}" class="image-131">
                </div>
                <div class="BlockTimeTrush">
                    <p class="text-block-383">{{$event->libelle}}...</p>
                    <div>
                        @if(intval(abs(strtotime("now") - strtotime($event->created_at))/ 86400) == 0)
                        @if(intval(abs(strtotime("now") - strtotime( $event->created_at))/ 3600) > 0)
                        <p class="text-block-385">Published {{intval(abs(strtotime("now") - strtotime( $event->created_at))/3600)}} hours ago</p>
                        @else(intval(abs(strtotime("now") - strtotime( $event->created_at))/ 3600) == 0)
                        <p class="text-block-385">Published {{intval(abs(strtotime("now") - strtotime( $event->created_at))/60)}} minutes ago</p>
                        @endif
                        @elseif(intval(abs(strtotime("now") - strtotime( $event->created_at))/ 86400) == 1)
                        <p class="text-block-385">Yesterday at {{strftime("%H:%M", strtotime( $event->created_at))}}</p>
                            @elseif(intval(abs(strtotime("now") - strtotime( $event->created_at))/ 86400) >= 2 && intval(abs(strtotime("now") - strtotime( $event->created_at))/ 86400) <= 27)
                        <p class="text-block-385">Published {{intval(abs(strtotime("now") - strtotime( $event->created_at))/ 86400)}} days ago</p>
                        @else(intval(abs(strtotime("now") - strtotime( $event->created_at))/ 86400) > 27)
                        <p class="text-block-385">Published on {{strftime("%d/%m/%Y", strtotime( $event->created_at))}}</p>
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
    <div class="recommandation spaceElementFlow">
        <p class="titre-recommandation">Suggestions</p>
        <div class="swiper-container swipeSuggestion">
            <div class="swiper-wrapper">
                @foreach($last as $vid)
                <div class=" swiper-slide suggestionSwipe">
                    @php
                        $video = App\Models\Video::find($vid->video_id);
                        $user = App\User::find($video->user_id);
                        $playlist = DB::Table('playlists')->select('playlists.*')
                                        ->where('playlists.user_id', Auth::id())
                                        ->where('playlists.video_id', $video->id)
                                        ->first();
                    @endphp
                    <div class="recondation-video-card">
                        <div class="video-vignette-recom">
                            @if($video->thumbnail)
                                <a href="{{route('play',[$video->id])}}" style="text-decoration:none">
                                    <img src="{{ asset('vids/thumbnails/') }}/{{$video->thumbnail}}" class="vignette-video-sugg"></a>
                            @else
                                <a href="{{route('play',[$video->id])}}" style="text-decoration:none"><img src="{{asset('img/grille.png')}}" class="vignette-video-sugg"></a>
                            @endif
                        </div>
                        @php 
                            $date = explode(":",$video->duration);
                            if($date[0] == "00")
                                $video->duration =  $date[1]. ":" .$date[2];
                        @endphp
                        <div class="vignette-vid-info-recom">
                            <div class="div-block-295">
                                <a href="{{route('play',[$video->id])}}" class="titre-v-c-recom" style="text-decoration:none">{{$video->main_title}}</a>
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

                                        <a href="{{route('channel.visitor', $channel->id)}}" style="text-decoration:none" class="smuusin-name-recom">{{$channel->name}}</a>
                                        <div>
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
                                        <div class="div-block-294">
                                            <p class="text-block-301">100k</p>
                                            <div class="div-block-293">
                                                <img src="{{asset('img/Mu-eye-lune-3333332x.png')}}" class="image-110">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <div id="Playlist-flow" class="playlist spaceElementFlow">
        <div>
            <p class="titre-asso-video-all">{{__('The')}} playlist</p>
        </div>
        <div class="swiper-container swipeSuggestion">
            <div class="swiper-wrapper">
                @foreach($playlists as $playlist)
                    <div class="swiper-slide suggestionSwipe">
                        <div class="recondation-video-card">
                            <div class="video-vignette-recom">
                                @if($playlist->thumbnail)
                                    <a href="{{route('play',[$playlist->id])}}" style="text-decoration:none"><img src="{{ asset('vids/thumbnails/') }}/{{$playlist->thumbnail}}" class="vignette-video-sugg"></a>
                                @else
                                    <a href="{{route('play',[$playlist->id])}}" style="text-decoration:none"><img src="{{asset('img/grille.png')}}" class="vignette-video-sugg"></a>
                                @endif
                            </div>
                            @php 
                                $date = explode(":",$video->duration);
                                if($date[0] == "00")
                                    $video->duration =  $date[1]. ":" .$date[2];
                            @endphp
                            <div class="vignette-vid-info-recom">
                                <div class="div-block-295">
                                    <a href="{{route('play',[$playlist->id])}}" class="titre-v-c-recom" style="text-decoration:none">{{$playlist->main_title}}</a>
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
                                        <div class="bull-id-acount-recom">
                                            <a href="{{route('channel.visitor', $channel->id)}}"><img src="{{ asset('/img') }}/{{$channel->logo}}" class="image-109"></a>
                                        </div>
                                        <div class="div-block-292">
                                            <a href="{{route('channel.visitor', $channel->id)}}" style="text-decoration:none" class="smuusin-name-recom">{{$channel->name}}</a>
                                            <div>
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
                                            <div class="div-block-294">
                                                <p class="text-block-301">100k</p>
                                                <div class="div-block-293">
                                                    <img src="{{asset('img/Mu-eye-lune-3333332x.png')}}" class="image-110">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="chaine-vu spaceElementFlow">
        <div>
            <p class="text-block-353-copy">{{__('Here is the most viewed channel at the moment')}}</p>
        </div>
        <div class="div-block-367-copy">
            <a href="{{route('channel.visitor', $channel_top->id)}}" style="text-decoration:none" class="bull-chaine">
                <img src="{{ asset('/img') }}/{{$channel_top->logo}}" class="image-125">
            </a>
            <div class="div-block-368">
                <p class="text-block-362">{{$channel_top->name}}</p>
                <div class="div-block-371">
                    <p class="text-block-363">{{\App\Models\Channel::find($channel_top->id)->abonnees->count()}}</p>
                    <p class="text-block-345">{{__('Subscribers')}}</p>
                </div>
                <p class="text-block-364">{{$videos_count}} Publications</p>
                <div class="text-block-366">
                    <a href="{{route('channel.visitor', $channel_top->id)}}" class="link-28">{{__('See the channel')}}</a>
                </div>
            </div>
            <div class="back-subscrib-bar">
                <div class="chaine">
                    <a class="btnSubscripeNotif" href="{{ route('suscribe',$channel_top->id) }}">
                        <div class="btn div-block-386">
                            <img src="{{ asset('img/Mu-coeur-blanc.svg') }}" class="imgCoeurBlanc" width="23" alt="">
                        </div>
                        <div>{{__('Subscribe')}}</div>
                        <button class="alerte7">
                            <img src="{{ asset('img/Mu-cloche-blanc.svg') }}" class="cloche3-1"  alt="">
                        </button>
                    </a>

                    <div class="more-seting">
                        <div class="div-block-399"></div>
                        <div class="div-block-399"></div>
                        <div class="div-block-399"></div>
                    </div>
                    <div class="share-blanc">
                        <img src="{{ asset('img/Share-blanc.svg') }}" alt="" class="image-12Blanc">
                    </div>
                    <a href="#" class="link-block-42 w-inline-block">
                        <img src="{{ asset('img/Mu-panier2x_1.png') }}" class="panier2" width="27" alt="">
                    </a>
                    <a href="#" class="link-block-41 w-inline-block" style="text-decoration:none;color:white">
                        <div>{{__('Support us')}}</div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div id="event" class="big-event spaceElementFlow">
        <div class="text-block-353">{{__('Upcoming events')}}</div>
        <div class="div-block-375">
            <div class="div-block-373">
                <div class="div-block-372">
                    <img src="{{asset('img/Groupe-9262x.png')}}" class="image-127">
                </div>
                <div class="div-block-374">
                    <div class="date-indicator">
                        <p class="text-block-371">{{__('month')}}</p>
                        <p class="text-block-373">{{__('days')}}</p>
                    </div>
                    <div>
                        @php
                            $date = new hijri();
                        @endphp
                        <div class="div-block-376">
                            <div class="div-block-378">
                                <p class="text-block-368">Ramadan</p>
                                <p class="text-block-374">{{__('in')}}</p>
                            </div>
                            <div class="div-block-377">
                                <p class="text-block-370">1</p>
                                <p class="text-block-372">15</p>
                            </div>
                        </div>
                        <div class="div-block-376">
                            <div class="div-block-379">
                                <p class="text-block-368">Aïd el fitre</p>
                                <p class="text-block-375">{{__('in')}}</p>
                            </div>
                            <div class="div-block-377">
                                <p class="text-block-370">2</p>
                                <p class="text-block-372">15</p>
                            </div>
                        </div>
                        <div class="div-block-376">
                            <div class="div-block-380">
                                <p class="text-block-368">Hajj</p>
                                <p class="text-block-376">{{__('in')}}</p>
                            </div>
                            <div class="div-block-377">
                                <p class="text-block-370">6</p>
                                <p class="text-block-372">02</p>
                            </div>
                        </div>
                        <div class="div-block-376">
                            <div class="div-block-381">
                                <p class="text-block-368">Aïd el Kabir</p>
                                <p class="text-block-377">dans </p>
                            </div>
                            <div class="div-block-377">
                                <p class="text-block-370">11</p>
                                <p class="text-block-372">02</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--   Party time-shield-->
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
                    $date = explode(",",$date->date(null,2,false));
                    $hijri_year = $date[1];
                    $hijri_month =  explode(" ", $date[0])[6];
                    $hijri_day = explode(" ", $date[0])[5];
                    $gregorian =  (new \Datetime())->format('d.m.Y');
                @endphp

                    <div class="time-mon-flow">
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
</body>
