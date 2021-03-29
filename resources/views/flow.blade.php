@extends('layouts.sidbarNavigation')
    <meta charset="utf-8">
    <title>
        MU
    </title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="node_modules/swiper/swiper.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

<body>
@section('content-play-element')
<div class="d-block">
@if(session('videos_haltcare'))
@if(count(session('videos_haltcare')) > 0)
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
                        @foreach(session('videos_haltcare') as $video)
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
                                        @endphp
                                    </p>
                                </a>
                            </div>
                            <div class="contentCardSuggestionDay">
                                <div class="d-flex justify-content-between">
                                    <p class="libertiText">{{$video->main_title}}</p>

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
                                        <img class="" src="{{ asset('/images/uploads') }}/{{$user->photo}}" alt="">
                                        @elseif($user->age <= 15)
                                        <img class="" src="{{asset('images/kids_preloader.png')}}" alt="">
                                        @elseif($user->age > 15 && $user->sex == '1')
                                        <img class="img-circle" src="{{asset('images/flow_preloader.png')}}" alt=""/>
                                        @elseif($user->age > 15 && $user->sex == '0')
                                        <img class="" src="{{asset('images/sista_preloader.png')}} /{{$user->photo}}" alt="">
                                        @endif
                                    </div>
                                    <div class="block3">
                                        @php  
                                            $channel = DB::Table('users')->select('channels.*')
                                                                        ->join('channels', 'users.id', 'channels.user_id')
                                                                        ->where('users.id', $video->user_id)
                                                                        ->first(); 
                                        @endphp
                                        <p class="mindText">{{$channel->name}}</p>                                        
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
                                      <!--  <div class="d-flex justify-content-between">
                                            <p class="numberviewsSuggestion">1230</p>
                                            <img class="oeil-1" src="{{ asset('img/icones/oeil-1.png') }}" alt="">
                                        </div>-->
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

@if(session('videos_life'))
@if(count(session('videos_life')) > 0)
<div class="content-life">
    <div class="container-fluid">
        <div class="contentSwipeToday">
            <div class="barreLatraleNoir life">
                <div class="categorie-name">
                    <img src="{{ asset('img/Mu-fleur2.png') }}"  alt="">
                </div>
            </div>
            <div class="swiper-slide swipe2">
                <p class="text-life">Life</p>
                <div class="swiper-container swiper-helatcare">
                    <div class="swiper-wrapper">
                        @foreach(session('videos_life') as $video)
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
                                        @endphp
                                    </p>
                                </a>
                            </div>
                            <div class="contentCardSuggestionDay">
                                <div class="d-flex justify-content-between">
                                    <p class="libertiText">{{$video->main_title}}</p>
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
                                        <img class="" src="{{ asset('/images/uploads') }}/{{$user->photo}}" alt="">
                                        @elseif($user->age <= 15)
                                        <img class="" src="{{asset('images/kids_preloader.png')}}" alt="">
                                        @elseif($user->age > 15 && $user->sex == '1')
                                        <img class="img-circle" src="{{asset('images/flow_preloader.png')}}" alt=""/>
                                        @elseif($user->age > 15 && $user->sex == '0')
                                        <img class="" src="{{asset('images/sista_preloader.png')}} /{{$user->photo}}" alt="">
                                        @endif
                                    </div>
                                    <div class="block3">
                                        @php  
                                            $channel = DB::Table('users')->select('channels.*')
                                                                        ->join('channels', 'users.id', 'channels.user_id')
                                                                        ->where('users.id', $video->user_id)
                                                                        ->first(); 
                                        @endphp
                                        <p class="mindText">{{$channel->name}}</p>
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
                                       <!-- <div class="d-flex justify-content-between">
                                            <p class="numberviewsSuggestion">1230</p>
                                            <img class="oeil-1" src="{{ asset('img/icones/oeil-1.png') }}" alt="">
                                        </div>-->
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

@if(session('videos_health'))
@if(count(session('videos_health')) > 0)
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
                        @foreach(session('videos_health') as $video)
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
                                        @endphp
                                    </p>
                                </a>
                            </div>
                            <div class="contentCardSuggestionDay">
                                <div class="d-flex justify-content-between">
                                    <p class="libertiText">{{$video->main_title}}</p>
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
                                        <img class="" src="{{ asset('/images/uploads') }}/{{$user->photo}}" alt="">
                                        @elseif($user->age <= 15)
                                        <img class="" src="{{asset('images/kids_preloader.png')}}" alt="">
                                        @elseif($user->age > 15 && $user->sex == '1')
                                        <img class="img-circle" src="{{asset('images/flow_preloader.png')}}" alt=""/>
                                        @elseif($user->age > 15 && $user->sex == '0')
                                        <img class="" src="{{asset('images/sista_preloader.png')}} /{{$user->photo}}" alt="">
                                        @endif
                                    </div>
                                    <div class="block3">
                                        @php  
                                            $channel = DB::Table('users')->select('channels.*')
                                                                        ->join('channels', 'users.id', 'channels.user_id')
                                                                        ->where('users.id', $video->user_id)
                                                                        ->first(); 
                                        @endphp
                                        <p class="mindText">{{$channel->name}}</p>                                        <!-- Date creation relative -->
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
                                      <!--  <div class="d-flex justify-content-between">
                                            <p class="numberviewsSuggestion">1230</p>
                                            <img class="oeil-1" src="{{ asset('img/icones/oeil-1.png') }}" alt="">

                                        </div>-->
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

@if(session('videos_business'))
@if(count(session('videos_business')) > 0)
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
                        @foreach(session('videos_business') as $video)
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
                                        @endphp
                                    </p>
                                </a>
                            </div>
                            <div class="contentCardSuggestionDay">
                                <div class="d-flex justify-content-between">
                                    <p class="libertiText">{{$video->main_title}}</p>
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
                                        <img class="" src="{{ asset('/images/uploads') }}/{{$user->photo}}" alt="">
                                        @elseif($user->age <= 15)
                                        <img class="" src="{{asset('images/kids_preloader.png')}}" alt="">
                                        @elseif($user->age > 15 && $user->sex == '1')
                                        <img class="img-circle" src="{{asset('images/flow_preloader.png')}}" alt=""/>
                                        @elseif($user->age > 15 && $user->sex == '0')
                                        <img class="" src="{{asset('images/sista_preloader.png')}} /{{$user->photo}}" alt="">
                                        @endif
                                    </div>
                                    <div class="block3">
                                        @php  
                                            $channel = DB::Table('users')->select('channels.*')
                                                                        ->join('channels', 'users.id', 'channels.user_id')
                                                                        ->where('users.id', $video->user_id)
                                                                        ->first(); 
                                        @endphp
                                        <p class="mindText">{{$channel->name}}</p>                                        <!-- Date creation relative -->
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
                                     <!--   <div class="d-flex justify-content-between">
                                            <p class="numberviewsSuggestion">1230</p>
                                            <img class="oeil-1" src="{{ asset('img/icones/oeil-1.png') }}" alt="">

                                        </div>-->
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

@if(session('videos_education'))
@if(count(session('videos_education')) > 0)
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
                            @foreach(session('videos_education') as $video)
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
                                            @endphp
                                        </p>
                                    </a>
                                </div>
                                <div class="contentCardSuggestionDay">
                                    <div class="d-flex justify-content-between">
                                        <p class="libertiText">{{$video->main_title}}</p>
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
                                            <img class="" src="{{ asset('/images/uploads') }}/{{$user->photo}}" alt="">
                                            @elseif($user->age <= 15)
                                            <img class="" src="{{asset('images/kids_preloader.png')}}" alt="">
                                            @elseif($user->age > 15 && $user->sex == '1')
                                            <img class="img-circle" src="{{asset('images/flow_preloader.png')}}" alt=""/>
                                            @elseif($user->age > 15 && $user->sex == '0')
                                            <img class="" src="{{asset('images/sista_preloader.png')}} /{{$user->photo}}" alt="">
                                            @endif
                                        </div>
                                        <div class="block3">
                                        @php  
                                            $channel = DB::Table('users')->select('channels.*')
                                                                        ->join('channels', 'users.id', 'channels.user_id')
                                                                        ->where('users.id', $video->user_id)
                                                                        ->first(); 
                                        @endphp
                                        <p class="mindText">{{$channel->name}}</p>                                            <!-- Date creation relative -->
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
                                         <!--   <div class="d-flex justify-content-between">
                                                <p class="numberviewsSuggestion">1230</p>
                                                <img class="oeil-1" src="{{ asset('img/icones/oeil-1.png') }}" alt="">

                                            </div>-->
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

@if(session('videos_environnement'))
@if(count(session('videos_environnement')) > 0)
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
                        @foreach(session('videos_environnement') as $video)
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
                                        @endphp
                                    </p>
                                </a>
                            </div>
                            <div class="contentCardSuggestionDay">
                                <div class="d-flex justify-content-between">
                                    <p class="libertiText">{{$video->main_title}}</p>
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
                                        <img class="" src="{{ asset('/images/uploads') }}/{{$user->photo}}" alt="">
                                        @elseif($user->age <= 15)
                                        <img class="" src="{{asset('images/kids_preloader.png')}}" alt="">
                                        @elseif($user->age > 15 && $user->sex == '1')
                                        <img class="img-circle" src="{{asset('images/flow_preloader.png')}}" alt=""/>
                                        @elseif($user->age > 15 && $user->sex == '0')
                                        <img class="" src="{{asset('images/sista_preloader.png')}} /{{$user->photo}}" alt="">
                                        @endif
                                    </div>
                                    <div class="block3">
                                        @php  
                                            $channel = DB::Table('users')->select('channels.*')
                                                                        ->join('channels', 'users.id', 'channels.user_id')
                                                                        ->where('users.id', $video->user_id)
                                                                        ->first(); 
                                        @endphp
                                        <p class="mindText">{{$channel->name}}</p>                                        
                                        
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
                                        <!--
                                        <div class="d-flex justify-content-between">
                                            <p class="numberviewsSuggestion">1230</p>
                                            <img class="oeil-1" src="{{ asset('img/icones/oeil-1.png') }}" alt="">

                                        </div> -->
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
@endsection
</body>