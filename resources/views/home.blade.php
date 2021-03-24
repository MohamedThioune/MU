@extends('layouts.sidbarNavigation')
<head>
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
<!--
@php
    $signals = DB::Table('reports')->select('*')
                               ->where('reports.user_id', Auth::id())
                               ->get();
@endphp-->
<div class="contentOneMonFlow">
    <div class="pub-bando-connect">
        <div class="info-pub-bando">
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
            <div class="like-notication">
                <button class="btn btnNote">
                    <img src="Image-5.png" alt="">
                </button>
                <button class="btn btnNote">
                    <img src="Image-6.png" alt="">
                </button>
            </div>
        </div>
        <div class="imgPubBlock">
            <img src="" alt="">
        </div>
    </div>
    <p class="text-block-350">Tous tes informations en un clin d'œil </p>
    <div class="menu-content-business">
        <a href="#" class="link-26">Infos</a>
        <a href="#" class="link-26">Récents</a>
        <a href="#" class="link-26">Toutes les videos</a>
        <a href="#" class="link-26">Offres</a>
        <a href="#" class="link-26">Playlist</a>
    </div>
    <div class="derniersNouvelles">
        <div class="d-flex">
            <img src="{{ asset('img/Mu-flow-picto-bull.svg') }}"  alt="" class="image-bull1">
            <p class="text-Playlist">Hot notifications</p>
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
                        <div class="contentFlyHeure">
                            <p class="flyText">
                            @foreach($subtopics as $subtopic)
                                @if($video->subtopic_id == $subtopic->id)
                                    {{ $subtopic->libelle }}
                                @endif
                            @endforeach
                            </p>
                            <p class="heureFly" style="color:white;">{{$video->duration}}</p>
                        </div>
                    </div>
                    <div class="contentCardSuggestionDay">
                        <div class="d-flex justify-content-between">
                            <p class="libertiText">{{$video->main_title}}</p>
                            <img class="imgLiberti" src="{{ asset('img/icones/Mu-badge22.png') }}" alt="">
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
                                <!--                                     <div class="d-flex justify-content-between">
                                                                                <p class="numberviewsSuggestion">1230</p>
                                                                                <img class="oeil-1" src="{{ asset('img/icones/oeil-1.png') }}" alt="">

                                                                            </div>
                                                    -->                                        </div>
                        </div>
                    </div>
                </div>
                @foreach($events as $event)
                <div class=" swiper-slide hot-notification">
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
                                <p class="text-block-384">{{$event->text}}</p>
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
                @endforeach
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
                            <img class="imgElementCardSuggestionDay" src="{{ asset('vids/thumbnails/') }}/{{$video->thumbnail}}" alt="">
                        @elseif($user->age <= 15)
                            <img class="imgElementCardSuggestionDay" src="{{asset('images/kids_preloader.png')}}" alt="">
                        @elseif($user->age > 15 && $user->sex == '1')
                            <img class="imgElementCardSuggestionDay" src="{{asset('images/flow_preloader.png')}}" alt=""/>
                        @elseif($user->age > 15 && $user->sex == '0')
                            <img class="imgElementCardSuggestionDay" src="{{asset('images/sista_preloader.png')}}" alt="">
                        @endif                        
                        <div class="contentFlyHeure">
                            <p class="flyText">
                            @foreach($subtopics as $subtopic)
                                @if($video->subtopic_id == $subtopic->id)
                                    {{ $subtopic->libelle }}
                                @endif
                            @endforeach
                            </p>
                            <p class="heureFly" style="color:white;">{{$video->duration}}</p>
                        </div>
                    </div>
                    <div class="contentCardSuggestionDay">
                        <div class="d-flex justify-content-between">
                            <p class="libertiText">{{$video->main_title}}</p>
                            <img class="imgLiberti" src="{{ asset('img/icones/Mu-badge22.png') }}" alt="">
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
    <div class="chaine-vu">
        <div>
            @php $user = App\User::find($channel_top->user_id); @endphp
            <p class="text-block-353-copy">Voilà la chaîne la plus consultée en ce moment ...</p>
        </div>
        <div class="div-block-367">
            <div class="bull-chaine">
                @if($channel_top->logo)
                    <img class="image-125" src="{{ asset('/images/uploads') }}/{{$channel->photo}}" alt="">
                @elseif($user->age <= 15)
                <img class="image-125" src="{{asset('images/kids_preloader.png')}}" alt="">
                @elseif($user->age > 15 && $user->sex == '1')
                <img class="image-125" src="{{asset('images/flow_preloader.png')}}" alt=""/>
                @elseif($user->age > 15 && $user->sex == '0')
                <img class="image-125" src="{{asset('images/sista_preloader.png')}}" alt="">
                @endif
            </div>
            <div class="div-block-368">
                <p class="text-block-362">{{$channel_top->name}}</p>
                <div class="div-block-371">
                    <p class="text-block-363">{{\App\Models\Channel::find($channel->id)->abonnees->count()}}</p>
                    <p class="text-block-345">Abonnés</p>
                </div>
                <p class="text-block-364">{{$videos_count}} Publications</p>
                <div class="text-block-366">
                    <a href="{{route('channel.visitor', $channel_top->id)}}" class="link-28">Voir la chaîne</a>
                </div>
            </div>
            <div class="back-subscrib-bar">
                <div class="chaine">
                    <a href="#" class="link-block-40 w-inline-block">
                        <div class="div-block-386">
                            <img src="{{ asset('img/Mu-coeur-blanc.svg') }}" class="imgCoeurBlanc" width="23" alt="">
                        </div>
                        <a class="text-block-380" style="color:white; background: #F57409; padding:5px 0;" href="{{ route('suscribe',$channel_top->id) }}"><div>S&#x27;abonner</div></a>
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
                    <a href="#" class="link-block-41 w-inline-block">
                        <div>Soutenir</div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div id="event" class="big-event">
        <p class="text-block-353-copy">Les prochains événements </p>
        <div class="div-block-375">
            <div class="div-block-373">
                <div class="div-block-372">
                    <img src="{{ asset('img/Groupe-9262x.png') }}"  alt="" class="img127">
                </div>
                <div class="div-block-374">
                    <div class="date-indicator">
                        <p class="text-block-371">mois</p>
                        <p class="text-block-373">jours</p>
                    </div>
                    <div>
                        <div class="div-block-376">
                            <div class="div-block-378">
                                <p class="text-block-368">Ramadan</p>
                                <p class="text-block-374">dans </p>
                            </div>
                            <div class="div-block-377">
                                <p class="text-block-370">1</p>
                                <p class="text-block-372">15</p>
                            </div>
                        </div>
                        <div class="div-block-376">
                            <div class="div-block-379">
                                <p class="text-block-368">Aïd el fitre</p>
                                <p class="text-block-375">dans </p>
                            </div>
                            <div class="div-block-377">
                                <p class="text-block-370">2</p>
                                <p class="text-block-372">15</p>
                            </div>
                        </div>
                        <div class="div-block-376">
                            <div class="div-block-380">
                                <p class="text-block-368">Hajj</p>
                                <p class="text-block-376">dans </p>
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
    <div id="resume" class="resume-flow">
        <div class="div-block-343">
            <div class="div-block-352">
                <div class="resume-activitee">
                    <p class="text-block-353-copy">Ce mois</p>
                    <div class="nombre-de">
                        <p class="text-block-351">Vidéos regardées</p>
                        <div class="div-block-344">
                            <div class="div-block-345">
                                <p class="text-block-352">{{count($look_videos)}}</p>
                            </div>
                            <div class="div-block-347">
                                <img src="{{ asset('img/Mu-video-regarder2x.png') }}" class="imgRegarde" width="61" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="nombre-de">
                        <p class="text-block-351">Vidéos aimées</p>
                        <div class="div-block-344">
                            <div class="div-block-345">
                                <p class="text-block-352">45 </p>
                            </div>
                            <div class="div-block-348">
                                <img src="{{ asset('img/Mu-video-likee2x.png') }}" class="imgVideoLike"  alt=""></div>
                        </div>
                    </div>
                    <div class="nombre-de">
                        <p class="text-block-351">Vidéos partagées</p>
                        <div class="div-block-344">
                            <div class="div-block-345">
                                <p class="text-block-352">18 </p>
                            </div>
                            <div class="div-block-349">
                                <img src="{{ asset('img/Mu-nbr-de-partage2x.png') }}" class="imgVideoLike" alt=""></div>
                        </div>
                    </div>
                    <div class="nombre-de">
                        <p class="text-block-351">Sadakatiyas supportées</p>
                        <div class="div-block-344">
                            <div class="div-block-345">
                                <p class="text-block-352">3</p>
                            </div>
                            <div class="div-block-350">
                                <img src="{{ asset('img/Mu-sadaka-support2x.png') }}" class="imgVideoLike" alt=""></div>
                        </div>
                    </div>
                    <div class="nombre-de">
                        <p class="text-block-351">Chaines suivies</p>
                        <div class="div-block-344">
                            <div class="div-block-345">
                                <p class="text-block-352">16 </p>
                            </div>
                            <div class="div-block-351">
                                <img src="{{ asset('img/Mu-chaine-follow-gris2x.png') }}"  class="imgVideoLike"></div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="time-mon-flow">
                        <div class="div-block-342"><img src="{{ asset('img/Time-shahid.svg') }}"  alt="" class="shadid103"></div>
                        <div class="div-block-341">
                            <p class="text-block-290">Time shahid</p>
                            <p class="temps-tsha">1h 25 mn</p>
                            <p class="text-block-329">6 Rajab 1663</p>
                        </div>
                    </div>
                    <div class="div-block-364">
                        <div class="div-block-354">
                            <p class="text-block-354">In sha Allah</p>
                            <p class="div-block-353"></p>
                        </div>
                        <div class="div-block-354">
                            <p class="text-block-355">Din</p>
                            <div class="div-block-355"></div>
                        </div>
                        <div class="div-block-354">
                            <p class="text-block-356">Business</p>
                            <div class="div-block-356"></div>
                        </div>
                        <div class="div-block-354">
                            <p class="text-block-357">Santé bien-être</p>
                            <div class="div-block-357"></div>
                        </div>
                        <div class="div-block-354">
                            <p class="text-block-358">Education</p>
                            <div class="div-block-358"></div>
                        </div>
                        <div class="div-block-354">
                            <p class="text-block-359">Sport Fit</p>
                            <div class="div-block-359"></div>
                        </div>
                        <div class="div-block-354">
                            <p class="text-block-360">News</p>
                            <div class="div-block-360"></div>
                        </div>
                        <div class="div-block-354">
                            <p class="text-block-367">Life</p>
                            <div class="div-block-361"></div>
                        </div>
                        <div class="div-block-354">
                            <p class="text-block-361">Tech et science</p>
                            <div class="div-block-363"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
            loop: false,
            //autoplay: 6500,
            autoplayDisableOnInteraction: false,

            keyboardControl: true,
            mousewheelControl: true,
            paginationClickable: true,

        });
    }
</script>
<script src="{{asset('js/fixeElement.js')}}"></script>
@endsection
</body>
