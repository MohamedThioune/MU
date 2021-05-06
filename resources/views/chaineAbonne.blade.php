
@extends('layouts.sidbarDashboard')
@section('head')
<link rel="stylesheet" type="text/css" href="{{asset('css/component.css')}}" />
<link rel="stylesheet" type="text/css" href="{{asset('css/video.css')}}" />
<link rel="stylesheet" href="{{asset('swiper/swiper-bundle.min.css')}}">
@php if(isset($_COOKIE['lang'])) App::setLocale($_COOKIE['lang']); @endphp
@endsection

@section('content-sidbar-element')
<div class="business-content">
    <div class="bando-name">
        <div class="business-bandeau-chaine chaineAbonneBlockHead">
            <div class="div-block-385">

                <div class="chaine">
                    <a class="btnSubscripeNotif" href="">
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
        <div class="chaine-name">
            <div class="logo-chaine">
                @php $user = App\User::find($visit->user_id); @endphp

                @if($visit->logo)
                <img src="{{asset('img')}}/{{$visit->logo}}" class="image-118">
                @elseif($user->age <= 15)
                <img class="image-118" src="{{asset('images/kids_preloader.png')}}" alt="">
                @elseif($user->age > 15 && $user->sex == '1')
                <img class="image-118" src="{{asset('images/flow_preloader.png')}}" alt=""/>
                @elseif($user->age > 15 && $user->sex == '0')
                <img class="image-118" src="{{asset('images/sista_preloader.png')}}" alt="">
                @endif
            </div>
            <div>
                <h1 class="heading-45">{{$visit->name}}</h1>
                <div class="div-block-383">
                    <p class="text-block-344">{{\App\Models\Channel::find($visit->id)->abonnees->count()}} </p>
                    <p class="text-block-345">{{__('Subscribers')}}</p>
                </div>
            </div>

            @if($bool)
            <a class="text-block-380" style="color:white; background: #F57409; padding:5px 0; margin-left:20px; border-radius:10px; margin-top:-10px; " href="{{route('channel.visitor', $visit->id)}}">
                <div style="padding: 3px 10px;font-size:0.75em"><strong style="text-decoration:underline;" style="">{{__('Preview in visitor mode')}}</strong> :<br> {{__('This is what users will see of your page.')}}<br>{{__('Click to exit this mode.')}}</div>
            </a>
            @elseif($admin)
            <div class="text-block-380" style="color:white; background: #F57409; padding:5px 0; margin-left:20px; border-radius:10px; margin-top:-10px; " >
                <div style="padding: 3px 10px;font-size:0.75em"><strong style="text-decoration:underline;" style="">{{__('Admin mode')}}</strong> :<br> <a  class= "btn btn-default" href="{{route('channel.fly',$visit->id)}}">{{__('Switch to overview mode.')}}</a> &nbsp;&nbsp;&nbsp; <a class= "btn btn-default" href="{{route('channel.visitor',$visit->id)}}">{{__('Passes an edition mode.')}}</a> </div>
            </div>
            @endif
        </div>
    </div>
    <div class="menu-content-business business-Web">
        <a href="#" class="link-26">Infos</a>
        <a href="#" class="link-26">Recents</a>
        <a href="{{route('flow')}}" class="link-26">{{__('All videos')}}</a>
        <a href="#" class="link-26">{{__('Offers')}}</a>
        <a href="#" class="link-26">Playlist</a>
    </div>
    <div class="menu-content-business business-MOb">
        <div class="swiper-container swiper-Infos">
            <div class="swiper-wrapper">
                <div class=" swiper-slide">
                    <a href="#" class="link-26">Infos</a>
                </div>
                <div class=" swiper-slide">
                    <a href="#" class="link-26">Recents</a>
                </div>
                <div class=" swiper-slide">
                    <a href="{{route('flow')}}" class="link-26">{{__('All videos')}}</a>
                </div>
                <div class=" swiper-slide">
                    <a href="#" class="link-26">{{__('Offers')}}</a>
                </div>
                <div class=" swiper-slide">
                    <a href="#" class="link-26">Playlist</a>
                </div>
            </div>
        </div>
    </div>

    @if($events)
    @if(count($events)>1)
    <div class="infos-hot">
        <p class="text-block-381">Fresh Flow</p>
        <div class="div-block-394">
            <div class="hot-green">
                <img src="{{ asset('img/Mu-hot-info.png') }}" loading="lazy" width="47">
            </div>
            @foreach($events as $event)
            <div class="div-block-391">
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
                            <p class="text-block-384">{{$event->text}}</p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <br>
        <div class="div-block-394">
        @if($edit)
            @if(!$event)
            <a class="btn btn-default" style="text-decoration:none;" href="{{route('events.create')}}" alt="">&#x267B; {{__('Refresh')}}</a>
            @else
            <a class="btn btn-default" style="text-decoration:none;" href="{{route('events.edit', $event->id)}}" alt="">&#x267B; {{__('Refresh')}}}</a>
            @endif
        @endif
        </div>
    </div>
    @endif
    @endif
    @if($videos && count($videos) > 0)
    <div class="business-now">
        <div class="video-sadakatia-asso">
            <video class="videoChaine7" autoplay>
                <source src="{{ asset('vids/video-principale.mp4')}}" type="video/mp4;charset=UTF-8">
                <source src="{{ asset('vids/video-principale.mp4')}}" type='video/webm; codecs="vp8, vorbis"' />
                <source src="{{ asset('vids/video-principale.mp4')}}" type='video/ogg; codecs="theora, vorbis"' />
            </video>
        </div>
        <div class="sadaka-txt">
            <p class="text-block-334">{{$videos[0]->main_title}}</p>
            <p class="text-block-336">{{$visit->description}}</p>
            <div class="div-block-337">
                <a href="#Offre-business" class="business-buton w-inline-block">
                    <span class="text-block-338">{{__('Discover all offers')}}</span>
                </a>
            </div>
            <!-- <div class="div-block-339">
                <div class="video-suite">
                    <p class="text-block-347">2.</p>
                    <div class="vigenette-video-suite">
                        <img src="{{ asset('img/Mu-Vignette-video-400x250-photographe.jpg') }}" alt="" class="image9">
                    </div>
                </div>
                <div class="video-suite">
                    <p class="text-block-347">3.</p>
                    <div class="vigenette-video-suite">
                        <img src="{{ asset('img/Mu-Vignette-video-400x250-photographe.jpg') }}" alt="" class="image9">
                    </div>
                </div>
                <div class="video-suite">
                    <p class="text-block-347">4.</p>
                    <div class="vigenette-video-suite">
                        <img src="{{ asset('img/Mu-Vignette-video-400x250-photographe.jpg') }}" alt="" class="image9">
                    </div>
                </div>
                <div class="text-block-349">…</div>
            </div> -->
        </div>
    </div>
    @endif
    <div class="chaine-description">
        <div class="chaine-desciption-all">
            <div class="div-block-335">
                <div class="div-block-384">
                    <img src="{{ asset('img/Capture-d’écran-2021-03-04-à-12.34.15.png') }}" width="47" class="image-128"></div>
                <div>
                    @if($activities)
                    @if(count($activities)>0)
                    <div>
                        <div class="infos-biz-chaine">
                            <p class="text-block-343"><b style="color:black;">{{$visit->name}}</b> {{__('in outline ...')}}</p>
                        </div>
                        <div class="descrition-biz-chaine">
                            <p class="text-block-330">{{__('WHAT WE DO')}}  &#x1F680; : @foreach($activities as $activity) <br> - {{$activity->text}} @endforeach</p>
                        </div>
                        @if($edit)
                        <a class="btn btn-default" style="text-decoration:none;margin-left:-15px" href="{{route('activities.create')}}" alt="">&#x267B; {{__('Refresh')}}</a>
                        @endif
                    </div>
                    @else
                    <div>
                        <div class="infos-biz-chaine">
                            <p class="text-block-343"><b style="color:black;">{{$visit->name}}</b>{{__('')}} la pour vous &#x1F60E; ...</p>
                        </div>
                    </div>
                    @endif

                    @endif
                </div>
            </div>
        </div>
    </div>
    @if($contact)
    <div class="coordonne">
        <div class="text-block-331"><a href="" class="link-25">Contact</a></div> <br>
        <p class="text-block-331"> <span style="text-decoration:underline">{{__('')}}Adresse</span><br>N° voie : {{$contact->adresse}}<br>Code postale : {{$contact->code_postale}}<br> Ville : {{$contact->ville}} <br>Pays : {{$contact->pays}}</p>
        <p class="text-block-332" style="text-decoration:underline">{{__('')}}Site web : {{$contact->site_web}}<br></p>
        <p class="text-block-339" style="text-decoration:underline">{{__('')}}Horaire d&#x27;ouverture : 08h30 - 18H00<br>‍</p>

        @if($edit)
            @if(!$contact)
            <a class="btn btn-default" style="text-decoration:none;margin-left:-15px" href="{{route('contacts.create')}}" alt="">&#x267B; {{__('Refresh')}}</a>
            @else
            <a class="btn btn-default" style="text-decoration:none;margin-left:-15px" href="{{route('contacts.edit', $contact->id)}}" alt="">&#x267B; {{__('Refresh')}}</a>
            @endif
        @endif
    </div>
    @endif
    @php $bool = false; @endphp
    <div class="derniersNouvelles">
        <p class="text-Playlist">{{__('The videos that have been viewed the most ...')}}</p>
        <div class="swiper-container swipeContainermodife1">
            <div class="swiper-wrapper">
                @foreach($videos_top as $video)
                @if($video->views > 200)
                @php
                    $bool = true;
                    $top = App\Models\Video::find($video->video_id);
                    $user = App\User::find($top->user_id);
                    $channel = DB::Table('users')->select('channels.*')
                                        ->join('channels', 'users.id', 'channels.user_id')
                                        ->where('users.id', $top->user_id)
                                        ->first();
                @endphp
                <div class=" swiper-slide card-suggestionDay">
                    <div class="elementCardSuggestionDay">

                        @if($top->thumbnail)
                            <img class="imgElementCardSuggestionDay" src="{{ asset('vids/thumbnails/') }}/{{$top->thumbnail}}" alt="">
                        @elseif($user->age <= 15)
                            <img class="imgElementCardSuggestionDay" src="{{asset('images/kids_preloader.png')}}" alt="">
                        @elseif($user->age > 15 && $user->sex == '1')
                            <img class="imgElementCardSuggestionDay" src="{{asset('images/flow_preloader.png')}}" alt=""/>
                        @elseif($user->age > 15 && $user->sex == '0')
                            <img class="imgElementCardSuggestionDay" src="{{asset('images/sista_preloader.png')}}" alt="">
                        @endif
                        <img class="imgElementCardSuggestionDay" src="{{ asset('img/card1.png') }}" alt="">
                        <div class="contentFlyHeure">
                            <p class="flyText">
                                @foreach($subtopics as $subtopic)
                                    @if($top->subtopic_id == $subtopic->id)
                                        {{ $subtopic->libelle }}
                                    @endif
                                @endforeach
                            </p>
                            <p class="heureFly" style="color:white;">{{$top->duration}}</p>
                        </div>
                    </div>
                    <div class="contentCardSuggestionDay">
                        <div class="d-flex justify-content-between">
                            <p class="libertiText">{{$top->main_title}}</p>
                            <img class="imgLiberti" src="{{ asset('img/icones/Mu-badge22.png') }}" alt="">
                        </div>
                        <div class="mindCard">
                            <div class="blockImgMind">
                                <img class="" src="{{ asset('img/mid1.png') }}" alt="">
                            </div>
                            <div class="block3">
                                <a href="{{route('channel.visitor', $channel->id)}}" style="color:#333333" class="nameAuteur contentweb azer">{{$channel->name}}</a>

                                @if(intval(abs(strtotime("now") - strtotime($top->created_at))/ 86400) == 0)
                                @if(intval(abs(strtotime("now") - strtotime($top->created_at))/ 3600) > 0)
                                <p class="day">Published {{intval(abs(strtotime("now") - strtotime($top->created_at))/3600)}} hours ago </p>
                                @else(intval(abs(strtotime("now") - strtotime($top->created_at))/ 3600) == 0)
                                <p class="day">Published {{intval(abs(strtotime("now") - strtotime($top->created_at))/60)}} minutes ago </p>
                                @endif
                                @elseif(intval(abs(strtotime("now") - strtotime($top->created_at))/ 86400) == 1)
                                <p class="day">Published yesterday at {{strftime("%H:%M", strtotime($top->created_at))}}</p>
                                @elseif(intval(abs(strtotime("now") - strtotime($top->created_at))/ 86400) >= 2 && intval(abs(strtotime("now") - strtotime($top->created_at))/ 86400) <= 27)
                                <p class="day"> Published {{intval(abs(strtotime("now") - strtotime($top->created_at))/ 86400)}} days ago </p>
                                @else(intval(abs(strtotime("now") - strtotime($top->created_at))/ 86400) > 27)
                                <p class="day">Published on {{strftime("%d/%m/%Y", strtotime($top->created_at))}}</p>
                                @endif

                                <!--
                                    <div class="d-flex justify-content-between">
                                        <p class="numberviewsSuggestion">1230</p>
                                        <img class="oeil-1" src="{{ asset('img/icones/oeil-1.png') }}" alt="">
                                    </div>
                                -->
                            </div>
                        </div>
                    </div>
                </div>
                @endif
                @endforeach
               @if(!$bool) {{__('No videos can be uploaded for this channel at this time')}} &#x1F625;  @endif
            </div>
        </div>
    </div>
    <div id="Offre-business" class="offre-de-la-chaine">
        <p class="text-block-342">Les offres</p>
        <div class="div-block-319">
            <div class="div-block-318">
                <div>
                    <img src="{{ asset('img/Nuage-rose.png') }}" width="52" alt=""></div>
                <p class="text-block-320">{{__('Product name')}} / Formation</p>
                <a href="#" class="link-block-38 w-inline-block">
                    <div class="text-block-319">{{__('Discover')}}</div>
                </a>
            </div>
            <div class="div-block-318">
                <div>
                    <img src="{{ asset('img/Nuage-rose.png') }}" width="52"></div>
                <p class="text-block-320">{{__('Product name')}} ...</p>
                <a href="#" class="link-block-38 w-inline-block">
                    <div class="text-block-319">{{__('Discover')}}</div>
                </a>
            </div>
            <div class="div-block-318">
                <div><img src="{{ asset('img/Nuage-rose.png') }}" width="52"></div>
                <p class="text-block-320">{{__('Product name')}}...</p>
                <a href="#" class="link-block-38 w-inline-block">
                    <div class="text-block-319">{{__('Discover')}}</div>
                </a>
            </div>
        </div>
        <div class="block319Mob">
            <div class="swiper-container swiper-shop">
                <div class="swiper-wrapper">
                    <div class="swiper-slide swipeslideShop">
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
    <div class="">
        <div class="playlist2">
            <p class="text-Playlist">{{__('MY')}} playlist ...</p>
            @php     
                $playlists = DB::Table('playlists')->select('videos.*')
                ->join('videos', 'videos.id', 'playlists.video_id')
                ->whereNull('playlists.deleted_at')
                ->where('playlists.user_id', $visit->user_id)
                ->get();  
            @endphp

            <div class="swiper-container swipeContainermodife1">
                <div class="swiper-wrapper">
                @foreach($playlists as $playlist)
                <div class="swiper-slide card-suggestionDay">
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
                        <a href="{{route('play',[$playlist->id])}}" style="text-decoration:none" target="" class="contentFlyHeure">
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
                           <a href="{{route('play', $playlist->id)}}"  style="text-decoration:none" class="libertiText">{{$playlist->main_title}}</a>
                            <img class="imgLiberti" src="{{ asset('img/icones/Mu-badge22.png') }}" alt="">
                        </div>
                        <div class="mindCard">
                            <div class="blockImgMind">
                                @if($user->photo)
                                <a href="{{route('play',[$playlist->id])}}"> <img class="" src="{{ asset('/img') }}/{{$user->photo}}" alt=""> </a>
                                @elseif($user->age <= 15)
                                <a href="{{route('play',[$playlist->id])}}"> <img class="" src="{{asset('images/kids_preloader.png')}}" alt=""> </a>
                                @elseif($user->age > 15 && $user->sex == '1')
                                <a href="{{route('play',[$playlist->id])}}"> <img class="img-circle" src="{{asset('images/flow_preloader.png')}}" alt=""/> </a>
                                @elseif($user->age > 15 && $user->sex == '0')
                                <a href="{{route('play',[$playlist->id])}}"> <img class="" src="{{asset('images/sista_preloader.png')}}" alt=""> </a>
                                @endif
                            </div>
                            <div class="block3">
                                @php
                                    $channel = DB::Table('users')->select('channels.*')
                                        ->join('channels', 'users.id', 'channels.user_id')
                                        ->where('users.id', $playlist->user_id)
                                        ->first();
                                @endphp
                                <a href="{{route('channel.visitor', $channel->id)}}" style="color:#333333" class="nameAuteur contentweb azer">{{$channel->name}}</a>
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
                                <!--
                                    <div class="d-flex justify-content-between">
                                        <p class="numberviewsSuggestion">1230</p>
                                        <img class="oeil-1" src="{{ asset('img/icones/oeil-1.png') }}" alt="">
                                    </div>
                                -->
                            </div>

                                <!-- <div class="d-flex justify-content-between blockPlayist" >
                                    <p class="numberviewsSuggestion"> </p>
                                    <a  href="{{route('playlist.remove', $playlist->id)}}" data-toggle="tooltip" data-placement="top" title="Remove to my playlist"><img src="{{ asset('img/report-Orange.svg') }}"  alt="Remove to my playlist"></a>
                                </div> -->
                        </div>
                    </div>
                </div>
                @endforeach
                </div>
            </div>
        </div>
        <div class="playlist2">
            <p class="text-Playlist">{{__('Latest news')}}</p>
            <div class="swiper-container swipeContainermodife1">
                <div class="swiper-wrapper">
                    @foreach($videos as $video)
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
                                        <a href="{{route('channel.visitor', $channel->id)}}" style="color:#333333" class="nameAuteur contentweb azer">{{$channel->name}}</a>
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
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


@section('scripts')
<script src="{{asset('swiper/swiper-bundle.min.js')}}"></script>
<script>
    var swiper = new Swiper('.swipeContainermodife1', {
        slidesPerView: 3,
        spaceBetween: 30
    });
</script>
<script>
    var swiper = new Swiper('.swiper-Infos', {
        slidesPerView: 3,
        spaceBetween: 30
    });
</script>
<script>
    var swiper = new Swiper('.swiper-shop', {
        slidesPerView: 1.5,
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
@endsection
@section('scripts')

@endsection

