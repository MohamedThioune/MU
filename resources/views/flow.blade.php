@extends('layouts.sidbarNavigation')
<html lang="fr">
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
<div class="contentOneMonFlow">
@if($videos_haltcare) 
@if(count($videos_haltcare) > 0)
<div class="content-Haltcare">
    <div class="container-fluid">
        <div class="contentSwipeToday">
            <div class="barreLatraleNoir vertBarre">
                <div class="categorie-name">
                    <img src="{{ asset('img/Mu-feuille-noir2x.png') }}"  alt="">
                </div>
            </div>
            <div class="swiper-slide swipe2">
                <p class="text-hel">Healthcares</p>
                <div class="swiper-container swiper-helatcare">
                    <div class="swiper-wrapper">
                        @foreach($videos_haltcare as $video)
                        <div class="swiper-slide card-suggestionDay">
                            <div class="elementCardSuggestionDay">
                                @php
                                    $user = App\User::find($video->user_id);
                                @endphp

                                @if($video->thumbnail)
                                    <img class="imgElementCardSuggestionDay" src="{{ asset('vids/thumbnails/') }}/{{$video->thumbnail}}" alt="">
                                @elseif($user->age <= 15)
                                    <img class="imgElementCardSuggestionDay" src="{{asset('images/kids_preloader.png')}}" alt="">
                                @elseif($user->age > 15 && $user->sex == '1')
                                    <img class="imgElementCardSuggestionDay" src="{{asset('images/flow_preloader.png')}}" alt=""/>
                                @elseif($user->age > 15 && $user->sex == '0')
                                    <img class="imgElementCardSuggestionDay" src="{{asset('images/sista_preloader.png')}}" alt="">
                                @endif

                                <a href="{{route('play',[$video->id])}}"  style="text-decoration:none" target="blank" class="contentFlyHeure">
                                    <p class="flyText">
                                        @foreach($subtopics as $subtopic)
                                        @if($video->subtopic_id == $subtopic->id)
                                            {{ $subtopic->libelle }}
                                        @endif
                                        @endforeach
                                    </p>
                                    <p class="heureFly">
                                        @php
                                        $reports = DB::Table('reports')
                                        ->where('video_id', $video->id)
                                        ->count();

                                            if ($video->duration){
                                        $durations = explode(':', $video->duration);
                                        if($durations[0] == "00")
                                        echo $durations[1]. ':' .$durations[2];
                                        else
                                        echo $durations[0]. ':' .$durations[1]. ':' .$durations[2];
                                        }

                                        $playlist = DB::Table('playlists')->select('playlists.*')
                                        ->where('playlists.user_id', Auth::id())
                                        ->where('playlists.video_id', $video->id)
                                        ->first();
                                        @endphp

                                    </p>
                                </a>
                            </div>
                            <div class="contentCardSuggestionDay">
                                <div class="d-flex justify-content-between">
                                <a href="{{route('play', $video->id)}}"  style="text-decoration:none" class="libertiText">{{$video->main_title}}</a>
                                    <a href="{!! route('report',[$video->id]) !!}">
                                        @if($reports < 2)
                                        <img class="imgLiberti" src="{{asset('img/icones/Mu-badge22.png')}}" alt="Lune" data-toggle="tooltip" data-placement="top" title="Community-approved video">
                                        @else
                                        <img class="imgLiberti" src="{{asset('img/icones/lune-rouge-small.png')}}" alt="Lune"  data-toggle="tooltip" data-placement="top" title="This video has been pointed out by members of the community as being unbearable">
                                        @endif
                                    </a>
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
                                        @if($kids)
                                        <div class="d-flex justify-content-between" style="cursor:pointer" data-toggle="tooltip" data-placement="top" title="{{__('Videos for children')}}">
                                            <p class="numberviewsSuggestion"></p>
                                            <img class="oeil-1" src="{{ asset('images/kids_preloader.png') }}" alt="">
                                        </div>
                                        @endif

                                        @if($playlist)
                                        <div class="d-flex justify-content-between" >
                                            <p class="numberviewsSuggestion"> </p>
                                            <a class="oeil-1" href="{{route('playlist.remove', $video->id)}}" data-toggle="tooltip" data-placement="top" title="Remove to my playlist"><img src="{{ asset('img/Groupe-972x.png') }}"  width="10" alt="Remove to my playlist"></a>
                                        </div>
                                        @else
                                            <div class="d-flex justify-content-between" >
                                                <p class="numberviewsSuggestion"> </p>
                                                <a class="oeil-1" href="{{route('playlist.add', $video->id)}}" data-toggle="tooltip" data-placement="top" title="Add to my playlist"><img src="{{ asset('img/icones/Like gris.png') }}"  width="10" alt="Add to my playlist"></a>
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

@if($videos_life)
@if(count($videos_life) > 0)
<div class="content-life">
    <div class="container-fluid">
        <div class="contentSwipeToday">
            <div class="barreLatraleNoir life">
                <div class="categorie-name">
                    <img src="{{ asset('img/Mu-fleur2.png') }}" alt="">
                </div>
            </div>
            <div class="swiper-slide swipe2">
                <p class="text-life">Life</p>
                <div class="swiper-container swiper-helatcare">
                    <div class="swiper-wrapper">
                        @foreach($videos_life as $video)
                        <div class=" swiper-slide card-suggestionDay">
                        <div class="elementCardSuggestionDay">
                                @php
                                    $user = App\User::find($video->user_id);
                                @endphp

                                @if($video->thumbnail)
                                    <img class="imgElementCardSuggestionDay" src="{{ asset('vids/thumbnails/') }}/{{$video->thumbnail}}" alt="">
                                @elseif($user->age <= 15)
                                    <img class="imgElementCardSuggestionDay" src="{{asset('images/kids_preloader.png')}}" alt="">
                                @elseif($user->age > 15 && $user->sex == '1')
                                    <img class="imgElementCardSuggestionDay" src="{{asset('images/flow_preloader.png')}}" alt=""/>
                                @elseif($user->age > 15 && $user->sex == '0')
                                    <img class="imgElementCardSuggestionDay" src="{{asset('images/sista_preloader.png')}}" alt="">
                                @endif

                                <a href="{{route('play',[$video->id])}}"  style="text-decoration:none" target="blank" class="contentFlyHeure">
                                    <p class="flyText">
                                        @foreach($subtopics as $subtopic)
                                        @if($video->subtopic_id == $subtopic->id)
                                            {{ $subtopic->libelle }}
                                        @endif
                                        @endforeach
                                    </p>
                                    <p class="heureFly">
                                        @php
                                        $reports = DB::Table('reports')
                                        ->where('video_id', $video->id)
                                        ->count();

                                            if ($video->duration){
                                        $durations = explode(':', $video->duration);
                                        if($durations[0] == "00")
                                        echo $durations[1]. ':' .$durations[2];
                                        else
                                        echo $durations[0]. ':' .$durations[1]. ':' .$durations[2];
                                        }

                                        $playlist = DB::Table('playlists')->select('playlists.*')
                                        ->where('playlists.user_id', Auth::id())
                                        ->where('playlists.video_id', $video->id)
                                        ->first();
                                      
                                        @endphp
                                    </p>
                                </a>
                            </div>
                            <div class="contentCardSuggestionDay">
                                <div class="d-flex justify-content-between">
                                <a href="{{route('play', $video->id)}}"  style="text-decoration:none" class="libertiText">{{$video->main_title}}</a>
                                    <a href="{!! route('report',[$video->id]) !!}">
                                        @if($reports < 2)
                                        <img class="imgLiberti" src="{{asset('img/icones/Mu-badge22.png')}}" alt="Lune" data-toggle="tooltip" data-placement="top" title="Community-approved video">
                                        @else
                                        <img class="imgLiberti" src="{{asset('img/icones/lune-rouge-small.png')}}" alt="Lune"  data-toggle="tooltip" data-placement="top" title="This video has been pointed out by members of the community as being unbearable">
                                        @endif
                                    </a>
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

                                        @if($kids)
                                        <div class="d-flex justify-content-between" style="cursor:pointer" data-toggle="tooltip" data-placement="top" title="{{__('Videos for children')}}">
                                            <p class="numberviewsSuggestion"></p>
                                            <img class="oeil-1" src="{{ asset('images/kids_preloader.png') }}" alt="">
                                        </div>
                                        @endif

                                        @if($playlist)
                                        <div class="d-flex justify-content-between" >
                                            <p class="numberviewsSuggestion"> </p>
                                            <a class="oeil-1" href="{{route('playlist.remove', $video->id)}}" data-toggle="tooltip" data-placement="top" title="Remove to my playlist"><img src="{{ asset('img/Groupe-972x.png') }}"  width="10" alt="Remove to my playlist"></a>
                                        </div>
                                        @else
                                            <div class="d-flex justify-content-between" >
                                                <p class="numberviewsSuggestion"> </p>
                                                <a class="oeil-1" href="{{route('playlist.add', $video->id)}}" data-toggle="tooltip" data-placement="top" title="Add to my playlist"><img src="{{ asset('img/icones/Like gris.png') }}"  width="10" alt="Add to my playlist"></a>
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

@if($videos_health)
@if(count($videos_health) > 0)
<div class="content-Health">
    <div class="container-fluid">
        <div class="contentSwipeToday">
            <div class="barreLatraleNoir Health">
                <div class="categorie-name">
                    <img src="{{ asset('img/Mu-fleur2.png') }}"  alt="">
                </div>
            </div>
            <div class="swiper-slide swipe2">
                <p class="text-health">Health</p>
                <div class="swiper-container swiper-helatcare">
                    <div class="swiper-wrapper">
                        @foreach($videos_health as $video)
                        <div class=" swiper-slide card-suggestionDay">
                        <div class="elementCardSuggestionDay">
                                @php
                                    $user = App\User::find($video->user_id);
                                @endphp

                                @if($video->thumbnail)
                                    <img class="imgElementCardSuggestionDay" src="{{ asset('vids/thumbnails/') }}/{{$video->thumbnail}}" alt="">
                                @elseif($user->age <= 15)
                                    <img class="imgElementCardSuggestionDay" src="{{asset('images/kids_preloader.png')}}" alt="">
                                @elseif($user->age > 15 && $user->sex == '1')
                                    <img class="imgElementCardSuggestionDay" src="{{asset('images/flow_preloader.png')}}" alt=""/>
                                @elseif($user->age > 15 && $user->sex == '0')
                                    <img class="imgElementCardSuggestionDay" src="{{asset('images/sista_preloader.png')}}" alt="">
                                @endif

                                <a href="{{route('play',[$video->id])}}"  style="text-decoration:none" target="blank" class="contentFlyHeure">
                                    <p class="flyText">
                                        @foreach($subtopics as $subtopic)
                                        @if($video->subtopic_id == $subtopic->id)
                                            {{ $subtopic->libelle }}
                                        @endif
                                        @endforeach
                                    </p>
                                    <p class="heureFly">
                                        @php
                                        $reports = DB::Table('reports')
                                        ->where('video_id', $video->id)
                                        ->count();

                                            if ($video->duration){
                                        $durations = explode(':', $video->duration);
                                        if($durations[0] == "00")
                                        echo $durations[1]. ':' .$durations[2];
                                        else
                                        echo $durations[0]. ':' .$durations[1]. ':' .$durations[2];
                                        }

                                        $playlist = DB::Table('playlists')->select('playlists.*')
                                        ->where('playlists.user_id', Auth::id())
                                        ->where('playlists.video_id', $video->id)
                                        ->first();
                                        @endphp
                                    </p>
                                </a>
                            </div>
                            <div class="contentCardSuggestionDay">
                                <div class="d-flex justify-content-between">
                                <a href="{{route('play', $video->id)}}"  style="text-decoration:none" class="libertiText">{{$video->main_title}}</a>
                                    <a href="{!! route('report',[$video->id]) !!}">
                                        @if($reports < 2)
                                        <img class="imgLiberti" src="{{asset('img/icones/Mu-badge22.png')}}" alt="Lune" data-toggle="tooltip" data-placement="top" title="Community-approved video">
                                        @else
                                        <img class="imgLiberti" src="{{asset('img/icones/lune-rouge-small.png')}}" alt="Lune"  data-toggle="tooltip" data-placement="top" title="This video has been pointed out by members of the community as being unbearable">
                                        @endif
                                    </a>
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

                                        @if($kids)
                                        <div class="d-flex justify-content-between" style="cursor:pointer" data-toggle="tooltip" data-placement="top" title="{{__('Videos for children')}}">
                                            <p class="numberviewsSuggestion"></p>
                                            <img class="oeil-1" src="{{ asset('images/kids_preloader.png') }}" alt="">
                                        </div>
                                        @endif

                                        @if($playlist)
                                            <div class="d-flex justify-content-between" >
                                                <p class="numberviewsSuggestion"> </p>
                                                <a class="oeil-1" href="{{route('playlist.remove', $video->id)}}" data-toggle="tooltip" data-placement="top" title="Remove to my playlist"><img src="{{ asset('img/Groupe-972x.png') }}"  width="10" alt="Remove to my playlist"></a>
                                            </div>
                                        @else
                                            <div class="d-flex justify-content-between" >
                                                <p class="numberviewsSuggestion"> </p>
                                                <a class="oeil-1" href="{{route('playlist.add', $video->id)}}" data-toggle="tooltip" data-placement="top" title="Add to my playlist"><img src="{{ asset('img/icones/Like gris.png') }}"  width="10" alt="Add to my playlist"></a>
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

@if($videos_business)
@if(count($videos_business) > 0)
<div class="content-Business">
    <div class="container-fluid">
        <div class="contentSwipeToday">
            <div class="barreLatraleNoir Business">
                <div class="categorie-name">
                    <img src="{{ asset('img/Mu-fleur2.png') }}"  alt="">
                </div>
            </div>
            <div class="swiper-slide swipe2">
                <p class="text-business">Business</p>
                <div class="swiper-container swiper-helatcare">
                    <div class="swiper-wrapper">
                        @foreach($videos_business as $video)
                        <div class=" swiper-slide card-suggestionDay">
                            <div class="elementCardSuggestionDay">
                                @php
                                    $user = App\User::find($video->user_id);
                                @endphp

                                @if($video->thumbnail)
                                    <img class="imgElementCardSuggestionDay" src="{{ asset('vids/thumbnails/') }}/{{$video->thumbnail}}" alt="">
                                @elseif($user->age <= 15)
                                    <img class="imgElementCardSuggestionDay" src="{{asset('images/kids_preloader.png')}}" alt="">
                                @elseif($user->age > 15 && $user->sex == '1')
                                    <img class="imgElementCardSuggestionDay" src="{{asset('images/flow_preloader.png')}}" alt=""/>
                                @elseif($user->age > 15 && $user->sex == '0')
                                    <img class="imgElementCardSuggestionDay" src="{{asset('images/sista_preloader.png')}}" alt="">
                                @endif
                                <a href="{{route('play',[$video->id])}}" target="blank" class="contentFlyHeure">
                                    <p class="flyText">
                                        @foreach($subtopics as $subtopic)
                                        @if($video->subtopic_id == $subtopic->id)
                                            {{ $subtopic->libelle }}
                                        @endif
                                        @endforeach
                                    </p>
                                    <p class="heureFly">
                                        @php
                                        $reports = DB::Table('reports')
                                        ->where('video_id', $video->id)
                                        ->count();

                                        if ($video->duration){
                                        $durations = explode(':', $video->duration);
                                        if($durations[0] == "00")
                                        echo $durations[1]. ':' .$durations[2];
                                        else
                                        echo $durations[0]. ':' .$durations[1]. ':' .$durations[2];
                                        }

                                        $playlist = DB::Table('playlists')->select('playlists.*')
                                        ->where('playlists.user_id', Auth::id())
                                        ->where('playlists.video_id', $video->id)
                                        ->first();
                                        @endphp
                                    </p>
                                </a>
                            </div>
                            <div class="contentCardSuggestionDay">
                                <div class="d-flex justify-content-between">
                                <a href="{{route('play', $video->id)}}"  style="text-decoration:none" class="libertiText">{{$video->main_title}}</a>
                                    <a href="{!! route('report',[$video->id]) !!}">
                                        @if($reports < 2)
                                        <img class="imgLiberti" src="{{asset('img/icones/Mu-badge22.png')}}" alt="Lune" data-toggle="tooltip" data-placement="top" title="Community-approved video">
                                        @else
                                        <img class="imgLiberti" src="{{asset('img/icones/lune-rouge-small.png')}}" alt="Lune"  data-toggle="tooltip" data-placement="top" title="This video has been pointed out by members of the community as being unbearable">
                                        @endif
                                    </a>
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

                                        @if($kids)
                                        <div class="d-flex justify-content-between" style="cursor:pointer" data-toggle="tooltip" data-placement="top" title="{{__('Videos for children')}}">
                                            <p class="numberviewsSuggestion"></p>
                                            <img class="oeil-1" src="{{ asset('images/kids_preloader.png') }}" alt="">
                                        </div>
                                        @endif

                                        @if($playlist)
                                        <div class="d-flex justify-content-between" >
                                            <p class="numberviewsSuggestion"> </p>
                                            <a class="oeil-1" href="{{route('playlist.remove', $video->id)}}" data-toggle="tooltip" data-placement="top" title="Remove to my playlist"><img src="{{ asset('img/Groupe-972x.png') }}"  width="10" alt="Remove to my playlist"></a>
                                        </div>
                                        @else
                                            <div class="d-flex justify-content-between" >
                                                <p class="numberviewsSuggestion"> </p>
                                                <a class="oeil-1" href="{{route('playlist.add', $video->id)}}" data-toggle="tooltip" data-placement="top" title="Add to my playlist"><img src="{{ asset('img/icones/Like gris.png') }}"  width="10" alt="Add to my playlist"></a>
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

@if($videos_education)
@if(count($videos_education) > 0)
<div class="content-Education">
    <div class="container-fluid">
        <div class="contentSwipeToday">
            <div class="barreLatraleNoir Education">
                <div class="categorie-name">
                    <img src="{{ asset('img/Mu-fleur2.png') }}"  alt="">
                </div>
            </div>
                <div class="swiper-slide swipe2">
                    <p class="text-education">Education</p>
                    <div class="swiper-container swiper-helatcare">
                        <div class="swiper-wrapper">
                            @foreach($videos_education as $video)
                            <div class=" swiper-slide card-suggestionDay">
                                <div class="elementCardSuggestionDay">
                                    @php
                                        $user = App\User::find($video->user_id);
                                    @endphp

                                    @if($video->thumbnail)
                                        <img class="imgElementCardSuggestionDay" src="{{ asset('vids/thumbnails/') }}/{{$video->thumbnail}}" alt="">
                                    @elseif($user->age <= 15)
                                        <img class="imgElementCardSuggestionDay" src="{{asset('images/kids_preloader.png')}}" alt="">
                                    @elseif($user->age > 15 && $user->sex == '1')
                                        <img class="imgElementCardSuggestionDay" src="{{asset('images/flow_preloader.png')}}" alt=""/>
                                    @elseif($user->age > 15 && $user->sex == '0')
                                        <img class="imgElementCardSuggestionDay" src="{{asset('images/sista_preloader.png')}}" alt="">
                                    @endif
                                    <a href="{{route('play',[$video->id])}}" target="blank" class="contentFlyHeure">
                                        <p class="flyText">
                                        @foreach($subtopics as $subtopic)
                                        @if($video->subtopic_id == $subtopic->id)
                                            {{ $subtopic->libelle }}
                                        @endif
                                        @endforeach
                                        </p>
                                        <p class="heureFly">
                                            @php
                                            $reports = DB::Table('reports')
                                            ->where('video_id', $video->id)
                                            ->count();

                                            if ($video->duration){
                                            $durations = explode(':', $video->duration);
                                            if($durations[0] == "00")
                                            echo $durations[1]. ':' .$durations[2];
                                            else
                                            echo $durations[0]. ':' .$durations[1]. ':' .$durations[2];
                                            }

                                            $playlist = DB::Table('playlists')->select('playlists.*')
                                            ->where('playlists.user_id', Auth::id())
                                            ->where('playlists.video_id', $video->id)
                                            ->first();
                                            @endphp
                                        </p>
                                    </a>
                                </div>
                                <div class="contentCardSuggestionDay">
                                    <div class="d-flex justify-content-between">
                                    <a href="{{route('play', $video->id)}}"  style="text-decoration:none" class="libertiText">{{$video->main_title}}</a>
                                        <a href="{!! route('report',[$video->id]) !!}">
                                            @if($reports < 2)
                                            <img class="imgLiberti" src="{{asset('img/icones/Mu-badge22.png')}}" alt="Lune" data-toggle="tooltip" data-placement="top" title="Community-approved video">
                                            @else
                                            <img class="imgLiberti" src="{{asset('img/icones/lune-rouge-small.png')}}" alt="Lune"  data-toggle="tooltip" data-placement="top" title="This video has been pointed out by members of the community as being unbearable">
                                            @endif
                                        </a>
                                    </div>
                                    <div class="mindCard">
                                        @php
                                        $user = App\User::find($video->user_id);
                                        @endphp
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
                                            @if($kids)
                                            <div class="d-flex justify-content-between" style="cursor:pointer" data-toggle="tooltip" data-placement="top" title="{{__('Videos for children')}}">
                                                <p class="numberviewsSuggestion"></p>
                                                <img class="oeil-1" src="{{ asset('images/kids_preloader.png') }}" alt="">
                                            </div>
                                            @endif

                                            @if($playlist)
                                            <div class="d-flex justify-content-between" >
                                                <p class="numberviewsSuggestion"> </p>
                                                <a class="oeil-1" href="{{route('playlist.remove', $video->id)}}" data-toggle="tooltip" data-placement="top" title="Remove to my playlist"><img src="{{ asset('img/Groupe-972x.png') }}"  width="10" alt="Remove to my playlist"></a>
                                            </div>
                                            @else
                                                <div class="d-flex justify-content-between" >
                                                    <p class="numberviewsSuggestion"> </p>
                                                    <a class="oeil-1" href="{{route('playlist.add', $video->id)}}" data-toggle="tooltip" data-placement="top" title="Add to my playlist"><img src="{{ asset('img/icones/Like gris.png') }}"  width="10" alt="Add to my playlist"></a>
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

@if($videos_environnement)
@if(count($videos_environnement) > 0)
 <div class="content-Evironnement">
    <div class="container-fluid">
        <div class="contentSwipeToday">
            <div class="barreLatraleNoir Evironnement">
                <div class="categorie-name">
                    <img src="{{ asset('img/Mu-fleur2.png') }}"  alt="">
                </div>
            </div>
            <div class="swiper-slide swipe2">
                <p class="text-environnement">Environnement</p>
                <div class="swiper-container swiper-helatcare">
                    <div class="swiper-wrapper">
                        @foreach($videos_environnement as $video)
                        <div class=" swiper-slide card-suggestionDay">
                            <div class="elementCardSuggestionDay">
                                    @php
                                        $user = App\User::find($video->user_id);
                                    @endphp

                                    @if($video->thumbnail)
                                        <img class="imgElementCardSuggestionDay" src="{{ asset('vids/thumbnails/') }}/{{$video->thumbnail}}" alt="">
                                    @elseif($user->age <= 15)
                                        <img class="imgElementCardSuggestionDay" src="{{asset('images/kids_preloader.png')}}" alt="">
                                    @elseif($user->age > 15 && $user->sex == '1')
                                        <img class="imgElementCardSuggestionDay" src="{{asset('images/flow_preloader.png')}}" alt=""/>
                                    @elseif($user->age > 15 && $user->sex == '0')
                                        <img class="imgElementCardSuggestionDay" src="{{asset('images/sista_preloader.png')}}" alt="">
                                    @endif
                                    <a href="{{route('play',[$video->id])}}" target="blank" class="contentFlyHeure">
                                    <p class="flyText">
                                        @foreach($subtopics as $subtopic)
                                        @if($video->subtopic_id == $subtopic->id)
                                            {{ $subtopic->libelle }}
                                        @endif
                                        @endforeach
                                    </p>
                                    <p class="heureFly">
                                        @php
                                        $reports = DB::Table('reports')
                                        ->where('video_id', $video->id)
                                        ->count();

                                            if ($video->duration){
                                        $durations = explode(':', $video->duration);
                                        if($durations[0] == "00")
                                        echo $durations[1]. ':' .$durations[2];
                                        else
                                        echo $durations[0]. ':' .$durations[1]. ':' .$durations[2];
                                        }

                                        $playlist = DB::Table('playlists')->select('playlists.*')
                                        ->where('playlists.user_id', Auth::id())
                                        ->where('playlists.video_id', $video->id)
                                        ->first();
                                        @endphp
                                    </p>
                                </a>
                            </div>
                            <div class="contentCardSuggestionDay">
                                <div class="d-flex justify-content-between">
                                <a href="{{route('play', $video->id)}}"  style="text-decoration:none" class="libertiText">{{$video->main_title}}</a>
                                    <a href="{!! route('report',[$video->id]) !!}">
                                        @if($reports < 2)
                                        <img class="imgLiberti" src="{{asset('img/icones/Mu-badge22.png')}}" alt="Lune" data-toggle="tooltip" data-placement="top" title="Community-approved video">
                                        @else
                                        <img class="imgLiberti" src="{{asset('img/icones/Lune-bleu-rouge.jpg')}}" alt="Lune"  data-toggle="tooltip" data-placement="top" title="This video has been pointed out by members of the community as being unbearable">
                                        @endif
                                    </a>
                                </div>
                                <div class="mindCard">
                                    @php
                                    $user = App\User::find($video->user_id);
                                    @endphp
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
                                        @if($kids)
                                        <div class="d-flex justify-content-between" style="cursor:pointer" data-toggle="tooltip" data-placement="top" title="{{__('Videos for children')}}">
                                            <p class="numberviewsSuggestion"></p>
                                            <img class="oeil-1" src="{{ asset('images/kids_preloader.png') }}" alt="">
                                        </div>
                                        @endif

                                        @if($playlist)
                                            <div class="d-flex justify-content-between" >
                                                <p class="numberviewsSuggestion"> </p>
                                                <a class="oeil-1" href="{{route('playlist.remove', $video->id)}}" data-toggle="tooltip" data-placement="top" title="Remove to my playlist"><img src="{{ asset('img/Groupe-972x.png') }}"  width="10" alt="Remove to my playlist"></a>
                                            </div>
                                        @else
                                            <div class="d-flex justify-content-between" >
                                                <p class="numberviewsSuggestion"> </p>
                                                <a class="oeil-1" href="{{route('playlist.add', $video->id)}}" data-toggle="tooltip" data-placement="top" title="Add to my playlist"><img src="{{ asset('img/icones/Like gris.png') }}"  width="10" alt="Add to my playlist"></a>
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
</div>
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
    if ($('.swiper-container .swiper-slide').length < 1) {
        var swiper = new Swiper('.swiper-helatcare', {
            // Optional parameters
            direction: 'horizontal',
            allowTouchMove: true,
            slidesPerView: 'auto',
            grabCursor: true,
            preventClicks: true,
            spaceBetween: 30,
            keyboardControl: true,
            speed: 1000,
            pagination: {
                el: null
            },
            scrollbar: {
                el: '.swiper-scrollbar',
                draggable: true,
                hide: false,
                snapOnRelease: true
            },
            mousewheel: {
                enable: true
            },
            keyboard: {
                enabled: true
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev'
            },

        });
    }
</script>
<script src="{{asset('js/fixeElement.js')}}"></script>
@endsection
</body>