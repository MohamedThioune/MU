@extends('layouts.sidbarNavigation')
<html lang="fr">
<head>
    @section('css')
    <link rel="stylesheet" href="node_modules/swiper/swiper.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="{{asset('css/menu.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.css" integrity="sha512-phGxLIsvHFArdI7IyLjv14dchvbVkEDaH95efvAae/y2exeWBQCQDpNFbOTdV1p4/pIa/XtbuDCnfhDEIXhvGQ==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    @endsection
    @php if(isset($_COOKIE['lang'])) App::setLocale($_COOKIE['lang']); @endphp
</head>
<body>


@section('content-play-element')
<div class="d-block">
<div class="elementFixedMobie">
    <!--    <div class="content-home">
        <div class="content-naveBar">
            <nav class="navbar navbar-expand-lg navModife">
                <button class="groupPointNav btnMenue1">
                    <img class="pointsRose" src="{{ asset('img/icones/troispoints.svg') }}" alt="">
                    <div class="muu d-flex">
                        <img class="flecheMuu" src="{{ asset('img/icones/fleche.svg') }}" alt="">
                        <p class="muuText">mmmuuu</p>
                    </div>
                </button>
                <button class="btnMenue ">
                    <div class="d-flex">
                        <div class="PointMenu ">
                            <div class="onePoint"></div>
                            <div class="onePoint"></div>
                        </div>
                        <div class="PointMenu">
                            <div class="onePoint"></div>
                            <div class="onePoint"></div>
                        </div>
                    </div>

                </button>
                <a class="navbar-brand elementLogo" href="#">
                    <img src="{{ asset('img/logo-MU.png') }}" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>


                <div class="content-Menu menue1">
                    <form class="form-inline2 d-flex position-relative">
                        <input class="form-control mr-sm-2 searchNav2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn searchButtonMenue" type="submit">
                            <img src="{{ asset('img/icones/search.png') }}" alt="">
                        </button>
                    </form>
                    <div class="sousMenuGlobale1">
                        <div class="contentElementLeft">
                            <div class="blockItem">
                                <img class="iconeMenue" src="{{ asset('img/icones/login.svg') }}" alt="">
                                <p class="NameElementMenue">Profil</p>
                                <img src="{{ asset('img/icones/fleche.svg') }}" alt="" class="iconeFleche">
                            </div>
                            <div class="blockItem">
                                <div class="iconeMenue2"><img src="{{ asset('img/icones/time-shahid.png') }}" alt=""></div>
                                <p class="NameElementMenue">Time shahid</p>
                                <img src="{{ asset('img/icones/fleche.svg') }}" alt="" class="iconeFleche">
                            </div>
                            <div class="blockItem">
                                <img class="iconeMenue" src="{{ asset('img/icones/settings.svg') }}" alt="">
                                <p class="NameElementMenue">Setting</p>
                                <img src="{{ asset('img/icones/fleche.svg') }}" alt="" class="iconeFleche">
                            </div>
                            <div class="blockItem">
                                <img class="iconeMenue" src="{{ asset('img/icones/published.svg') }}" alt="">
                                <p class="NameElementMenue">Published</p>
                                <img src="{{ asset('img/icones/fleche.svg') }}" alt="" class="iconeFleche">
                            </div>
                            <div class="blockItem">
                                <img class="iconeMenue" src="{{ asset('img/icones/alerte.svg') }}" alt="">
                                <p class="NameElementMenue">Alerte</p>
                                <img src="{{ asset('img/icones/fleche.svg') }}" alt="" class="iconeFleche">
                            </div>

                        </div>

                        <div class="contentElementRight">
                            <div class="categorieProfil">
                                <div class="block1">
                                    <button class="btn btnCat colorElement">Cat1</button>
                                    <p class="sousCategorie colorElement">Cat 1.1</p>
                                    <p class="sousCategorie colorElement">Cat 1.2</p>
                                    <p class="sousCategorie colorElement">Cat 1.3</p>
                                    <p class="sousCategorie colorElement">Cat 1.4</p>
                                    <p class="sousCategorie colorElement">Cat 1.5</p>
                                    <p class="sousCategorie colorElement">Cat 1.6</p>
                                </div>
                            </div>
                            <div class="categorieProfil">
                                <div class="block1">
                                    <button class="btn btnCat">Cat2</button>
                                    <p class="sousCategorie">Cat 2.1</p>
                                    <p class="sousCategorie">Cat 2.2</p>
                                    <p class="sousCategorie">Cat 2.3</p>
                                    <p class="sousCategorie">Cat 2.4</p>
                                    <p class="sousCategorie">Cat 2.5</p>
                                    <p class="sousCategorie">Cat 2.6</p>
                                </div>
                            </div>
                            <div class="categorieProfil">
                                <div class="block1">
                                    <button class="btn btnCat">Cat3</button>
                                    <p class="sousCategorie">Cat 3.1</p>
                                    <p class="sousCategorie">Cat 3.2</p>
                                    <p class="sousCategorie">Cat 3.3</p>
                                    <p class="sousCategorie">Cat 3.4</p>
                                    <p class="sousCategorie">Cat 3.5</p>
                                    <p class="sousCategorie">Cat 3.6</p>
                                </div>
                            </div>
                            <div class="categorieProfil">
                                <div class="block1">
                                    <button class="btn btnCat">Cat4</button>
                                    <p class="sousCategorie">Cat 4.1</p>
                                    <p class="sousCategorie">Cat 4.2</p>
                                    <p class="sousCategorie">Cat 4.3</p>
                                    <p class="sousCategorie">Cat 4.4</p>
                                    <p class="sousCategorie">Cat 4.5</p>
                                    <p class="sousCategorie">Cat 4.6</p>
                                </div>
                            </div>
                            <div class="categorieProfil">
                                <div class="block1">
                                    <button class="btn btnCat">Cat5</button>
                                    <p class="sousCategorie">Cat 5.1</p>
                                    <p class="sousCategorie">Cat 5.2</p>
                                    <p class="sousCategorie">Cat 5.3</p>
                                    <p class="sousCategorie">Cat 5.4</p>
                                    <p class="sousCategorie">Cat 5.5</p>
                                    <p class="sousCategorie">Cat 5.6</p>
                                </div>
                            </div>
                            <div class="categorieProfil">
                                <div class="block1">
                                    <button class="btn btnCat">Cat6</button>
                                    <p class="sousCategorie">Cat 6.1</p>
                                    <p class="sousCategorie">Cat 6.2</p>
                                    <p class="sousCategorie">Cat 6.3</p>
                                    <p class="sousCategorie">Cat 6.4</p>
                                    <p class="sousCategorie">Cat 6.5</p>
                                    <p class="sousCategorie">Cat 6.6</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="categorie row">
                        <div class="contentButtonCategorie">
                            <button class="btn btnCategorie flow">Flow</button>
                            <button class="btn btnCategorie kids">Kids</button>
                            <button class="btn btnCategorie sista">Sista’s</button>
                        </div>
                        <div class="contentSousMenueCategorie sousCategorieFlow">
                            <p class="textSousCategorie">Life / Art</p>
                            <p class="textSousCategorie">Business</p>
                            <p class="textSousCategorie">Education</p>
                            <p class="textSousCategorie">Health / Wellness</p>
                            <p class="textSousCategorie">Food</p>
                            <p class="textSousCategorie">Sport / Gaming</p>
                        </div>
                        <div class="contentElementRight">
                            <div class="categorieProfil">
                                <div class="block1">
                                    <button class="btn btnCat colorElement">Cat1</button>
                                    <p class="sousCategorie colorElement">Cat 1.1</p>
                                    <p class="sousCategorie colorElement">Cat 1.2</p>
                                    <p class="sousCategorie colorElement">Cat 1.3</p>
                                    <p class="sousCategorie colorElement">Cat 1.4</p>
                                    <p class="sousCategorie colorElement">Cat 1.5</p>
                                    <p class="sousCategorie colorElement">Cat 1.6</p>
                                </div>
                            </div>
                            <div class="categorieProfil">
                                <div class="block1">
                                    <button class="btn btnCat">Cat2</button>
                                    <p class="sousCategorie">Cat 2.1</p>
                                    <p class="sousCategorie">Cat 2.2</p>
                                    <p class="sousCategorie">Cat 2.3</p>
                                    <p class="sousCategorie">Cat 2.4</p>
                                    <p class="sousCategorie">Cat 2.5</p>
                                    <p class="sousCategorie">Cat 2.6</p>
                                </div>
                            </div>
                            <div class="categorieProfil">
                                <div class="block1">
                                    <button class="btn btnCat">Cat3</button>
                                    <p class="sousCategorie">Cat 3.1</p>
                                    <p class="sousCategorie">Cat 3.2</p>
                                    <p class="sousCategorie">Cat 3.3</p>
                                    <p class="sousCategorie">Cat 3.4</p>
                                    <p class="sousCategorie">Cat 3.5</p>
                                    <p class="sousCategorie">Cat 3.6</p>
                                </div>
                            </div>
                            <div class="categorieProfil">
                                <div class="block1">
                                    <button class="btn btnCat">Cat4</button>
                                    <p class="sousCategorie">Cat 4.1</p>
                                    <p class="sousCategorie">Cat 4.2</p>
                                    <p class="sousCategorie">Cat 4.3</p>
                                    <p class="sousCategorie">Cat 4.4</p>
                                    <p class="sousCategorie">Cat 4.5</p>
                                    <p class="sousCategorie">Cat 4.6</p>
                                </div>
                            </div>
                            <div class="categorieProfil">
                                <div class="block1">
                                    <button class="btn btnCat">Cat5</button>
                                    <p class="sousCategorie">Cat 5.1</p>
                                    <p class="sousCategorie">Cat 5.2</p>
                                    <p class="sousCategorie">Cat 5.3</p>
                                    <p class="sousCategorie">Cat 5.4</p>
                                    <p class="sousCategorie">Cat 5.5</p>
                                    <p class="sousCategorie">Cat 5.6</p>
                                </div>
                            </div>
                            <div class="categorieProfil">
                                <div class="block1">
                                    <button class="btn btnCat">Cat6</button>
                                    <p class="sousCategorie">Cat 6.1</p>
                                    <p class="sousCategorie">Cat 6.2</p>
                                    <p class="sousCategorie">Cat 6.3</p>
                                    <p class="sousCategorie">Cat 6.4</p>
                                    <p class="sousCategorie">Cat 6.5</p>
                                    <p class="sousCategorie">Cat 6.6</p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="categorie row">
                        <div class="contentButtonCategorie">
                            <button class="btn btnCategorie flow">Flow</button>
                            <button class="btn btnCategorie kids">Kids</button>
                            <button class="btn btnCategorie sista">Sista’s</button>
                        </div>
                        <div class="contentSousMenueCategorie sousCategorieFlow">
                            <p class="textSousCategorie">Life / Art</p>
                            <p class="textSousCategorie">Business</p>
                            <p class="textSousCategorie">Education</p>
                            <p class="textSousCategorie">Health / Wellness</p>
                            <p class="textSousCategorie">Food</p>
                            <p class="textSousCategorie">Sport / Gaming</p>
                        </div>

                    </div>
                </div>


                <form class="form-inline position-relative">
                    <input class="form-control mr-sm-2 searchNav" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn searchButton" type="submit">
                        <img src="{{ asset('img/icones/search.png') }}" alt="">
                    </button>
                </form>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        @if(Auth::guest())
                        <li class="nav-item nav-modife">
                            <a href="{{route('register')}}" class="btnCommunaute">Rejoindre la communauté</a>
                        </li>
                        <li class="nav-item nav-modife">
                            <img src="{{ asset('img/icones/login.svg') }}" alt="">
                            <a class="nav-link" href="{{route('login')}}">Log in</a>
                        </li>
                        @else
                        <li class="nav-item nav-modife">
                            @if(Auth::user()->timeout)
                            @if(intval(abs(strtotime("now") - strtotime(Auth::user()->timeout))/ 86400) == 0)
                            @if(intval(abs(strtotime("now") - strtotime(Auth::user()->timeout))/ 3600) > 0)
                            <p class="day" style="font-size:18px; color:white">Last login - <span style="color:#c22d84">{{intval(abs(strtotime("now") - strtotime(Auth::user()->timeout))/3600)}} hours ago</span></p>
                            @else(intval(abs(strtotime("now") - strtotime(Auth::user()->timeout))/ 3600) == 0)
                            <p class="day"style="font-size:18px; color:white">Last login - <span style="color:#c22d84">{{intval(abs(strtotime("now") - strtotime(Auth::user()->timeout))/60)}} minutes ago</span></p>
                            @endif
                            @elseif(intval(abs(strtotime("now") - strtotime(Auth::user()->timeout))/ 86400) == 1)
                            <p class="day" style="font-size:18px; color:white">Last login - <span style="color:#c22d84">Yesterday at {{strftime("%H:%M", strtotime(Auth::user()->timeout))}}</span></p>
                            @elseif(intval(abs(strtotime("now") - strtotime(Auth::user()->timeout))/ 86400) >= 2 && intval(abs(strtotime("now") - strtotime(Auth::user()->timeout))/ 86400) <= 27)
                            <p class="day"style="font-size:18px; color:white">Last login - <span style="color:#c22d84">{{intval(abs(strtotime("now") - strtotime(Auth::user()->timeout))/ 86400)}} days ago</span></p>
                            @else(intval(abs(strtotime("now") - strtotime(Auth::user()->timeout))/ 86400) > 27)
                            <p class="day" style="font-size:18px; color:white">Last login - <span style="color:#c22d84">On {{strftime("%d/%m/%Y", strtotime(Auth::user()->timeout))}}</span></p>
                            @endif
                            @else
                            <p class="day" style="font-size:18px; color:#f4de39">WELCOME <span style="color:white"> TO</span> <span style="color:#c22d84"> MU</span></p>
                            @endif
                        </li>
                        <li class="nav-item nav-modife">

                            @if(!session('profile'))
                            <span class="btnCommunaute" style="background:none; box-shadow: 4px 4px 15px white;font-weight:bold">
                                             @php
                                                $profile = DB::Table('users')->select('profile.*')
                                                                             ->join('profile', 'users.id', 'profile.user_id')
                                                                             ->where('users.id', Auth::id())
                                                                             ->first();

                                                echo $profile->name;
                                             @endphp
                                             &nbsp;&nbsp;
                                            <a style="color:white;font-size:19px;" href="{{route('choose')}}"><i class="fas fa-caret-down"></i></a>
                                        </span>
                            @elseif(session('profile')["age"] <= 15)
                            <span class="btnCommunaute" style="background:none; box-shadow: 4px 4px 15px #e9d22e;font-weight:bold"> {{session('profile')["name"]}} &nbsp;&nbsp;<a style="color:#e9d22e;font-size:19px;" href="{{route('choose')}}"><i class="fas fa-caret-down"></i></a></span>
                            @elseif(session('profile')["age"] > 15 && session('profile')["sex"] == '1')
                            <span class="btnCommunaute" style="background:none; box-shadow: 4px 4px 15px #3eacec;font-weight:bold"> {{session('profile')["name"]}} &nbsp;&nbsp;<a href="{{route('choose')}}"><i class="fas fa-caret-down"></i></a></span>
                            @elseif(session('profile')["age"] > 15 && session('profile')["sex"] == '0')
                            <span class="btnCommunaute" style="background:none; box-shadow: 4px 4px 15px #d14f94;font-weight:bold"> {{session('profile')["name"]}} &nbsp;&nbsp;<a style="color:#d14f94;font-size:19px;" href="{{route('choose')}}"><i class="fas fa-caret-down"></i></a><span>
                                        @endif
                        </li>
                        <li class="nav-item nav-modife">
                            <img src="{{ asset('img/icones/login.svg') }}" alt="">
                            <form action="{{ route('logout') }}" class="nav-modife formModife" method="POST">
                                @csrf
                                <button class="nav-link btnLogOut" type="submit" >Log out</button>
                            </form>
                        </li>
                        @endif
                    </ul>
                </div>
            </nav>
            <div class="header2">
                <div class="container-modife">
                    <div class="block2">
                        <p class="textHeader2">mmmuuu</p>
                        <div class="d-flex groupButtonHeader2">
                            <button class="btn btnheader2">Flow</button>
                            <button class="btn btnheader2">Sista’s</button>
                            <button class="btn btnheader2">Kids</button>
                        </div>
                        <img class="setting2" src="{{ asset('img/icones/settings.svg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>-->
    <div class="content-contenue1">
        <div class="contentParDefaut">
            <div class="linearColor"></div>
            <div class="container-fluid position-relative">
                <div class="flexElement1">
                    <div class="fistElement">
                        <div class="videoParDefaut">
                            <video poster="{{ asset('images/sista_preloader.png')}}" class="elementVideoParDefaut" onplay="start()" controls>
                                <source src="{{ asset('vids/uploads')}}/{{session('video')->vid}}" type="video/mp4;charset=UTF-8">
                            </video>
                        </div>
                        <div id="blessings" class="animate__animated animate__bounceInUp" >
                            <center><span style="; background:black; color:white; font-size:1.3em;">👋🏾 Bismillah !</span>
                            <input type="hidden" name="barometer" id="barometer" value="">
                        </div>
                        <div id="prays" class="animate__animated animate__zoomInDown">
                            <center><span style="; background:black; color:white; font-size:1.3em;">Alhamdoulilah &#x1F4FF;!</span></center>                        </div>
                        </div>
                    <div class="secondElement ">
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
                <div class="blockDetail webElement">
                    <div class="sousBlockTitle">
                        <div class="title-groupIcone">
                            <p class="text-title">{{__('Title of the video')}} : {{session('video')->main_title }}</p>
                        </div>
                        <div class="groupLOveUnlove">
                            <div class="blockLoveUnlove">
                                <p class="nbrLove">{{ session('video')->likers()->count() }} </p>
                                <div class="imgCoeur">
                                    <a href="{{ route('likevideo',session('video')->id ) }}">
                                        <img src="{{ asset('img/icones/coeurRose.svg') }}" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="blockLoveUnlove">
                                <div class="imgCoeur">
                                    <a href="{{ route('dislikevideo',session('video')->id )}}">
                                        <img src="{{ asset('img/icones/loveRenverseGris.png') }}" alt="">
                                    </a>
                                </div>
                                <p class="nbrLove">{{ session('video')->unlikes()->count() }}</p>
                            </div>
                            <div class="blockImgPuliMobile">
                                <img src="{{ asset('img/icones/more.png') }}" alt="">
                            </div>
                        </div>
                        @php
                        $months = ['01' => 'Jan', '02' => 'Feb', '03' => 'Mar', '04' => 'Apr', '05' => 'May', '06' => 'Jun', '07' => 'Jul', '08' => 'Aug', '09' => 'Sep', '10' => 'Oct', '11' => 'Nov', '12' => 'Dec' ];
                        @endphp
                        <div class="content12">
                            <p class="datePublication">{{__('Published')}} :&nbsp;{{session('video')->created_at->format('d')}}&nbsp; {{ $months[session('video')->created_at->format('m')]}}. &nbsp;{{session('video')->created_at->format('Y')}} </p>
                            <div class="d-flex textImgView">
                                <p class="nbrView"> {{$reads}}</p>
                                <div class="imgOeil"><img  src="{{ asset('img/icones/oeil.png') }}" alt=""></div>
                            </div>
                        </div>
                    </div>
                    <div class="block-detail-commentaire">
                        <p class="des-text">{{__('Description of my video')}} : <span class="">{{ session('video')->description }}</span>      </p>
                        <p class="des-text">{{__('Objectives of the video')}} : {{ session('video')->motivation }}</p>
                    </div>

                    <div class="blockshareAndComments">
                        @php
                        $reports = DB::Table('reports')
                        ->where('video_id', session('video')->id)
                        ->count();
                        @endphp
                        <div class="blockImgPuli bottomElement">
                            <a href="{!! route('report',[session('video')->id]) !!}">
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
                        <div class=" shopBtn blockImgPuli bottomElement3">
                            <img src="{{ asset('img/panier.png') }}" alt="">
                            <p class="textShare">{{__('Shop')}}</p>
                        </div>
                        <div class="blockImgPuli">
                            <div class="trois-point-noir">...</div>
                        </div>
                    </div>
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
                <div class="blockAuteur webElement">
                    <img class="imgBadge" src="{{ asset('img/icones/Badge.png') }}" alt="">
                    @php
                    $channel = DB::Table('users')->select('channels.*')
                    ->join('channels', 'users.id', 'channels.user_id')
                    ->where('users.id', session('user')->id)
                    ->first();
                    @endphp
                    <div class="elementImgAuteur">
                        <a class="elementImgAuteur" href="{{route('channel.visitor', $channel->id)}}"class="nameAuteur contentweb">
                            @if($channel->logo)
                            <img class="" src="{{ asset('/img/') }}/{{$channel->logo}}" alt="">
                            @elseif(session('user')->age <= 15)
                            <img class="" src="{{asset('images/kids_preloader.png')}}" alt="">
                            @elseif(session('user')->age > 15 && session('user')->sex == '1')
                            <img class="img-circle" src="{{asset('images/flow_preloader.png')}}" alt=""/>
                            @elseif(session('user')->age > 15 && session('user')->sex == '0')
                            <img class="" src="{{asset('images/sista_preloader.png')}}" alt="">
                            @endif
                        </a>
                    </div>

                    <a href="{{route('channel.visitor', $channel->id)}}" style="color:#333333" class="nameAuteur contentweb">{{$channel->name}}</a>
                    <p class="nbreAbonnees contentweb"> {{\App\Models\Channel::find($channel->id)->abonnees->count()}} {{__('Subscribers')}}</p>
                    <div class="contentMobile">
                        <p class="nameAuteur">{{$channel->name}}</p>
                    <!-- <p class="nbreAbonnees"> {{\App\Models\Channel::find($channel->id)->abonnees->count()}} Abonnes</p>  -->
                    </div>
                    <div class="elementBtnSouscrire">
                        <a href="{{ route('suscribe',$channel->id) }}" class="btn btnSubscribe">{{__('Subscribe')}} <button class="btn btnClocheNot">
                                <img src="{{ asset('img/Mu-cloche-blanc.png') }}" class="imgClocheAbonne" alt="">
                            </button></a>
                    </div>
                </div>
                <div class="mobMobile">
                    <div class="publicite">
                        <div class="seed-Block">
                            <p class="seedText">{{__('See the Ad')}}</p>
                        </div>
                        <img src="{{ asset('img/publicite.png') }}" alt="">
                    </div>
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
                    <div class="">
                        <p class="textTimeShalied">Time Shahid</p>
                        @php $shahid = explode(":",$shahid); if($shahid[0] == "00") $shahid[0] = "0"; @endphp
                        <p class="timeSh">{{$shahid[0]}}h {{$shahid[1]}} mn</p>
                        <p class="calendar">{{$hijri_day}} {{$hijri_month}} {{$hijri_year}} - <span>{{$gregorian}}</span></p>
                    </div>
                @if($looks > 0)
                    <div class="elementBarreText" style="transform: rotate(-180deg); height:50px; margin-top:40px">

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
                                        ->where('main_topics.id', 6)
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
                                        ->where('main_topics.id', 1)
                                        ->whereNull('videos.deleted_at')
                                        ->count();
                            @endphp
                            <p class="lettre" style="transform: rotate(180deg);">B</p>
                            <div class="progress-bar" role="progressbar bg-info" style="width:18px; height:{{$variant != 0 ?(($variant/$looks)*100):'0'}}%; border-radius:10px; background:#4A4A4A;" aria-valuenow="{{($variant/$looks)*100}}" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                @endif
                </div>
            </div>
        </div>
    </div>

    <div class="blockTablettePub">
        <div class="blockgeneralTablette">
            <div class="blockDetail">
                <p class="text-title">Dad Men : because life is fun 1/4</p>
                <div class="content12">
                    <p class="datePublication">Published : 08 nov. 2020</p>
                    <div class="d-flex textImgView">
                        <p class="nbrView"> 22 578</p>
                        <div class="imgOeil"><img  src="{{ asset('img/icones/oeil.png') }}" alt=""></div>
                    </div>
                    <div class="groupLOveUnlove">
                        <div class="groupLOveTablette">
                            <div class="blockLoveUnlove">
                                <p class="nbrLove">122 k</p>
                                <div class="imgCoeur"><img src="{{ asset('img/icones/coeurRose.svg') }}" alt=""></div>
                            </div>
                            <div class="blockLoveUnlove">
                                <div class="imgCoeur"><img src="{{ asset('img/icones/loveRenverseGris.png') }}" alt=""></div>
                                <p class="nbrLove">2 078</p>
                            </div>
                        </div>
                        <div class="shareMore">
                            <div class="blockImgPuli">
                                <img src="{{ asset('img/icones/share.png') }}" alt="">
                                <p class="textShare">Share</p>
                            </div>
                            <div class="blockImgPuli">
                                <img src="{{ asset('img/icones/more.png') }}" alt="">
                                <p class="textShare">More</p>
                            </div>
                        </div>
                        <div class="blockImgPuliMobile">
                            <img src="{{ asset('img/icones/more.png') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="blockcomentaireAndButton">
                    <p class="commentaire">{{__('lown payment at confirmation of order and rest on factory dispatch date, Two years EU')}}</p>
                </div>
                <div class="moreContent">
                    <button class="btn btnMore">{{__('More')}}</button>
                    <img class="imgFleche" src="{{ asset('img/icones/fleche.svg') }}" alt="">
                </div>
            </div>
            <div class="blockAuteur">
                <img class="imgBadge" src="{{ asset('img/icones/Badge.png') }}" alt="">
                <div class="elementImgAuteur">
                    <img src="{{ asset('img/auteur.png') }}" alt="">
                </div>
                <div class="blockTextAuteur">
                    <p class="nameAuteur contentweb">Dad Men</p>
                    <p class="nbreAbonnees contentweb">12,4 k Abonnes</p>
                </div>
                <div class="contentMobile">
                    <p class="nameAuteur">Dad Men</p>
                    <p class="nbreAbonnees">12,4 k Abonnes</p>
                </div>
                <div class="elementBtnSouscrire">
                    <button class="btn btnSubscribe">Subscribe</button>
                </div>
            </div>
        </div>
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
                        <input type="hidden" name="video_id" value="{{session('video')->id}}" id="">
                        <textarea class="inputCommentaire2" name="value" id=""></textarea>

                        <div class="div-block-332">
                            <button class="btn btnAnnuler">{{__('')}}Annuler</button>
                            <button type="submit" class="btn btnEnvoyer">{{__('')}}Envoyer</button>
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
                                <input type="hidden" name="video_id" value="{{session('video')->id}}" id="">
                                <textarea class="inputCommentaire" name="value" id="" rows="5"></textarea>

                                <div class="div-block-332">
                                    <div data-w-id="4b72083c-6fc6-243d-8a1a-20877dbe9b72" class="text-block-325">{{__('')}}Annuler</div>
                                    <button type="submit" class="text-block-326 btn">{{__('')}}Envoyer</button>
                                </div>
                            </form>
                            <div>

                            </div>
                        </div>
                       <div class="d-flex group11">
                           <p class="textTousCom">Voir tous les commentaires</p>
                           <button class="btn btnTous" data-toggle="modal" data-target="#exampleModal"><img class="imgTousCom" src="{{ asset('img/touscom.svg') }}" alt=""></button>
                           <!-- Modal -->
                           <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                               <div class="modal-dialog" role="document">
                                   <div class="modal-content">
                                       <div class="modal-header">
                                           <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                               <span aria-hidden="true">&times;</span>
                                           </button>
                                       </div>
                                       <div class="modal-body">
                                           ...
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
                        <p class="commentText">0 {{__('')}}Commentaire</p>
                    </div>
                    <div class="div-block-331" >
                        @include('adminlte-templates::common.errors')
                        <form method="POST" action="/comments">
                            @csrf
                            <input type="hidden" name="video_id" value="{{session('video')->id}}" id="">
                            <textarea class="inputCommentaire" name="value" id=""></textarea>

                            <div class="div-block-332">
                                <button class="btn btnAnnuler">{{__('')}}Annuler</button>
                                <button type="submit" class="btn btnEnvoyer">{{__('')}}Envoyer</button>
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
</div>

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
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="node_modules/swiper/swiper-bundle.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

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



<script>
    var swiper = new Swiper('.swipeContainermodife1', {


        slidesPerView: 2.1,
        spaceBetween: 30
    });
</script>


<script>

    var swiper = new Swiper('.swiper-helatcare', {
        slidesPerView: 4,
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
                slidesPerView: 3.3,
                spaceBetween: 10
            },
            1200: {
                slidesPerView: 4,
                spaceBetween: 30
            },


        }
    });
    if ($('.swiper-container .swiper-slide').length < 1) {
        var swiper = new Swiper('.swiper-helatcare', {

            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev'
            },

        });
    }
</script>
<script src="{{asset('js/menu.js')}}"></script>
<!--    <script>
        $(document).ready(function(){
            //length in characters
            var maxLength = 10;
            var ellipsestext = "...";
            var moretext = "Read more";
            var lesstext = "Read less";
            $(".showReadMore1").each(function(){
                //get the text of paragraph or div
                var myStr = $(this).text();

                // check if it exceeds the maxLength limit
                if($.trim(myStr).length > maxLength){
                    //get only limited string firts to show text on page load
                    var newStr = myStr.substring(0, maxLength);

                    //get remaining string
                    var removedStr = myStr.substr(maxLength, $.trim(myStr).length - maxLength);
                    // now append the newStr + "..."+ hidden remaining string
                    var Newhtml = newStr + '<span class="moreellipses">' + ellipsestext+ '</span><span class="morecontent"><span>' + removedStr + '</span>&nbsp;&nbsp;<a href="javascript:void(0)" class="ReadMore">' + moretext + '</a></span>';

                    $(this).html(Newhtml);

                }
            });

            //function to show/hide remaining text on ReadMore button click
            $(".ReadMore").click(function(){

                if($(this).hasClass("less")) {
                    $(this).removeClass("less");
                    $(this).html(moretext);
                }
                else {
                    $(this).addClass("less");
                    $(this).html(lesstext);
                }

                $(this).parent().prev().toggle();
                $(this).prev().toggle();
                return false;
            });
        });
    </script>
@endsection

</body>

