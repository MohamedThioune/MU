@extends('layouts.sidbarNavigation')
<html lang="fr">
<head>
    @section('css')
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <link rel="stylesheet" href="{{asset('swiper/swiper-bundle.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/menu.css')}}">
    <link rel="stylesheet" href="{{asset('css/home.css')}}">
    @endsection
    @php if(isset($_COOKIE['lang'])) App::setLocale($_COOKIE['lang']); @endphp
</head>
<body>


@section('content-play-element')
<div class="d-block blockGeneralContent">
<div class="elementFixedMobie">
    <div class="content-contenue1">
        <div class="contentParDefaut">
            <div class="linearColor"></div>
            <div class="container-fluid position-relative groupOne">
                <div class="flexElement1">
                    <div class="fistElement">
                        <div class="videoParDefaut">
                            <video poster="{{ asset('vids/thumbnails/') }}/{{$video->thumbnail}}" class="elementVideoParDefaut" onplay="start()" controls>
                                <source src="{{ asset('vids/uploads')}}/{{$video->vid}}" type="video/mp4;charset=UTF-8">
                                <source src="{{ asset('vids/uploads')}}/{{$video->vid}}" type='video/webm; codecs="vp8, vorbis"' />
                                <source src="{{ asset('vids/uploads')}}/{{$video->vid}}" type='video/ogg; codecs="theora, vorbis"' />
                            </video>

                        </div>
                        <div id="blessings" class="animate__animated animate__bounceInUp" >
                            <center><span style="; background:black; color:white; font-size:1.3em;">👋🏾 Bismillah !</span>
                            <input type="hidden" name="barometer" id="barometer" value="">
                        </div>
                        <div id="prays" class="animate__animated animate__zoomInDown">
                            <center><span style="; background:black; color:white; font-size:1.3em;">Alhamdoulilah &#x1F4FF;!</span></center>                        </div>
                        </div>
                    <div class="secondElement">
                        <img class="pubCap" src="{{ asset('img/pub-cap.png')}}" alt="">
                        <div class="blockLikePub">
                            <div class="accroche">
                                <a href="" class="logo-pub1 w-inline-block">
                                    <img class="image-129" src="{{ asset('img/Nuage-rose.png')}}" alt="">
                                </a>
                                <p class="link-Shape">Trouves ton skate</p>
                            </div>
                            <div class="annonces1">
                                <p class="text-block-294-2">Annonce</p>
                                <p class="link-Shape">www.pub-link</p>
                                <a href="" class="go go-2 w-inline-block">Go!</a>
                            </div>
                            <div class="likeNotication2">
                                <a href="" class="div-block-398 likePubElement">
                                    <img src="{{ asset('img/Image-5.png')}}" alt="">
                                </a>
                                <a href="" class="likePubElement">
                                    <img src="{{ asset('img/Image-6.png')}}" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="content-contenue2">
        <div class="container-modife container-modife-mobile">
            <div class="blockgeneral">
                <div class="blockDetail">
                    <div class="sousBlockTitle">
                        <div class="title-groupIcone">
                            <p class="text-title">{{__('Title of the video')}} : {{$video->main_title }}</p>
                           <div class="imgMobileFleur">
                               <img  src="{{ asset('img/Mu-feuille-ADDB982x.png') }}" alt="">
                           </div>
                        </div>
                        @php
                        $months = ['01' => 'Jan', '02' => 'Feb', '03' => 'Mar', '04' => 'Apr', '05' => 'May', '06' => 'Jun', '07' => 'Jul', '08' => 'Aug', '09' => 'Sep', '10' => 'Oct', '11' => 'Nov', '12' => 'Dec' ];
                        @endphp
                        <div class="content12">
                            <p class="datePublication">{{__('Published')}} :&nbsp;{{$video->created_at->format('d')}}&nbsp; {{ $months[$video->created_at->format('m')]}}. &nbsp;{{$video->created_at->format('Y')}} </p>
                            <div class="d-flex textImgView">
                                <p class="nbrView"> {{$reads}}</p>
                                <div class="imgOeil"><img  src="{{ asset('img/icones/oeil.png') }}" alt=""></div>
                            </div>
                        </div>
                        <div class="blockLikeEval">
                            <div class="groupLOveUnlove groupLOveUnlove1">
                                <div class="blockLoveUnlove">
                                    <p class="nbrLove">{{ $video->likers()->count() }} </p>
                                    <div class="imgCoeur">
                                        <a href="{{ route('likevideo',$video->id ) }}">
                                            <img src="{{ asset('img/icones/coeurRose.svg') }}" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="blockLoveUnlove">
                                    <div class="imgCoeur">
                                        <a href="{{ route('dislikevideo',$video->id )}}">
                                            <img src="{{ asset('img/icones/loveRenverseGris.png') }}" alt="">
                                        </a>
                                    </div>
                                    <p class="nbrLove">{{ $video->unlikes()->count() }}</p>
                                </div>
                                <div class="blockImgPuliMobile">
                                    <img src="{{ asset('img/icones/more.png') }}" alt="">
                                </div>
                            </div>
                            <div class="evalution">
                                <div class="formEval" >
                                    <button id="alert" class="btn btnEval">
                                        <img id="alertImg" src="{{asset('img/Mu-interdit.svg')}}">
                                    </button>
                                    <div id="actifBlockSignaler" class="actifEvalAlert btnEval">
                                        <p class="TextActif">Signaler</p>
                                        <img class="actifElement" src="{{asset('img/Mu-interdit-actif.svg')}}">
                                    </div>

                                    <button id="interdit" class="btn btnEval">
                                        <img id="interditImg" class="imgInterdit" src="{{asset('img/Mu-eval.svg')}}">
                                    </button>
                                    <div id="blockBuzz" class="actifEvalAlert ">
                                        <p class="TextActif" id="textBuzz">Pour le buzz</p>
                                        <img class="actifElement imgInterdit" src="{{asset('img/Mu-eval-actif.svg')}}">
                                    </div>


                                    <button id="soleil" class="btn btnEval">
                                        <img id="soleilImg1" class="soleilImg" src="{{asset('img/Mu-soleil.svg')}}">
                                    </button>
                                    <div id="blockFun" class="actifEvalAlert ">
                                        <p class="TextActif">Fun</p>
                                        <img class="actifElement soleilImg" src="{{asset('img/Mu-soleil-actif.svg')}}">
                                    </div>


                                    <button id="lunette" class="btn btnEval">
                                        <img class="lunetteImg" src="{{asset('img/Mu-lunette.svg')}}">
                                    </button>
                                    <div id="blockLunette" class="actifEvalAlert">
                                        <p class="TextActif"> Instructif</p>
                                        <img class="actifElement lunetteImg" src="{{asset('img/Mu-lunette-actif.svg')}}">
                                    </div>

                                    <button id="lune" class="btn btnEval">
                                        <img class="luneImg" src="{{asset('img/Mu-lune.svg')}}">
                                    </button>
                                    <div id="blockLune" class="actifEvalAlert">
                                        <p class="TextActif">Inspirant</p>
                                        <img class="actifElement luneImg" src="{{asset('img/Mu-lune-actif.svg')}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="block-detail-commentaire">
                        <p class="des-text">{{__('Description of my video')}} : <span class="">{{ $video->description }}</span>      </p>
                        <p class="des-text">{{__('Objectives of the video')}} : {{ $video->motivation }}</p>
                    </div>
                    <button class="blockPoint" data-toggle="modal" data-target="#exampleModal1">
                        <div class="trois-point-noir">...</div>
                    </button>
                    <div class="blockshareAndComments">
                        @php
                        $reports = DB::Table('reports')
                        ->where('video_id', $video->id)
                        ->count();
                        @endphp
                        <div class="blockImgPuli bottomElement">
                            <a href="{!! route('report',[$video->id]) !!}">
                                @if($reports < 2)
                                <img class="imgLiberti" src="{{asset('img/icon-feuille.png')}}" alt="Lune" data-toggle="tooltip" data-placement="top" title="{{__('Community-approved video')}}">
                                @else
                                <img class="imgLiberti" src="{{asset('img/icon-feuille.png')}}" alt="Lune"  data-toggle="tooltip" data-placement="top" title="{{__('This video has been pointed out by members of the community as being unbearable')}}">
                                @endif
                            </a>
                        </div>
                        <div class="blockImgPuli bottomElement2">
                            <img src="{{ asset('img/icones/share.png') }}" alt="">
                            <p class="textShare">{{__('Share')}}</p>
                        </div>
                        <button class="btn shopBtn blockImgPuli bottomElement3" type="button" data-toggle="modal" data-target="#exampleModal1">
                            <img src="{{ asset('img/panier.png') }}" alt="">
                            <p class="textShare">{{__('Shop')}}</p>
                        </button>
                        <div class="blockImgPuli">
                            <div class="trois-point-noir">...</div>
                        </div>
                    </div>
                </div>
                <div class="groupLOveUnlove groupLOveUnlove2">
                    <div class="blockLoveUnlove">
                        <p class="nbrLove">{{ $video->likers()->count() }} </p>
                        <div class="imgCoeur">
                            <a href="{{ route('likevideo',$video->id ) }}">
                                <img src="{{ asset('img/icones/coeurRose.svg') }}" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="blockLoveUnlove">
                        <div class="imgCoeur">
                            <a href="{{ route('dislikevideo',$video->id )}}">
                                <img src="{{ asset('img/icones/loveRenverseGris.png') }}" alt="">
                            </a>
                        </div>
                        <p class="nbrLove">{{ $video->unlikes()->count() }}</p>
                    </div>

                </div>
                <div class="blockAuteur">
                    <img class="imgBadge" src="{{ asset('img/icones/Badge.png') }}" alt="">
                    @php
                    $channel = DB::Table('users')->select('channels.*')
                    ->join('channels', 'users.id', 'channels.user_id')
                    ->where('users.id', $user->id)
                    ->first();
                    @endphp
                    <div class="elementImgAuteur">
                        <a class="" href="{{route('channel.visitor', $channel->id)}}"class="nameAuteur contentweb">
                            @if($channel->logo)
                            <img class="" src="{{ asset('/img/') }}/{{$channel->logo}}" alt="">
                            @elseif($user->age <= 15)
                            <img class="" src="{{asset('images/kids_preloader.png')}}" alt="">
                            @elseif($user->age > 15 && $user->sex == '1')
                            <img class="img-circle" src="{{asset('images/flow_preloader.png')}}" alt=""/>
                            @elseif($user->age > 15 && $user->sex == '0')
                            <img class="" src="{{asset('images/sista_preloader.png')}}" alt="">
                            @endif
                        </a>
                    </div>
                   <div class="GroupAuteur8">
                       <a href="{{route('channel.visitor', $channel->id)}}" style="color:#333333" class="nameAuteur contentweb azer">{{$channel->name}}</a>
                       <p class="nbreAbonnees contentweb"> {{\App\Models\Channel::find($channel->id)->abonnees->count()}} {{__('Subscribers')}}</p>
                   </div>
                    <div class="contentMobile">
                        <a href="{{route('channel.visitor', $channel->id)}}" style="color:#333333" class="nameAuteur contentweb azer">{{$channel->name}}</a>
                    <!-- <p class="nbreAbonnees"> {{\App\Models\Channel::find($channel->id)->abonnees->count()}} Abonnes</p>  -->
                    </div>
                    <div class="elementBtnSouscrire">
                        @if(!Auth::guest())
                        <a href="{{ route('suscribe',$channel->id) }}" class="btn btnSubscribe" >{{__('Subscribe')}}
                            <button class="btn btnClocheNot">
                                <img src="{{ asset('img/Mu-cloche-blanc.png') }}" class="imgClocheAbonne" alt="">
                            </button>
                        </a>
                        @else
                        <a href="#" class="btn btnSubscribe"  data-toggle="tooltip" data-placement="top" title="this feature is only available to community members"> {{__('Subscribe')}}
                            <button class="btn btnClocheNot">
                                <img src="{{ asset('img/Mu-cloche-blanc.png') }}" class="imgClocheAbonne" alt="">
                            </button>
                        </a>
                        @endif

                    </div>
                </div>
                <div class="pub-mob">
                    <p class="etiquette-pub">Annoces</p>
                    <img src="{{ asset('img/Mu-juz-app-hoz-ads-fleur.png') }}" alt="">
                </div>
                    @php
                        $date = new hijri();

                        $date = explode(",",$date->date(null,2,false));
                        $hijri_year = $date[1];
                        $hijri_month =  explode(" ", $date[0])[6];
                        $hijri_day = explode(" ", $date[0])[5];
                        $gregorian =  (new \Datetime())->format('d/m/y');

                        $start =  (new \Datetime())->format('Y-m-01 H:i:s');
                        $end =   (new \Datetime())->format('Y-m-30 H:i:s');
                    @endphp
                <div class="blockTime position-relative">
                    <button class="btn btnPLus"><img src="{{ asset('img/icones/plus.png') }}" alt=""></button>
                    <img class="img-time" src="{{ asset('img/icones/time-shahid.png') }}" alt="">
                @if(Auth::guest())
                    <div class="">
                        <p class="textTimeShalied">Time Shahid</p><br>
                        <p class="calendar" style="font-weight:bold;">{{__('this feature is only available to community members')}} </p>
                        <center><a href="{{route('register')}}" class="oumma w-button" style="text-decoration:none;width:95px">{{__('Join us !')}}</a></center>
                    </div>
                @else
                    <div class="">
                        <p class="textTimeShalied">Time Shahid</p>
                        @php $shahid = explode(":",$shahid); if($shahid[0] == "00") $shahid[0] = "0"; @endphp
                        <p class="timeSh">{{$shahid[0]}}h {{$shahid[1]}} mn</p>
                        <p class="calendar">{{$hijri_day}} {{$hijri_month}} {{$hijri_year}} - <span>{{$gregorian}}</span></p>
                    </div>

                    @if($looks > 0)
                        <div class="elementBarreText" style="transform: rotate(-180deg); height:35px; margin-top:50px">
                            <div class="contentBarreText">
                                @php
                                    $variant = DB::table('videos')
                                            ->join('reads','videos.id','reads.video_id')
                                            ->join('sub_topics','sub_topics.id','videos.subtopic_id')
                                            ->join('main_topics','main_topics.id','sub_topics.mainTopic_id')
                                            ->where('reads.user_id', Auth::id())
                                            ->where('reads.created_at', '>=', $start)
                                            ->where('reads.created_at', '<', $end)
                                            ->where('reads.user_id', Auth::id())
                                            ->where('main_topics.id', 1)
                                            ->whereNull('videos.deleted_at')
                                            ->count();
                                @endphp
                                <p class="lettre" style="transform: rotate(180deg);">N</p>
                                <div class="progress-bar" role="progressbar bg-info" style="width:18px; height:{{$variant != 0 ?(($variant/$looks)*100):'0'}}%; border-radius:10px; background:#4A4A4A;" aria-valuenow="{{($variant/$looks)*100}}" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="contentBarreText">
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
                                <p class="lettre" style="transform: rotate(180deg);">T</p>
                                <div class="progress-bar" role="progressbar bg-info" style="width:18px; height:{{$variant != 0 ?(($variant/$looks)*100):'0'}}%; border-radius:10px; background:#4A4A4A;" aria-valuenow="{{($variant/$looks)*100}}" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="contentBarreText e">
                                @php
                                    $variant = DB::table('videos')
                                            ->join('reads','videos.id','reads.video_id')
                                            ->join('sub_topics','sub_topics.id','videos.subtopic_id')
                                            ->join('main_topics','main_topics.id','sub_topics.mainTopic_id')
                                            ->where('reads.user_id', Auth::id())
                                            ->where('reads.created_at', '>=', $start)
                                            ->where('reads.created_at', '<', $end)
                                            ->where('reads.user_id', Auth::id())
                                            ->where('main_topics.id', 5)
                                            ->whereNull('videos.deleted_at')
                                            ->count();
                                @endphp
                                <p class="lettre" style="transform: rotate(180deg);">E</p>
                                <div class="progress-bar" role="progressbar bg-info" style="width:18px; height:{{$variant != 0 ?(($variant/$looks)*100):'0'}}%; border-radius:10px; background:#4A4A4A;" aria-valuenow="{{($variant/$looks)*100}}" aria-valuemin="0" aria-valuemax="100"></div>

                            </div>
                            <div class="contentBarreText d">
                                @php
                                    $variant = DB::table('videos')
                                            ->join('reads','videos.id','reads.video_id')
                                            ->join('sub_topics','sub_topics.id','videos.subtopic_id')
                                            ->join('main_topics','main_topics.id','sub_topics.mainTopic_id')
                                            ->where('reads.user_id', Auth::id())
                                            ->where('reads.created_at', '>=', $start)
                                            ->where('reads.created_at', '<', $end)
                                            ->where('reads.user_id', Auth::id())
                                            ->where('main_topics.id', 7)
                                            ->whereNull('videos.deleted_at')
                                            ->count();
                                @endphp
                                <p class="lettre" style="transform: rotate(180deg);">D</p>
                                <div class="progress-bar" role="progressbar bg-info" style="width:18px; height:{{$variant != 0 ?(($variant/$looks)*100):'0'}}%; border-radius:10px; background:#4A4A4A;" aria-valuenow="{{($variant/$looks)*100}}" aria-valuemin="0" aria-valuemax="100"></div>

                            </div>
                            <div class="contentBarreText h">
                                @php
                                    $variant = DB::table('videos')
                                            ->join('reads','videos.id','reads.video_id')
                                            ->join('sub_topics','sub_topics.id','videos.subtopic_id')
                                            ->join('main_topics','main_topics.id','sub_topics.mainTopic_id')
                                            ->where('reads.user_id', Auth::id())
                                            ->where('reads.created_at', '>=', $start)
                                            ->where('reads.created_at', '<', $end)
                                            ->where('reads.user_id', Auth::id())
                                            ->where('main_topics.id', 3)
                                            ->whereNull('videos.deleted_at')
                                            ->count();
                                @endphp
                                <p class="lettre">H</p>
                                <div class="progress-bar" role="progressbar bg-info" style="width:18px; height:{{$variant != 0 ?(($variant/$looks)*100):'0'}}%; border-radius:10px; background:#4A4A4A;" aria-valuenow="{{($variant/$looks)*100}}" aria-valuemin="0" aria-valuemax="100"></div>

                            </div>
                            <div class="contentBarreText l">

                                @php
                                    $variant = DB::table('videos')
                                            ->join('reads','videos.id','reads.video_id')
                                            ->join('sub_topics','sub_topics.id','videos.subtopic_id')
                                            ->join('main_topics','main_topics.id','sub_topics.mainTopic_id')
                                            ->where('reads.user_id', Auth::id())
                                            ->where('reads.created_at', '>=', $start)
                                            ->where('reads.created_at', '<', $end)
                                            ->where('reads.user_id', Auth::id())
                                            ->where('main_topics.id', 2)
                                            ->whereNull('videos.deleted_at')
                                            ->count();
                                @endphp
                                <p class="lettre" style="transform: rotate(180deg);">L</p>
                                <div class="progress-bar" role="progressbar bg-info" style="width:18px; height:{{$variant != 0 ?(($variant/$looks)*100):'0'}}%; border-radius:10px; background:#4A4A4A;" aria-valuenow="{{($variant/$looks)*100}}" aria-valuemin="0" aria-valuemax="100"></div>

                            </div>
                            <div class="contentBarreText">
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
                                <p class="lettre" style="transform: rotate(180deg);">B</p>
                                <div class="progress-bar" role="progressbar bg-info" style="width:18px; height:{{$variant != 0 ?(($variant/$looks)*100):'0'}}%; border-radius:10px; background:#4A4A4A;" aria-valuenow="{{($variant/$looks)*100}}" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>

                        </div>
                    @endif
                @endif
                </div>
            </div>
        </div>
    </div>

    <div class="blockTablettePub">
        <div class="contentSuggestion1">
            <div class="publicite">
                <img src="{{ asset('img/publicite.png') }}" alt="">
            </div>
            <div class="blockTimeTablette position-relative">
                <button class="btn btnPLus"><img src="{{ asset('img/icones/plus.png') }}" alt=""></button>
                <img class="img-time" src="{{ asset('img/icones/time-shahid.png') }}" alt="">
                <div class="">
                    <p class="textTimeShalied">Time Shahid</p>
                    <p class="timeSh">2h 25mn</p>
                    <p class="calendar">12 Rajab 1638</p>
                </div>

                <div class="elementBarreText">
                    <div class="contentBarreText">
                        <div class="rectangle"></div>
                        <p class="lettre">B</p>
                    </div>
                    <div class="contentBarreText l">
                        <div class="rectangle"></div>
                        <p class="lettre">L</p>
                    </div>
                    <div class="contentBarreText h">
                        <div class="rectangle"></div>
                        <p class="lettre">H</p>
                    </div>
                    <div class="contentBarreText e">
                        <div class="rectangle"></div>
                        <p class="lettre">E</p>
                    </div>
                    <div class="contentBarreText d">
                        <div class="rectangle"></div>
                        <p class="lettre">D</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="mobMobile">
    <div class="block-shop">
        <div  class="offre-shop">
            <div class="div-block-322">
                <p class="text-block-318">{{__('Offer of the channel')}}</p>
                <div data-w-id="0a070e0d-57d5-30ba-c024-1a4991a71631" class="cross">
                    <div class="bar-cross"></div>
                    <div class="bar-cross-left"></div>
                </div>
            </div>
            <div class="div-block-319">
                <div class="div-block-318">
                    <div class="imgBullProfil">
                        <img src="{{ asset('img/Mu-bull-profil-logo-fitG.jpg') }}"  alt="">
                    </div>
                    <div class="text-block-320">{{__('Product name')}} / Formation</div>
                    <a href="#" class="link-block-38 w-inline-block">
                        <span class="text-block-319">{{__('Discover')}}</span>
                    </a>
                </div>
                <div class="div-block-318">
                    <div class="imgBullProfil">
                        <img src="{{ asset('img/Mu-bull-profil-logo-fitG.jpg') }}"  alt="">
                    </div>
                    <div class="text-block-320">{{__('Product name')}} 2</div>
                    <a href="#" class="link-block-38 w-inline-block">
                        <span class="text-block-319">{{__('Discover')}}</span>
                    </a>
                </div>
                <div class="div-block-318">
                    <div class="imgBullProfil">
                        <img src="{{ asset('img/Mu-bull-profil-logo-fitG.jpg') }}"  alt="">
                    </div>
                    <div class="text-block-320">{{__('Product name')}}...</div>
                    <a href="#" class="link-block-38 w-inline-block">
                        <span class="text-block-319">{{__('Discover')}}</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="content-commentaire">
    <div class="container-fluid">
        <div class="row ">
            <div class="col-md-5  col-lg-5 col-sm-12">
                @if(count($comments) > 0)
                <div class="commentOne commentBlock">
                    <div class="commentTitle">
                        <p class="nombreComment">{{count($comments)}}</p>
                        <p class="commentText">{{__('Comments')}}</p>
                        <img class="commentImg" src="{{ asset('img/icones/commet.svg') }}" alt="">
                    </div>
                    @include('adminlte-templates::common.errors')
                    <form method="POST" action="/comments">
                        @csrf
                        <input type="hidden" name="video_id" value="{{$video->id}}" id="">
                        <textarea class="inputCommentaire2" name="value" id=""></textarea>

                        <div class="div-block-332">
                            <button type="submit" class="btn btnEnvoyer" @if(Auth::guest()) disabled @endif>{{__('Send')}}</button>
                        </div>
                    </form>
                    @for($i = 1; $i < count($comments); $i++)


                    <div class="coment-1">
                        <div class="div-block-325">
                            <div class="div-block-329">

                                <div class="div-block-327">

                                    @if($users[$i]->age <= 15)
                                    <img src="{{asset('images/kids_preloader.png')}}" style="width:45px; height:42px"  class="img-circle" alt="User Image"/>
                                    @elseif($users[$i]->age > 15 && $users[$i]->sex == '1')
                                    <img src="{{asset('images/flow_preloader.png')}}" style="width:45px; height:42px"  class="img-circle" alt="User Image"/>
                                    @elseif($users[$i]->age > 15 && users[$i]->sex == '0')
                                    <img src="{{asset('images/sista_preloader.png')}}" style="width:45px; height:42px"  class="img-circle" alt="User Image"/>
                                    @endif
                                </div>
                                <div class="div-block-326" >
                                    <p class="textblock326">{{$users[$i]->name}}</p>
                                    <div class="text-block-322 showReadMore1" style="">{{$comments[$i]->value}}
                                    </div>
                                </div>
                                <div class="text-block-Date">
                                    @if(intval(abs(strtotime("now") - strtotime($comments[$i]->created_at))/ 86400) == 0)
                                    @if(intval(abs(strtotime("now") - strtotime( $comments[$i]->created_at))/ 3600) > 0)
                                    {{intval(abs(strtotime("now") - strtotime( $comments[$i]->created_at))/3600)}} hours ago
                                    @else(intval(abs(strtotime("now") - strtotime( $comments[$i]->created_at))/ 3600) == 0)
                                    {{intval(abs(strtotime("now") - strtotime( $comments[$i]->created_at))/60)}} minutes ago
                                    @endif
                                    @elseif(intval(abs(strtotime("now") - strtotime( $comments[$i]->created_at))/ 86400) == 1)
                                    Yesterday at {{strftime("%H:%M", strtotime( $comments[$i]->created_at))}}
                                    @elseif(intval(abs(strtotime("now") - strtotime( $comments[$i]->created_at))/ 86400) >= 2 && intval(abs(strtotime("now") - strtotime( $comments[$i]->created_at))/ 86400) <= 27)
                                    {{intval(abs(strtotime("now") - strtotime( $comments[$i]->created_at))/ 86400)}} days ago
                                    @else(intval(abs(strtotime("now") - strtotime( $comments[$i]->created_at))/ 86400) > 27)
                                    On {{strftime("%d/%m/%Y", strtotime( $comments[$i]->created_at))}}
                                    @endif
                                </div>
                            </div>
                            <div class="d-flex">
                                <div class="d-flex">
                                    <p class="commenter">{{__('Comment')}}</p>
                                    <button  onclick="TestsFunction()"  class="message-2-messaage w-inline-block btn">
                                        <img src="{{ asset('img/Mu-picto-comment-gris2x.png') }}" loading="lazy" width="33" alt="">
                                    </button>
                                </div>
                                <div>
                                    <div class="likes">
                                        <div class="text-block-292"> {{\App\Models\Comment::find($comments[$i]->comment_id)->likers()->count()}}</div>
                                        <div class="imgCoeur2">
                                            <a href="{{ route('likecomment' , $comments[$i]->comment_id) }}">
                                                <img src="{{ asset('img/icones/coeurRose.svg') }}" alt="">
                                            </a>
                                        </div>
                                        <div class="disliker">
                                            <a href="{{ route('dislikecomment' , $comments[$i]->comment_id) }}">
                                                <img src="{{ asset('img/icones/loveRenverseGris.png') }}" alt="">
                                            </a>
                                        </div>
                                        <div class="text-block-292"> {{\App\Models\Comment::find($comments[$i]->comment_id)->unlikes()->count()}} </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="div-block-331" id="TestsDiv" style="display:none">

                            @include('adminlte-templates::common.errors')
                            <form method="POST" action="/comments">
                                @csrf
                                <input type="hidden" name="video_id" value="{{$video->id}}" id="">
                                <textarea class="inputCommentaire" name="value" id="" rows="5"></textarea>

                                <div class="div-block-332">
                                    <div data-w-id="4b72083c-6fc6-243d-8a1a-20877dbe9b72" class="text-block-325">{{__('Reset')}}</div>
                                    <button type="submit" class="text-block-326 btn">{{__('Send')}}</button>
                                </div>
                            </form>
                            <div>

                            </div>
                        </div>
                       <div class="d-flex group11">
                           <p class="textTousCom">{{__('See all comments')}}</p>
                           <button class="btn btnTous" data-toggle="modal" data-target="#exampleModal"><img class="imgTousCom" src="{{ asset('img/touscom.svg') }}" alt=""></button>
                           <!-- Modal -->
                           <div class="modal fade modalCommenraire" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                               <div class="modal-dialog modal-dialog2" role="document">
                                   <div class="modal-content">
                                       <div class="plus-comments-mob">
                                            <div class="div-block-465">
                                                <button data-dismiss="modal" class="btn flech-grey w-inline-block">
                                                    <div class="fleche-up-grey"></div>
                                                    <div class="fleche-down-grey"></div>
                                                </button>
                                            </div>
                                           <div class="div-block-435">
                                                <div class="ad-comment">
                                                    @include('adminlte-templates::common.errors')
                                                    <form method="POST" action="/comments">
                                                        @csrf
                                                        <input type="hidden" name="video_id" value="{{$video->id}}" id="">
                                                        <textarea class="inputCommentaire2" name="value" id=""></textarea>
                                                        <div class="div-block-332">
                                                            <button type="submit" class="btn btnEnvoyer">{{__('Post')}}</button>
                                                        </div>
                                                    </form>
                                                </div>
                                               <div>

                                                   @for($i = 1; $i < count($comments); $i++)
                                                   <div class="coment-1">
                                                       <div class="div-block-325">
                                                           <div class="div-block-329">

                                                               <div class="div-block-327">

                                                                   @if($users[$i]->age <= 15)
                                                                   <img src="{{asset('images/kids_preloader.png')}}" style="width:45px; height:42px"  class="img-circle" alt="User Image"/>
                                                                   @elseif($users[$i]->age > 15 && $users[$i]->sex == '1')
                                                                   <img src="{{asset('images/flow_preloader.png')}}" style="width:45px; height:42px"  class="img-circle" alt="User Image"/>
                                                                   @elseif($users[$i]->age > 15 && users[$i]->sex == '0')
                                                                   <img src="{{asset('images/sista_preloader.png')}}" style="width:45px; height:42px"  class="img-circle" alt="User Image"/>
                                                                   @endif
                                                               </div>
                                                               <div class="div-block-326" >
                                                                   <p class="textblock326">{{$users[$i]->name}}</p>
                                                                   <div class="text-block-322 showReadMore1" style="">{{$comments[$i]->value}}
                                                                   </div>
                                                               </div>
                                                               <div class="text-block-Date">
                                                                   @if(intval(abs(strtotime("now") - strtotime($comments[$i]->created_at))/ 86400) == 0)
                                                                   @if(intval(abs(strtotime("now") - strtotime( $comments[$i]->created_at))/ 3600) > 0)
                                                                   {{intval(abs(strtotime("now") - strtotime( $comments[$i]->created_at))/3600)}} hours ago
                                                                   @else(intval(abs(strtotime("now") - strtotime( $comments[$i]->created_at))/ 3600) == 0)
                                                                   {{intval(abs(strtotime("now") - strtotime( $comments[$i]->created_at))/60)}} minutes ago
                                                                   @endif
                                                                   @elseif(intval(abs(strtotime("now") - strtotime( $comments[$i]->created_at))/ 86400) == 1)
                                                                   Yesterday at {{strftime("%H:%M", strtotime( $comments[$i]->created_at))}}
                                                                   @elseif(intval(abs(strtotime("now") - strtotime( $comments[$i]->created_at))/ 86400) >= 2 && intval(abs(strtotime("now") - strtotime( $comments[$i]->created_at))/ 86400) <= 27)
                                                                   {{intval(abs(strtotime("now") - strtotime( $comments[$i]->created_at))/ 86400)}} days ago
                                                                   @else(intval(abs(strtotime("now") - strtotime( $comments[$i]->created_at))/ 86400) > 27)
                                                                   On {{strftime("%d/%m/%Y", strtotime( $comments[$i]->created_at))}}
                                                                   @endif
                                                               </div>
                                                           </div>
                                                           <div class="d-flex">
                                                               <div class="d-flex">
                                                                   <p class="commenter">Commenter</p>
                                                                   <button  onclick="TestsFunction()"  class="message-2-messaage w-inline-block btn">
                                                                       <img src="{{ asset('img/Mu-picto-comment-gris2x.png') }}" loading="lazy" width="33" alt="">
                                                                   </button>
                                                               </div>
                                                               <div>
                                                                   <div class="likes">
                                                                       <div class="text-block-292"> {{\App\Models\Comment::find($comments[$i]->comment_id)->likers()->count()}}</div>
                                                                       <div class="imgCoeur2">
                                                                           <a href="{{ route('likecomment' , $comments[$i]->comment_id) }}">
                                                                               <img src="{{ asset('img/icones/coeurRose.svg') }}" alt="">
                                                                           </a>
                                                                       </div>
                                                                       <div class="disliker">
                                                                           <a href="{{ route('dislikecomment' , $comments[$i]->comment_id) }}">
                                                                               <img src="{{ asset('img/icones/loveRenverseGris.png') }}" alt="">
                                                                           </a>
                                                                       </div>
                                                                       <div class="text-block-292"> {{\App\Models\Comment::find($comments[$i]->comment_id)->unlikes()->count()}} </div>
                                                                   </div>
                                                               </div>
                                                           </div>
                                                       </div>
                                                       <div class="div-block-331" id="TestsDiv" style="display:none">

                                                           @include('adminlte-templates::common.errors')
                                                           <form method="POST" action="/comments">
                                                               @csrf
                                                               <input type="hidden" name="video_id" value="{{$video->id}}" id="">
                                                               <textarea class="inputCommentaire" name="value" id="" rows="5"></textarea>

                                                               <div class="div-block-332">
                                                                   <button type="submit" class="text-block-326 btn">{{__('')}}Poster</button>
                                                               </div>
                                                           </form>
                                                           <div>

                                                           </div>
                                                       </div>
                                                   </div>
                                                   @endfor
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                    </div>
                    @php
                    if($i == 1)
                    break;
                    @endphp
                    @endfor

                    @for($i = 0; $i < count($comments); $i++)


                </div>

                @php
                if($i == 0)
                break;
                @endphp
                @endfor
                @else
                <div class="commentOne commentBlock">
                    <div class="commentTitle">
                        <img class="commentImg" src="{{ asset('img/icones/commet.svg') }}" alt="">
                        <p class="nombreComment"></p>
                        <p class="commentText">0 {{__('Comment')}}</p>
                    </div>
                    <div class="div-block-331" >
                        @include('adminlte-templates::common.errors')
                        <form method="POST" action="/comments">
                            @csrf
                            <input type="hidden" name="video_id" value="{{$video->id}}" id="">
                            <textarea class="inputCommentaire" name="value" id=""></textarea>

                            <div class="div-block-332">
                                <button class="btn btnAnnuler">{{__('Reset')}}</button>
                                <button type="submit" class="btn btnEnvoyer">{{__('Send')}}</button>
                            </div>
                        </form>
                    </div>
                </div>
                @endif
            </div>
            <div class="col-md-7 col-lg-7 colModife7">
                <div class="contentSwipeToday BlockInshaAlla swiperBlackMob">
                    <div class="barreLatraleNoir">
                        <div class="categorie-name">
                            <img src="{{ asset('img/Mu-fleur2.png') }}"  alt="">
                        </div>
                    </div>
                    <div class="sousElementInshaAlla ">
                        <p class="text-inshaAlla">In sha Allah</p>
                        <div class="swiper-container swipeContainermodife1">
                            <div class="swiper-wrapper">
                                @foreach($inshaallah as $video)
                                <div class=" swiper-slide recondation-video-card">
                                    @php
                                    $user = App\User::find($video->user_id);

                                    $playlist = DB::Table('playlists')->select('playlists.*')
                                    ->where('playlists.user_id', Auth::id())
                                    ->where('playlists.video_id', $video->id)
                                    ->first();
                                    @endphp
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
                                @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="MobElementIn">
    <div class="contentSwipeToday BlockInshaAlla">
        <div class="barreLatraleNoir">
            <div class="categorie-name">
                <img src="{{ asset('img/Mu-fleur2.png') }}"  alt="">
            </div>
        </div>
        <div class="sousElementInshaAlla ">
            <div class="swipeTitle">
                <div class="categorie-name1">
                    <img src="{{ asset('img/Mu-fleur2.png') }}"  alt="">
                </div>
                <p class="text-inshaAlla">In sha Allah</p>
            </div>
            <div class="swiper-container swipeContainermodife1">
                <div class="swiper-wrapper">
                    @php
                    $user = App\User::find($video->user_id);

                    $playlist = DB::Table('playlists')->select('playlists.*')
                    ->where('playlists.user_id', Auth::id())
                    ->where('playlists.video_id', $video->id)
                    ->first();
                    @endphp

                    @foreach($inshaallah as $video)
                    <div class=" swiper-slide recondation-video-card">
                        <div class="video-vignette-recom">
                            @if($video->thumbnail)
                            <a href="{{route('play',[$video->id])}}" style="text-decoration:none">
                                <img src="{{ asset('vids/thumbnails/') }}/{{$video->thumbnail}}" class="vignette-video-sugg">
                            </a>
                            @elseif($user->age <= 15)
                            <a href="{{route('play',[$video->id])}}" style="text-decoration:none">
                                <img src="{{asset('images/kids_preloader.png')}}" class="vignette-video-sugg">
                            </a>
                            @elseif($user->age > 15 && $user->sex == '1')
                            <a href="{{route('play',[$video->id])}}" style="text-decoration:none">
                                <img src="{{asset('images/flow_preloader.png')}}" class="vignette-video-sugg">
                            </a>
                            @elseif($user->age > 15 && $user->sex == '0')
                            <a href="{{route('play',[$video->id])}}" style="text-decoration:none">
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
                                    <a href="{{route('channel.visitor', $channel->id)}}"  class="bull-id-acount-recom w-inline-block">
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
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
    <div class="content-categorie-play">
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
                    <div class="swiper-slide swipe2  spaceFlow2">
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

        @if($videos_life)
        @if(count($videos_life) > 0)
        <div class="content-life content-Block-slide">
            <div class="container-fluid">
                <div class="contentSwipeToday">
                    <div class="barreLatraleNoir life">
                        <div class="categorie-name">
                            <img src="{{ asset('img/Mu-fleur2.png') }}" alt="">
                        </div>
                    </div>
                    <div class="swiper-slide swipe2  spaceFlow2">
                        <div class="swipeTitle">
                            <div class="categorie-name1">
                                <img src="{{ asset('img/Mu-fleur2.png') }}"  alt="">
                            </div>
                            <p class="text-life">Life</p>
                        </div>
                        <div class="swiper-container swiper-helatcare">
                            <div class="swiper-wrapper">
                                @foreach($videos_life as $video)
                                <div class=" swiper-slide recondation-video-card">
                                    @php
                                    $user = App\User::find($video->user_id);
                                    $playlist = DB::Table('playlists')->select('playlists.*')
                                    ->where('playlists.user_id', Auth::id())
                                    ->where('playlists.video_id', $video->id)
                                    ->first();
                                    @endphp
                                    <div class="video-vignette-recom">
                                        @if($video->thumbnail)
                                        <a href="{{route('play',[$video->id])}}"  style="text-decoration:none">
                                            <img src="{{ asset('vids/thumbnails/') }}/{{$video->thumbnail}}" class="vignette-video-sugg">
                                        </a>
                                        @elseif($user->age <= 15)
                                        <a href="{{route('play',[$video->id])}}"  style="text-decoration:none">
                                            <img src="{{asset('images/kids_preloader.png')}}" class="vignette-video-sugg">
                                        </a>
                                        @elseif($user->age > 15 && $user->sex == '1')
                                        <a href="{{route('play',[$video->id])}}""  style="text-decoration:none">
                                            <img src="{{asset('images/flow_preloader.png')}}" class="vignette-video-sugg">
                                        </a>
                                        @elseif($user->age > 15 && $user->sex == '0')
                                        <a href="{{route('play',[$video->id])}}"  style="text-decoration:none">
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

        @if($videos_health)
        @if(count($videos_health) > 0)
        <div class="content-Health content-Block-slide">
            <div class="container-fluid">
                <div class="contentSwipeToday">
                    <div class="barreLatraleNoir Health">
                        <div class="categorie-name">
                            <img src="{{ asset('img/Mu-fleur2.png') }}"  alt="">
                        </div>
                    </div>
                    <div class="swiper-slide swipe2  spaceFlow2">
                        <div class="swipeTitle">
                            <div class="categorie-name1">
                                <img src="{{ asset('img/Mu-fleur2.png') }}"  alt="">
                            </div>
                            <p class="text-health">Health</p>
                        </div>
                        <div class="swiper-container swiper-helatcare">
                            <div class="swiper-wrapper">
                                @foreach($videos_health as $video)
                                <div class=" swiper-slide recondation-video-card">
                                    <div class="video-vignette-recom">
                                        @if($video->thumbnail)
                                        <a href="{{route('play',[$video->id])}}"  style="text-decoration:none">
                                            <img src="{{ asset('vids/thumbnails/') }}/{{$video->thumbnail}}" class="vignette-video-sugg">
                                        </a>
                                        @elseif($user->age <= 15)
                                        <a href="{{route('play',[$video->id])}}"  style="text-decoration:none">
                                            <img src="{{asset('images/kids_preloader.png')}}" class="vignette-video-sugg">
                                        </a>
                                        @elseif($user->age > 15 && $user->sex == '1')
                                        <a href="{{route('play',[$video->id])}}""  style="text-decoration:none">
                                        <img src="{{asset('images/flow_preloader.png')}}" class="vignette-video-sugg">
                                        </a>
                                        @elseif($user->age > 15 && $user->sex == '0')
                                        <a href="{{route('play',[$video->id])}}"  style="text-decoration:none">
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

        @if($videos_business)
        @if(count($videos_business) > 0)
        <div class="content-Business content-Block-slide">
            <div class="container-fluid">
                <div class="contentSwipeToday">
                    <div class="barreLatraleNoir Business">
                        <div class="categorie-name">
                            <img src="{{ asset('img/Mu-fleur2.png') }}"  alt="">
                        </div>
                    </div>
                    <div class="swiper-slide swipe2  spaceFlow2">
                        <div class="swipeTitle">
                            <div class="categorie-name1">
                                <img src="{{ asset('img/Mu-fleur2.png') }}"  alt="">
                            </div>
                            <p class="text-business">Business</p>
                        </div>
                        <div class="swiper-container swiper-helatcare">
                            <div class="swiper-wrapper">
                                @foreach($videos_business as $video)
                                <div class=" swiper-slide recondation-video-card">
                                    <div class="video-vignette-recom">
                                        @if($video->thumbnail)
                                        <a href="{{route('play',[$video->id])}}"  style="text-decoration:none">
                                            <img src="{{ asset('vids/thumbnails/') }}/{{$video->thumbnail}}" class="vignette-video-sugg">
                                        </a>
                                        @elseif($user->age <= 15)
                                        <a href="{{route('play',[$video->id])}}"  style="text-decoration:none">
                                            <img src="{{asset('images/kids_preloader.png')}}" class="vignette-video-sugg">
                                        </a>
                                        @elseif($user->age > 15 && $user->sex == '1')
                                        <a href="{{route('play',[$video->id])}}""  style="text-decoration:none">
                                        <img src="{{asset('images/flow_preloader.png')}}" class="vignette-video-sugg">
                                        </a>
                                        @elseif($user->age > 15 && $user->sex == '0')
                                        <a href="{{route('play',[$video->id])}}"  style="text-decoration:none">
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

        @if($videos_education)
        @if(count($videos_education) > 0)
        <div class="content-Education content-Block-slide">
            <div class="container-fluid">
                <div class="contentSwipeToday">
                    <div class="barreLatraleNoir Education">
                        <div class="categorie-name">
                            <img src="{{ asset('img/Mu-fleur2.png') }}"  alt="">
                        </div>
                    </div>
                    <div class="swiper-slide swipe2  spaceFlow2">
                        <div class="swipeTitle">
                            <div class="categorie-name1">
                                <img src="{{ asset('img/Mu-fleur2.png') }}"  alt="">
                            </div>
                            <p class="text-education">Education</p>
                        </div>
                        <div class="swiper-container swiper-helatcare">
                            <div class="swiper-wrapper">
                                @foreach($videos_education as $video)
                                <div class=" swiper-slide recondation-video-card">
                                    <div class="video-vignette-recom">
                                        @if($video->thumbnail)
                                        <a href="{{route('play',[$video->id])}}"  style="text-decoration:none">
                                            <img src="{{ asset('vids/thumbnails/') }}/{{$video->thumbnail}}" class="vignette-video-sugg">
                                        </a>
                                        @elseif($user->age <= 15)
                                        <a href="{{route('play',[$video->id])}}"  style="text-decoration:none">
                                            <img src="{{asset('images/kids_preloader.png')}}" class="vignette-video-sugg">
                                        </a>
                                        @elseif($user->age > 15 && $user->sex == '1')
                                        <a href="{{route('play',[$video->id])}}""  style="text-decoration:none">
                                        <img src="{{asset('images/flow_preloader.png')}}" class="vignette-video-sugg">
                                        </a>
                                        @elseif($user->age > 15 && $user->sex == '0')
                                        <a href="{{route('play',[$video->id])}}"  style="text-decoration:none">
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

        @if($videos_environnement)
        @if(count($videos_environnement) > 0)
        <div class="content-Evironnement content-Block-slide">
            <div class="container-fluid">
                <div class="contentSwipeToday">
                    <div class="barreLatraleNoir Evironnement">
                        <div class="categorie-name">
                            <img src="{{ asset('img/Mu-fleur2.png') }}"  alt="">
                        </div>
                    </div>
                    <div class="swiper-slide swipe2  spaceFlow2">
                        <div class="swipeTitle">
                            <div class="categorie-name1">
                                <img src="{{ asset('img/Mu-fleur2.png') }}"  alt="">
                            </div>
                            <p class="text-environnement">Environnement</p>
                        </div>
                        <div class="swiper-container swiper-helatcare">
                            <div class="swiper-wrapper">
                                @foreach($videos_environnement as $video)
                                <div class=" swiper-slide recondation-video-card">
                                    <div class="video-vignette-recom">
                                        @if($video->thumbnail)
                                        <a href="{{route('play',[$video->id])}}"  style="text-decoration:none">
                                            <img src="{{ asset('vids/thumbnails/') }}/{{$video->thumbnail}}" class="vignette-video-sugg">
                                        </a>
                                        @elseif($user->age <= 15)
                                        <a href="{{route('play',[$video->id])}}"  style="text-decoration:none">
                                            <img src="{{asset('images/kids_preloader.png')}}" class="vignette-video-sugg">
                                        </a>
                                        @elseif($user->age > 15 && $user->sex == '1')
                                        <a href="{{route('play',[$video->id])}}""  style="text-decoration:none">
                                        <img src="{{asset('images/flow_preloader.png')}}" class="vignette-video-sugg">
                                        </a>
                                        @elseif($user->age > 15 && $user->sex == '0')
                                        <a href="{{route('play',[$video->id])}}"  style="text-decoration:none">
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

        <!-- Modal1 -->
    <div class="modal fade " id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modalModif1" role="document">
            <div class="modal-content">
                <div  class="offre-shop">
                    <div class="cross" data-dismiss="modal">
                        <div class="bar-cross"></div>
                        <div class="bar-cross-left"></div>
                    </div>
                    <p class="text-title">{{__('Title of the video')}} : {{$video->main_title }}</p>
                    <div class="d-flex block-objectif-mob">
                        <p class="des-text">{{__('Objectives of the video')}} : </p>
                        <p>{{ $video->motivation }}</p>
                    </div>
                    <div class="buttonFlech">
                        <div class="d-flex">
                            <button class="btn btnFleche1 btnModalOpen">
                                <img src="{{asset('img/close1.png')}}" alt="">
                            </button>
                            <button class="btn btnFleche1 btnModalClose ">
                                <img src="{{asset('img/open2.png')}}" alt="">
                            </button>
                        </div>
                        <div class="div-block-322">
                            <img class="panier3" src="{{asset('img/panier.png')}}" alt="">
                            <p class="text-block-318">{{__('Offer of the channel')}}</p>
                        </div>
                    </div>
                    <div class="shopInModal">
                        <div class="div-block-319">
                            <div class="div-block-318">
                                <div class="imgBullProfil">
                                    <img src="{{ asset('img/Mu-bull-profil-logo-fitG.jpg') }}"  alt="">
                                </div>
                                <div class="text-block-320">{{__('Product name')}} / Formation</div>
                                <a href="#" class="link-block-38 w-inline-block">
                                    <span class="text-block-319">{{__('Discover')}}</span>
                                </a>
                            </div>
                            <div class="div-block-318">
                                <div class="imgBullProfil">
                                    <img src="{{ asset('img/Mu-bull-profil-logo-fitG.jpg') }}"  alt="">
                                </div>
                                <div class="text-block-320">{{__('Product name')}} 2</div>
                                <a href="#" class="link-block-38 w-inline-block">
                                    <span class="text-block-319">{{__('Discover')}}</span>
                                </a>
                            </div>
                            <div class="div-block-318">
                                <div class="imgBullProfil">
                                    <img src="{{ asset('img/Mu-bull-profil-logo-fitG.jpg') }}"  alt="">
                                </div>
                                <div class="text-block-320">{{__('Product name')}}...</div>
                                <a href="#" class="link-block-38 w-inline-block">
                                    <span class="text-block-319">{{__('Discover')}}</span>
                                </a>
                            </div>
                        </div>
                        <div class="block319Mob">
                            <div class="swiper-container swiper-shop">
                                <div class="swiper-wrapper">
                                    <div class=" swiper-slide swipeslideShop">
                                        <div class="div-block-318">
                                            <div class="imgBullProfil">
                                                <img src="{{ asset('img/Mu-bull-profil-logo-fitG.jpg') }}"  alt="">
                                            </div>
                                            <div class="text-block-320">{{__('Product name')}} / Formation</div>
                                            <a href="#" class="link-block-38 w-inline-block">
                                                <span class="text-block-319">{{__('Discover')}}</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class=" swiper-slide swipeslideShop">
                                        <div class="div-block-318">
                                            <div class="imgBullProfil">
                                                <img src="{{ asset('img/Mu-bull-profil-logo-fitG.jpg') }}"  alt="">
                                            </div>
                                            <div class="text-block-320">{{__('Product name')}} 2</div>
                                            <a href="#" class="link-block-38 w-inline-block">
                                                <span class="text-block-319">{{__('Discover')}}</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class=" swiper-slide swipeslideShop">
                                        <div class="div-block-318">
                                            <div class="imgBullProfil">
                                                <img src="{{ asset('img/Mu-bull-profil-logo-fitG.jpg') }}"  alt="">
                                            </div>
                                            <div class="text-block-320">{{__('Product name')}}...</div>
                                            <a href="#" class="link-block-38 w-inline-block">
                                                <span class="text-block-319">{{__('Discover')}}</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="descrip-text">
                        <p class="des-text vid-descrp ">{{__('Description of my video')}} : </p>
                        <p class="text-block-427">{{ $video->description }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>

    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('bootstrap/bootstrap.min.js')}}"></script>
    <script src="{{asset('swiper/swiper-bundle.min.js')}}"></script>
    <script src="{{asset('js/menu.js')}}"></script>
    <script>
        var swiper = new Swiper('.swipeContainermodife1', {
            slidesPerView: 3,
            spaceBetween: 30,
            breakpoints: {
                980: {
                    slidesPerView: 1.2,
                    spaceBetween: 10
                },
                1200: {
                    slidesPerView: 1.2,
                    spaceBetween: 30
                },
            }

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

    <script>
        //My code not persuassive
        var video_play = document.querySelector(".elementVideoParDefaut");
        var blessings = document.getElementById("blessings");
        var prays = document.getElementById("prays");
        var barometer = document.getElementById("barometer");
        barometer.value = "";

        blessings.style.display = "none";
        prays.style.display = "none";

        function toggle(){
            blessings.style.display = "none";
        }

        function endof(){
            prays.style.display = "none";
        }

        function start(){
            if(video_play.readyState > video_play.HAVE_METADATA){
                blessings.style.display = "block";
                barometer.value = "1";
                setTimeout(toggle, 10000);
                var duration = video_play.duration;
                wait = (duration - 18)*1000;
                setTimeout(end, wait);
                setTimeout(endof, 10000);
            }
        }

        function end(){
            blessings.style.display = "none";
            prays.style.display = "block";
        }
    </script>


@endsection

</body>

