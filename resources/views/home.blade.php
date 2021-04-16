@extends('layouts.sidbarNavigation')
<head>
    @section('css')
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="node_modules/swiper/swiper.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    @endsection
</head>
<body>
@section('content-play-element')
@php if(isset($_COOKIE['lang'])) App::setLocale($_COOKIE['lang']); @endphp
<div class="contentOneMonFlow">
    <div class="pub-bando-connect">
        <div class="info-pub-bando">
            <div class="accroche">
                <a class="accrocheskate" href="">
                    <img class="accrocheskateImg" src="{{ asset('img/Nuage-rose.png') }}" alt="">
                    <p class="link-212"></p>
                </a>
            </div>
            <div class="annonces">
                <p class="text-block-294">Annonces</p>
                <p class="link-229">www.pub-link</p>
                <a href="" class="go w-inline-block text-block-295">{{__('Go !')}}</a>
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
        <!-- <div class="imgPubBlock">
            <img src="{{ asset('img/Mu-bandeau-Pub.jpg') }}" alt="">
        </div> -->
    </div>
    <p class="text-block-350">{{__('All your information at a glance')}} &#x1F609;</p>
    <div class="menu-content-business">
        <a href="#" class="link-26">Infos</a>
        <a href="#" class="link-26">Recents</a>
        <a href="{{route('flow')}}" class="link-26">{{__('All videos')}}</a>
        <a href="#" class="link-26">{{__('Offers')}}</a>
        <a href="#" class="link-26">Playlist</a>
    </div>
    <div class="hotNotifications">
        <div class="blockTitle2">
            <div class="d-flex">
                <img src="{{ asset('img/Mu-flow-picto-bull.svg') }}"  alt="" class="image-bull1">
                <p class="text-Playlist">{{__('Hot notifications')}}</p>
            </div>
         <div class="paddignElement8">
             <a href="{{route('notification')}}" class="toutesNotifications">{{__('All notifications')}}</a>
         </div>
        </div>
        <div class="swiper-container swipeContainermodife1">
            <div class="swiper-wrapper">
                <div class=" swiper-slide card-suggestionDay">
                    @php $user = App\User::find($video->user_id); @endphp
                    <div class="elementCardSuggestionDay">
                        @if($video->thumbnail)
                            <img class="imgElementCardSuggestionDay" src="{{ asset('vids/thumbnails/') }}/{{$video->thumbnail}}" alt="">
                        @elseif($user->age <= 15)
                            <img class="imgElementCardSuggestionDay" src="{{asset('images/kids_preloader.png')}}" alt="">
                        @elseif($user->age > 15 && $user->sex == '1')
                            <img class="imgElementCardSuggestionDay" src="{{asset('images/flow_preloader.png')}}" alt=""/>
                        @elseif($user->age > 15 && $user->sex == '0')
                            <img class="imgElementCardSuggestionDay" src="{{asset('images/sista_preloader.png')}}" alt="">
                        @endif
                        <a href="{{route('play',[$video->id])}}" class="contentFlyHeure">
                            <p class="flyText">
                            @foreach($subtopics as $subtopic)
                                @if($video->subtopic_id == $subtopic->id)
                                    {{ $subtopic->libelle }}
                                @endif
                            @endforeach
                            </p>
                            <p class="heureFly" style="color:white;">{{$video->duration}}</p>
                        </a>
                    </div>
                    <div class="contentCardSuggestionDay">
                        <div class="d-flex justify-content-between">
                           <a href="{{route('play', $video->id)}}" class="libertiText" style="text-decoration:none">{{$video->main_title}}</a>
                            <img class="imgLiberti" src="{{ asset('img/icones/Mu-badge22.png') }}" alt="">
                        </div>
                        <div class="mindCard">
                            <div class="blockImgMind">
                                @if($user->photo)
                                <a href="{{route('play',$video->id)}}"><img class="" src="{{ asset('/img') }}/{{$user->photo}}" alt=""></a>
                                @elseif($user->age <= 15)
                                <a href="{{route('play',$video->id)}}"><img class="" src="{{asset('images/kids_preloader.png')}}" alt=""></a>
                                @elseif($user->age > 15 && $user->sex == '1')
                                <a href="{{route('play',$video->id)}}"><img class="img-circle" src="{{asset('images/flow_preloader.png')}}" alt=""/></a>
                                @elseif($user->age > 15 && $user->sex == '0')
                                <a href="{{route('play',$video->id)}}>"><img class="" src="{{asset('images/sista_preloader.png')}} /{{$user->photo}}" alt=""></a>
                                @endif
                            </div>
                            <div class="block3">
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
                                <a href="{{route('play', $video->id)}}" class="libertiText" style="text-decoration:none">{{$channel->name}}</a>
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

                                    @if($playlist)
                                    <div class="d-flex justify-content-between" >
                                        <p class="numberviewsSuggestion"> </p>
                                        <a class="oeil-1" href="{{route('playlist.remove', $video->id)}}"><img src="{{ asset('img/Groupe-972x.png') }}"  width="10" alt="Added to my playlist"></a>
                                    </div>
                                    @else
                                    <div class="d-flex justify-content-between" >
                                        <p class="numberviewsSuggestion"> </p>
                                        <a class="oeil-1" href="{{route('playlist.add', $video->id)}}"><img src="{{ asset('img/icones/Like gris.png') }}"  width="10" alt="Add to my playlist"></a>
                                    </div>
                                    @endif
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide hot-notification" style="background:white;">
                    <div class="div-block-391">
                        <div class="hot-green">
                            <img class="imgGrenn" src="{{ asset('img/Mu-hot-info.png') }}" loading="lazy">
                        </div>
                        <div class="div-block-393">
                            <div class="div-block-392">
                                <img src="{{ asset('img/Mu-video-format-bike-girl.jpg') }}" loading="lazy" sizes="100vw" srcset="images/Mu-video-format-bike-girl-p-800.jpeg 800w, images/Mu-video-format-bike-girl.jpg 898w" alt="" class="image-130"></div>
                            <div>
                            <p class="text-block-383">{{$event->libelle}}</p>
                            @if(intval(abs(strtotime("now") - strtotime($event->created_at))/ 86400) == 0)
                                @if(intval(abs(strtotime("now") - strtotime( $event->created_at))/ 3600) > 0)
                                <p class="text-block-385">Published {{intval(abs(strtotime("now") - strtotime( $event->created_at))/3600)}} hours ago</p>
                                @else(intval(abs(strtotime("now") - strtotime( $event->created_at))/ 3600) == 0)
                                <p class="text-block-385">Published {{intval(abs(strtotime("now") - strtotime( $event->created_at))/60)}} minutes ago</p>
                                @endif
                            @elseif(intval(abs(strtotime("now") - strtotime( $event->created_at))/ 86400) == 1)
                            <p class="text-block-385">Yesterday at {{strftime("%H:%M", strtotime( $event->created_at))}}
                            @elseif(intval(abs(strtotime("now") - strtotime( $event->created_at))/ 86400) >= 2 && intval(abs(strtotime("now") - strtotime( $event->created_at))/ 86400) <= 27)
                            <p class="text-block-385">Published {{intval(abs(strtotime("now") - strtotime( $event->created_at))/ 86400)}} days ago</p>
                            @else(intval(abs(strtotime("now") - strtotime( $event->created_at))/ 86400) > 27)
                            <p class="text-block-385">Published on {{strftime("%d/%m/%Y", strtotime( $event->created_at))}}</p>
                            @endif
                            <div>
                                <p class="" style="color:8F8F8F;font-weight:bold;font-size:large" >{{$event->text}}</p>
                            </div>
                            </div>
                            <div class="like-notication">
                                <button class="btn div-block-398">
                                    <img src="{{ asset('img/Image-5.png') }}" alt="">
                                </button>
                                <button class="btn div-block-398">
                                    <img src="{{ asset('img/Image-6.png') }}" alt="">
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide hot-notification" style="background:white;">
                    <div class="div-block-391">
                        <div class="hot-green">
                            <img class="imgGrenn" src="{{ asset('img/Mu-hot-info.png') }}" loading="lazy">
                        </div>
                        <div class="div-block-393">
                            <div class="div-block-392"> 
                                <img src="{{ asset('img/Mu-video-format-bike-girl.jpg') }}" loading="lazy" sizes="100vw" srcset="images/Mu-video-format-bike-girl-p-800.jpeg 800w, images/Mu-video-format-bike-girl.jpg 898w" alt="" class="image-130"></div>
                            <div>
                            <p class="text-block-383">{{__('Want to see more')}}</p>
                           
                            <p class="text-block-385">{{__('Discover even more interesting features')}}</p>
                            <br>
                            <div>
                                <a href="{{route('tarifs')}}" style="text-decoration:none;" class="toutesNotifications">{{__('Switch to SMUUSE PRO')}}</a>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="suggestionFlow">
        <p class="text-Playlist2">Suggestions</p>
        <div class="swiper-container swipeContainermodife1">
            <div class="swiper-wrapper">
                @foreach($last as $vid)
                <div class=" swiper-slide card-suggestionDay">
                    @php
                        $video = App\Models\Video::find($vid->video_id);
                        $user = App\User::find($video->user_id);
                    @endphp
                    <div class="elementCardSuggestionDay">
                        @if($video->thumbnail)
                            <a href="{{route('play',[$video->id])}}" style="text-decoration:none"> <img class="imgElementCardSuggestionDay" src="{{ asset('vids/thumbnails/') }}/{{$video->thumbnail}}" alt=""> </a>
                        @elseif($user->age <= 15)
                            <a href="{{route('play',[$video->id])}}" style="text-decoration:none"> <img class="imgElementCardSuggestionDay" src="{{asset('images/kids_preloader.png')}}" alt=""> </a>
                        @elseif($user->age > 15 && $user->sex == '1')
                            <a href="{{route('play',[$video->id])}}" style="text-decoration:none"> <img class="imgElementCardSuggestionDay" src="{{asset('images/flow_preloader.png')}}" alt=""> </a>
                        @elseif($user->age > 15 && $user->sex == '0')
                            <a href="{{route('play',[$video->id])}}" style="text-decoration:none"> <img class="imgElementCardSuggestionDay" src="{{asset('images/sista_preloader.png')}}" alt=""> </a>
                        @endif
                        <a href="{{route('play',[$video->id])}}" style="text-decoration:none" target="" class="contentFlyHeure">
                            <p class="flyText">
                            @foreach($subtopics as $subtopic)
                                @if($video->subtopic_id == $subtopic->id)
                                    {{ $subtopic->libelle }}
                                @endif
                            @endforeach
                            </p>
                            <p class="heureFly" style="color:white;">{{$video->duration}}</p>
                        </a>
                    </div>
                    <div class="contentCardSuggestionDay">
                        <div class="d-flex justify-content-between">
                           <a href="{{route('play', $video->id)}}"  style="text-decoration:none" class="libertiText">{{$video->main_title}}</a>
                            <img class="imgLiberti" src="{{ asset('img/icones/Mu-badge22.png') }}" alt="">
                        </div>
                        <div class="mindCard">
                            <div class="blockImgMind">
                                @if($user->photo)
                                <a href="{{route('play',[$video->id])}}"> <img class="" src="{{ asset('/img') }}/{{$user->photo}}" alt=""> </a>
                                @elseif($user->age <= 15)
                                <a href="{{route('play',[$video->id])}}"> <img class="" src="{{asset('images/kids_preloader.png')}}" alt=""> </a>
                                @elseif($user->age > 15 && $user->sex == '1')
                                <a href="{{route('play',[$video->id])}}"> <img class="img-circle" src="{{asset('images/flow_preloader.png')}}" alt=""/> </a>
                                @elseif($user->age > 15 && $user->sex == '0')
                                <a href="{{route('play',[$video->id])}}"> <img class="" src="{{asset('images/sista_preloader.png')}}" alt=""> </a>
                                @endif
                            </div>
                            <div class="block3">
                                @php
                                    $channel = DB::Table('users')->select('channels.*')
                                        ->join('channels', 'users.id', 'channels.user_id')
                                        ->where('users.id', $video->user_id)
                                        ->first();
                                @endphp
                                <a href="{{route('play',[$video->id])}}" style="text-decoration:none" class="mindText">{{$channel->name}}</a>
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
                                <!--                                     <div class="d-flex justify-content-between">
                                                                                <p class="numberviewsSuggestion">1230</p>
                                                                                <img class="oeil-1" src="{{ asset('img/icones/oeil-1.png') }}" alt="">

                                                                            </div>
                                                    -->                                        </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

   @if($playlist)
    <div class="suggestionFlow">
        <p class="text-Playlist2">{{__('MY')}} Playlist</p>
        <div class="swiper-container swipeContainermodife1">
            <div class="swiper-wrapper">
                @foreach($playlists as $playlist)
                <div class=" swiper-slide card-suggestionDay">
                    @php
                        $user = App\User::find($playlist->user_id);
                    @endphp
                    <div class="elementCardSuggestionDay">
                        @if($playlist->thumbnail)
                            <a href="{{route('play',[$playlist->id])}}" style="text-decoration:none"> <img class="imgElementCardSuggestionDay" src="{{ asset('vids/thumbnails/') }}/{{$playlist->thumbnail}}" alt=""> </a>
                        @elseif($user->age <= 15)
                            <a href="{{route('play',[$playlist->id])}}" style="text-decoration:none"> <img class="imgElementCardSuggestionDay" src="{{asset('images/kids_preloader.png')}}" alt=""> </a>
                        @elseif($user->age > 15 && $user->sex == '1')
                            <a href="{{route('play',[$playlist->id])}}" style="text-decoration:none"> <img class="imgElementCardSuggestionDay" src="{{asset('images/flow_preloader.png')}}" alt=""> </a>
                        @elseif($user->age > 15 && $user->sex == '0')
                            <a href="{{route('play',[$playlist->id])}}" style="text-decoration:none"> <img class="imgElementCardSuggestionDay" src="{{asset('images/sista_preloader.png')}}" alt=""> </a>
                        @endif
                        <a href="{{route('play',[$video->id])}}" style="text-decoration:none" target="" class="contentFlyHeure">
                            <p class="flyText">
                            @foreach($subtopics as $subtopic)
                                @if($playlist->subtopic_id == $subtopic->id)
                                    {{ $subtopic->libelle }}
                                @endif
                            @endforeach
                            </p>
                            <p class="heureFly" style="color:white;">{{$playlist->duration}}</p>
                        </a>
                    </div>
                    <div class="contentCardSuggestionDay">
                        <div class="d-flex justify-content-between">
                           <a href="{{route('play', $video->id)}}"  style="text-decoration:none" class="libertiText">{{$playlist->main_title}}</a>
                            <img class="imgLiberti" src="{{ asset('img/icones/Mu-badge22.png') }}" alt="">
                        </div>
                        <div class="mindCard">
                            <div class="blockImgMind">
                                @if($user->photo)
                                <a href="{{route('play',[$video->id])}}"> <img class="" src="{{ asset('/img') }}/{{$user->photo}}" alt=""> </a>
                                @elseif($user->age <= 15)
                                <a href="{{route('play',[$video->id])}}"> <img class="" src="{{asset('images/kids_preloader.png')}}" alt=""> </a>
                                @elseif($user->age > 15 && $user->sex == '1')
                                <a href="{{route('play',[$video->id])}}"> <img class="img-circle" src="{{asset('images/flow_preloader.png')}}" alt=""/> </a>
                                @elseif($user->age > 15 && $user->sex == '0')
                                <a href="{{route('play',[$video->id])}}"> <img class="" src="{{asset('images/sista_preloader.png')}}" alt=""> </a>
                                @endif
                            </div>
                            <div class="block3">
                                @php
                                    $channel = DB::Table('users')->select('channels.*')
                                        ->join('channels', 'users.id', 'channels.user_id')
                                        ->where('users.id', $video->user_id)
                                        ->first();
                                @endphp
                                <a href="{{route('play',[$playlist->id])}}" style="text-decoration:none" class="mindText">{{$channel->name}}</a>
                                 <!-- Date creation relative -->
                                    @if(intval(abs(strtotime("now") - strtotime($playlist->created_at))/ 86400) == 0)
                                    @if(intval(abs(strtotime("now") - strtotime($playlist->created_at))/ 3600) > 0)
                                    <p class="day">{{intval(abs(strtotime("now") - strtotime($playlist->created_at))/3600)}} hours ago </p>
                                    @else(intval(abs(strtotime("now") - strtotime($playlist->created_at))/ 3600) == 0)
                                    <p class="day">{{intval(abs(strtotime("now") - strtotime($playlist->created_at))/60)}} minutes ago </p>
                                    @endif
                                    @elseif(intval(abs(strtotime("now") - strtotime($playlist->created_at))/ 86400) == 1)
                                    <p class="day">Yesterday at {{strftime("%H:%M", strtotime($playlist->created_at))}}</p>
                                    @elseif(intval(abs(strtotime("now") - strtotime($playlist->created_at))/ 86400) >= 2 && intval(abs(strtotime("now") - strtotime($playlist->created_at))/ 86400) <= 27)
                                    <p class="day"> {{intval(abs(strtotime("now") - strtotime($playlist->created_at))/ 86400)}} days ago </p>
                                    @else(intval(abs(strtotime("now") - strtotime($playlist->created_at))/ 86400) > 27)
                                    <p class="day">On {{strftime("%d/%m/%Y", strtotime($playlist->created_at))}}</p>
                                    @endif
                                <!--                                     <div class="d-flex justify-content-between">
                                                                                <p class="numberviewsSuggestion">1230</p>
                                                                                <img class="oeil-1" src="{{ asset('img/icones/oeil-1.png') }}" alt="">

                                                                            </div>
                                                    -->                                        </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
   @endif

    <div class="chaine-vu">
        <div>
            @php $user = App\User::find($channel_top->user_id); @endphp
            <p class="text-block-353-copy">{{__('Here is the most viewed channel at the moment')}}</p>
        </div>
        <div class="div-block-367">
            <div class="bull-chaine">
                @if($channel_top->logo)
                <a href="{{route('channel.visitor', $channel_top->id)}}" style="text-decoration:none"> <img class="image-125" src="{{ asset('/img') }}/{{$channel->logo}}" alt=""> </a>
                @elseif($user->age <= 15)
                <a href="{{route('channel.visitor', $channel_top->id)}}" style="text-decoration:none"> <img class="image-125" src="{{asset('images/kids_preloader.png')}}" alt=""> </a>
                @elseif($user->age > 15 && $user->sex == '1')
                <a href="{{route('channel.visitor', $channel_top->id)}}" style="text-decoration:none"> <img class="image-125" src="{{asset('images/flow_preloader.png')}}" alt=""/> </a>
                @elseif($user->age > 15 && $user->sex == '0')
                <a href="{{route('channel.visitor', $channel_top->id)}}" style="text-decoration:none"> <img class="image-125" src="{{asset('images/sista_preloader.png')}}" alt=""> </a>
                @endif
            </div>
            <div class="div-block-368">
                <a href="{{route('channel.visitor', $channel_top->id)}}" style="text-decoration:none; color:black;" class="text-block-362">{{$channel_top->name}}</a>
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
                    <a href="#" class="link-block-40 w-inline-block">
                        <div class="div-block-386">
                            <img src="{{ asset('img/Mu-coeur-blanc.svg') }}" class="imgCoeurBlanc" width="23" alt="">
                        </div>
                        <a class="text-block-380" style="color:white; background: #F57409; padding:5px 0; text-decoration:none;" href="{{ route('suscribe',$channel_top->id) }}"><div>{{__('Subscribe')}}</div></a>
                    </a>
                    <div class="alerte">
                        <img src="{{ asset('img/Mu-cloche-blanc.svg') }}" class="cloche3"  alt="">
                    </div>
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
    <div id="event" class="big-event">
        <p class="text-block-353-copy">{{__('Upcoming events')}}</p>
        <div class="div-block-375">
            <div class="div-block-373">
                <div class="div-block-372">
                    <img src="{{ asset('img/Groupe-9262x.png') }}"  alt="" class="img127">
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
                                <p class="text-block-370"></p>
                                <p class="text-block-372"></p>
                            </div>
                        </div>
                        <div class="div-block-376">
                            <div class="div-block-379">
                                <p class="text-block-368">Aïd el fitre</p>
                                <p class="text-block-375">{{__('in')}}</p>
                            </div>
                            <div class="div-block-377">
                                <p class="text-block-370"></p>
                                <p class="text-block-372"></p>
                            </div>
                        </div>
                        <div class="div-block-376">
                            <div class="div-block-380">
                                <p class="text-block-368">Hajj</p>
                                <p class="text-block-376">{{__('in')}}</p>
                            </div>
                            <div class="div-block-377">
                                <p class="text-block-370"></p>
                                <p class="text-block-372"></p>
                            </div>
                        </div>
                        <div class="div-block-376">
                            <div class="div-block-381">
                                <p class="text-block-368">Aïd el Kabir</p>
                                <p class="text-block-377">{{__('in')}}</p>
                            </div>
                            <div class="div-block-377">
                                <p class="text-block-370"></p>
                                <p class="text-block-372"></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @if(!Auth::guest())
    <div id="resume" class="resume-flow">
        <div class="div-block-343">
            <div class="div-block-352">
                <div class="resume-activitee">
                    <p class="text-block-353-copy">{{__('This month')}}</p>
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

                            <div class="progress-bar" role="progressbar bg-info" style="width:{{$variant != 0 ?(($variant/$looks)*100):'0'}}%; height:3%; border-radius:10px; background:#ebebeb; " aria-valuenow="{{($variant/$looks)*100}}" aria-valuemin="0" aria-valuemax="100"></div>
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
                            <div class="progress-bar" role="progressbar bg-info" style="width:{{$variant != 0 ?(($variant/$looks)*100):'0'}}%; height:3%; border-radius:10px; background:#ebebeb; " aria-valuenow="{{($variant/$looks)*100}}" aria-valuemin="0" aria-valuemax="100"></div>
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
                            <div class="progress-bar" role="progressbar bg-info" style="width:{{$variant != 0 ?(($variant/$looks)*100):'0'}}%; height:3%; border-radius:10px; background:#ebebeb; " aria-valuenow="{{($variant/$looks)*100}}" aria-valuemin="0" aria-valuemax="100"></div>
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
                            <div class="progress-bar" role="progressbar bg-info" style="width:{{$variant != 0 ?(($variant/$looks)*100):'0'}}%; height:3%; border-radius:10px; background:#ebebeb; " aria-valuenow="{{($variant/$looks)*100}}" aria-valuemin="0" aria-valuemax="100"></div>
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
                            <div class="progress-bar" role="progressbar bg-info" style="width:{{$variant != 0 ?(($variant/$looks)*100):'0'}}%; height:3%; border-radius:10px; background:#ebebeb; " aria-valuenow="{{($variant/$looks)*100}}" aria-valuemin="0" aria-valuemax="100"></div>
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
                            <div class="progress-bar" role="progressbar bg-info" style="width:{{$variant != 0 ?(($variant/$looks)*100):'0'}}%; height:3%; border-radius:10px; background:#ebebeb; " aria-valuenow="{{($variant/$looks)*100}}" aria-valuemin="0" aria-valuemax="100"></div>
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
                            <div class="progress-bar" role="progressbar bg-info" style="width:{{$variant != 0 ?(($variant/$looks)*100):'0'}}%; height:3%; border-radius:10px; background:#ebebeb; " aria-valuenow="{{($variant/$looks)*100}}" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="div-block-354">
                            <p class="text-block-358">Education</p>
                            <!-- <div class="progress-bar" role="progressbar bg-info" style="width:{{$variant != 0 ?(($variant/$looks)*100):'0'}}%; height:3%; border-radius:10px; background:#ebebeb; " aria-valuenow="{{($variant/$looks)*100}}" aria-valuemin="0" aria-valuemax="100"></div> -->
                        </div>
                        <div class="div-block-354">
                            <p class="text-block-360">News</p>
                            <!-- <div class="progress-bar" role="progressbar bg-info" style="width:{{$looks != 0 & $variant != 0 ?(($variant/$looks)*100):'0'}}%; height:3%; border-radius:10px; background:#ebebeb; " aria-valuenow="{{($variant/$looks)*100}}" aria-valuemin="0" aria-valuemax="100"></div> -->
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    @endif

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="node_modules/swiper/swiper-bundle.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
    var swiper = new Swiper('.swipeContainermodife1', {
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
                spaceBetween: 10
            },


        }
    });
</script>
    <script src="{{asset('js/fixeElement.js')}}"></script>
    @endsection
</body>
