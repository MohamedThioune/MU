<html lang="fr">
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
    <link rel="stylesheet" href="{{asset('css/menu.css')}}">
    <link rel="stylesheet" href="node_modules/swiper/swiper.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/2def424b14.js" crossorigin="anonymous"></script>
</head>



<body>

<div class="elementFixedMobie">
    <div class="content-home">
        <div class="content-naveBar">
            <nav class="navbar navbar-expand-lg navModife">
                <button class="groupPointNav btnMenue1">
                    <img class="pointsRose" src="{{ asset('img/icones/troispoints.svg') }}" alt="">
                    <div class="muu d-flex">
                        <img class="flecheMuu" src="{{ asset('img/icones/fleche.svg') }}" alt="">
                        <p class="muuText">mmmuuu</p>
                    </div>
                </button>
                <a class="navbar-brand elementLogo" href="#">
                    <img src="{{ asset('img/logo-MU.png') }}" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
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

                        <!--                        <div class="contentElementRight">
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
                        -->                    </div>
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
                        <!--                        <div class="contentElementRight">
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
                        -->
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
                            <!-- User connected with his name -->
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
    </div>
    <div class="content-contenue1">
        <div class="contentParDefaut">
            <div class="linearColor"></div>
            <div class="container-fluid position-relative">
                <div class="row">
                    <div class="col-sm-12  col-md-12 col-lg-9 col-modife">
                        <div class="videoParDefaut">
                            <video poster="{{ asset('images/sista_preloader.png')}}" class="elementVideoParDefaut" controls>
                                <source src="{{ asset('vids/uploads')}}/{{session('video')->vid}}" type="video/mp4;charset=UTF-8">
                            </video>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-3 colMobe">
                        <div class="content2">
                            <div class="bannierAlerte">
                                <img class="alertMissing" src="{{ asset('img/icones/alerte.svg') }}" alt="">
                                <p id="doNotMissing">Do not miss</p>
                            </div>
                            <div class="contentSuggestion1">
                                <div class="publicite">
                                    <img src="{{ asset('img/publicite.png') }}" alt="">
                                </div>
                                <div class="suggestion">
                                    <div class="cardSuggestion2">
                                        <div class="img-video-suggestion">
                                            <img class="w-100" src="{{ asset('img/fitness.png') }}" alt="">
                                            <div class="detailElement">
                                                <p class="heure">17:25</p>
                                                <div class="group2">
                                                    <div class="d-flex">
                                                        <p class="text-liberty">Liberty in the words</p>
                                                        <img src="" alt="">
                                                    </div>
                                                    <div class="d-flex">
                                                        <div class="imgMind"><img  src="{{ asset('img/main.jpeg') }}" alt=""></div>
                                                        <div class="text-img">
                                                            <div>
                                                                <p class="textMind">Mind</p>
                                                                <p class="numberviews">1230</p>
                                                            </div>
                                                            <div class="imgViews"><img  src="{{ asset('img/icones/eye-4-xxl.png') }}" alt=""></div>
                                                        </div>
                                                        <p class="text-days">4 days ago</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cardSuggestion2">
                                        <div class="img-video-suggestion">
                                            <img class="w-100" src="{{ asset('img/fitness.png') }}" alt="">
                                            <div class="detailElement">
                                                <p class="heure">17:25</p>
                                                <div class="group2">
                                                    <div class="d-flex">
                                                        <p class="text-liberty">Liberty in the words</p>
                                                        <img src="" alt="">
                                                    </div>
                                                    <div class="d-flex">
                                                        <div class="imgMind"><img  src="{{ asset('img/main.jpeg') }}" alt=""></div>
                                                        <div class="text-img">
                                                            <div>
                                                                <p class="textMind">Mind</p>
                                                                <p class="numberviews">1230</p>
                                                            </div>
                                                            <div class="imgViews"><img  src="{{ asset('img/icones/eye-4-xxl.png') }}" alt=""></div>
                                                        </div>
                                                        <p class="text-days">4 days ago</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
                    <p class="text-title">{{session('video')->main_title }}</p>
                    <div class="content12">
                        <p class="datePublication">Published : 08 nov. 2020</p>
                        <div class="d-flex textImgView">
                            <p class="nbrView"> 22 578</p>
                            <div class="imgOeil"><img  src="{{ asset('img/icones/oeil.png') }}" alt=""></div>
                        </div>
                        <div class="groupLOveUnlove">
                            <div class="blockLoveUnlove">
                                <p class="nbrLove">122 k</p>
                                <div class="imgCoeur"><img src="{{ asset('img/icones/coeurRose.svg') }}" alt=""></div>
                            </div>
                            <div class="blockLoveUnlove">
                                <div class="imgCoeur"><img src="{{ asset('img/icones/loveRenverseGris.png') }}" alt=""></div>
                                <p class="nbrLove">2 078</p>
                            </div>
                            <div class="blockImgPuliMobile">
                                <img src="{{ asset('img/icones/more.png') }}" alt="">
                            </div>
                        </div>
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
                                    <img class="imgLiberti" src="{{asset('img/icones/lune.png')}}" alt="Lune" data-toggle="tooltip" data-placement="top" title="Community-approved video">
                                @else
                                    <img class="imgLiberti" src="{{asset('img/icones/Lune-bleu-small.png')}}" alt="Lune"  data-toggle="tooltip" data-placement="top" title="This video has been pointed out by members of the community as being unbearable">
                                @endif
                            </a>
                        </div>
                        <div class="blockImgPuli">
                            <img src="{{ asset('img/icones/share.png') }}" alt="">
                            <p class="textShare">Share</p>
                        </div>
                        <div class="blockImgPuli">
                            <img src="{{ asset('img/icones/more.png') }}" alt="">
                            <p class="textShare">More</p>
                        </div>
                        <div class="blockImgPuli">
                            <img src="{{ asset('img/icones/comments.png') }}" alt="">
                            <p class="textShare">Comments</p>
                        </div>
                    </div>
                    <div class="blockcomentaireAndButton">
                        <p class="commentaire">{{ session('video')->description }}</p>
                    </div>
                    <div class="moreContent">
                        <button class="btn btnMore">More</button>
                        <img class="imgFleche" src="{{ asset('img/icones/fleche.svg') }}" alt="">
                    </div>
                </div>
                <div class="blockAuteur webElement">
                    <img class="imgBadge" src="{{ asset('img/icones/Badge.png') }}" alt="">
                    <div class="elementImgAuteur">
                        <img src="{{ asset('img/auteur.png') }}" alt="">
                    </div>
                    @php
                        $channel = DB::Table('users')->select('channels.*')
                                                        ->join('channels', 'users.id', 'channels.user_id')
                                                        ->where('users.id', session('user')->id)
                                                        ->first();
                    @endphp
                    <p class="nameAuteur contentweb">{{$channel->name}}</p>
                    <p class="nbreAbonnees contentweb">12,4 k Abonnes</p>
                    <div class="contentMobile">
                        <p class="nameAuteur">Dad Men</p>
                        <p class="nbreAbonnees">12,4 k Abonnes</p>
                    </div>
                    <div class="elementBtnSouscrire">
                        <button class="btn btnSubscribe">Subscribe</button>
                    </div>
                </div>
                <div class="mobMobile">
                    <div class="publicite">
                        <div class="seed-Block">
                            <p class="seedText">See the Ad</p>
                        </div>
                        <img src="{{ asset('img/publicite.png') }}" alt="">
                    </div>
                </div>
                <div class="blockTime position-relative">
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
                    <p class="commentaire">lown payment at confirmation of order and rest on factory dispatch date, Two years EU</p>
                </div>
                <div class="moreContent">
                    <button class="btn btnMore">More</button>
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
        <div class="row commentBlock">
            <div class="col-md-12 col-lg-6 col-modife col-sm-12">
                @if(count($comments) > 0)
                <div class="commentOne">
                    <div class="commentTitle">
                        <p class="nombreComment">{{count($comments)}}</p>
                        <p class="commentText">Comments</p>
                        <img class="commentImg" src="{{ asset('img/icones/commet.svg') }}" alt="">
                    </div>
                    
                    @for($i = 0; $i < count($comments); $i++)
                    <div class="auteurCommentBlock">

                        <div class="elementAuteurComment">
                        @if($comments[$i]->photo)
                            <img src="{{asset('images/uploads')}}/{{$comments[$i]->photo}}" style="width:45px; height:42px"  class="img-circle" alt="User Image"/>
                        @elseif($comments[$i]->age <= 15)
                            <img src="{{asset('images/kids_preloader.png')}}" style="width:45px; height:42px"  class="img-circle" alt="User Image"/>
                        @elseif($comments[$i]->age > 15 && $comments[$i]->sex == '1')
                            <img src="{{asset('images/flow_preloader.png')}}" style="width:45px; height:42px"  class="img-circle" alt="User Image"/>
                        @elseif($comments[$i]->age > 15 && s[$i]->sex == '0')
                            <img src="{{asset('images/sista_preloader.png')}}" style="width:45px; height:42px"  class="img-circle" alt="User Image"/>
                        @endif
                        </div>
                        <div class="textBlock">
                            <div>
                                <p class="commentaireAuteurTitle">{{$comments[$i]->name}}
                                    <!-- Time comment -->
                                    <!-- Date creation relative -->
                                    @if(intval(abs(strtotime("now") - strtotime($comments[$i]->created_at))/ 86400) == 0)
                                        @if(intval(abs(strtotime("now") - strtotime($comments[$i]->created_at))/ 3600) > 0)
                                        <span class="timeCommentaire">{{intval(abs(strtotime("now") - strtotime($comments[$i]->created_at))/3600)}} hours ago </span>
                                        @else(intval(abs(strtotime("now") - strtotime($comments[$i]->created_at))/ 3600) == 0)
                                        <span class="timeCommentaire">{{intval(abs(strtotime("now") - strtotime($comments[$i]->created_at))/60)}} minutes ago </span>
                                        @endif
                                    @elseif(intval(abs(strtotime("now") - strtotime($comments[$i]->created_at))/ 86400) == 1)
                                    <span class="timeCommentaire">Yesterday at {{strftime("%H:%M", strtotime($comments[$i]->created_at))}}</span>
                                    @elseif(intval(abs(strtotime("now") - strtotime($comments[$i]->created_at))/ 86400) >= 2 && intval(abs(strtotime("now") - strtotime($comments[$i]->created_at))/ 86400) <= 27)
                                    <span class="timeCommentaire"> {{intval(abs(strtotime("now") - strtotime($comments[$i]->created_at))/ 86400)}} days ago </span>
                                    @else(intval(abs(strtotime("now") - strtotime($comments[$i]->created_at))/ 86400) > 27)
                                    <span class="timeCommentaire">On {{strftime("%d/%m/%Y", strtotime($comments[$i]->created_at))}}</span>
                                    @endif
                                </p>
                                
                                <p class="commentaireText">
                                    <p>{{$comments[$i]->value}}<a href="#" class="readMore" style="font-weight:bold; color:#d63031; text-decoration:none;">Answer <i class="fas fa-reply"></i></a></p> 
                                    <p>
                                        <span style="font-size:13px;">0&nbsp;<a href="#"><img src="{{ asset('img/icones/Like gris.png') }}" width="15" height="15" alt=""></a></span>
                                        <span style="font-size:13px;">0&nbsp;<a href="#"><img src="{{ asset('img/icones/loveRenverseGris.png') }}" width="15" height="15"  alt=""></a></span>
                                    </p> 
                                </p>
                                @php
                                    $responses_comments = DB::Table('response_comments')->select('response_comments.*','users.*','comments.value' ,'comments.id as comment_id' ,'comments.created_at as created_at')
                                    ->join('comments', 'response_comments.comment_id', 'comments.id')
                                    ->join('users', 'comments.user_id', 'users.id')
                                    ->where('comments.id', $comments[$i]->id )
                                    ->get();
                                @endphp

                                @foreach($responses_comments as $response_comments )
                                    <div class="reponse">
                                        <div class="imgReponseBlock">
                                            @if($response_comments->photo)
                                                <img src="{{asset('images/uploads')}}/{{$response_comments->photo}}" alt="">
                                            @elseif($response_comments->age <= 15)
                                                <img src="{{asset('images/kids_preloader.png')}}" style="width:45px; height:42px"  class="img-circle" alt="User Image"/>
                                            @elseif($response_comments->age > 15 && $response_comments->sex == '1')
                                                <img src="{{asset('images/flow_preloader.png')}}" style="width:45px; height:42px"  class="img-circle" alt="User Image"/>
                                            @elseif($response_comments->age > 15 && $response_comments->sex == '0')
                                                <img src="{{asset('images/sista_preloader.png')}}" style="width:45px; height:42px"  class="img-circle" alt="User Image"/>
                                            @endif
                                        </div>
                                        <div class="blockReponse">
                                            <div class="textHeure">
                                                <p class="reponseText">{{$response_comments->name}}</p>
                                                @if(intval(abs(strtotime("now") - strtotime($response_comments->created_at))/ 86400) == 0)
                                                    @if(intval(abs(strtotime("now") - strtotime($response_comments->created_at))/ 3600) > 0)
                                                    <span class="timeReponse">{{intval(abs(strtotime("now") - strtotime($response_comments->created_at))/3600)}} hours ago </span>
                                                    @else(intval(abs(strtotime("now") - strtotime($response_comments->created_at))/ 3600) == 0)
                                                    <span class="timeReponse">{{intval(abs(strtotime("now") - strtotime($response_comments->created_at))/60)}} minutes ago </span>
                                                    @endif
                                                @elseif(intval(abs(strtotime("now") - strtotime($response_comments->created_at))/ 86400) == 1)
                                                <span style="margin-left:90px;margin-top:3px" class="timeReponse">Yesterday at {{strftime("%H:%M", strtotime($response_comments->created_at))}}</span>
                                                @elseif(intval(abs(strtotime("now") - strtotime($response_comments->created_at))/ 86400) >= 2 && intval(abs(strtotime("now") - strtotime($response_comments->created_at))/ 86400) <= 27)
                                                <span class="timeReponse"> {{intval(abs(strtotime("now") - strtotime($response_comments->created_at))/ 86400)}} days ago </span>
                                                @else(intval(abs(strtotime("now") - strtotime($response_comments->created_at))/ 86400) > 27)
                                                <span class="timeReponse">On {{strftime("%d/%m/%Y", strtotime($response_comments->created_at))}}</span>
                                                @endif
                                            </div>
                                            <p class="textReponse">{{$response_comments->response_value}}</p>
                                        </div>
                                    </div>
                                @endforeach

                                <div class="reponse">
                                    <div class="imgReponseBlock">
                                        @if(Auth::user()->photo)
                                            <img src="{{asset('images/uploads')}}/{{Auth::user()->photo}}" alt="">
                                        @elseif(Auth::user()->age <= 15)
                                            <img src="{{asset('images/kids_preloader.png')}}" style="width:45px; height:42px"  class="img-circle" alt="User Image"/>
                                        @elseif(Auth::user()->age > 15 && Auth::user()->sex == '1')
                                            <img src="{{asset('images/flow_preloader.png')}}" style="width:45px; height:42px"  class="img-circle" alt="User Image"/>
                                        @elseif(Auth::user()->age > 15 && Auth::user()->sex == '0')
                                            <img src="{{asset('images/sista_preloader.png')}}" style="width:45px; height:42px"  class="img-circle" alt="User Image"/>
                                        @endif
                                    </div>
                                   

                                    <div class="blockReponse">
                                        <div class="textReponse">
                                            {!! Form::open(array('url' => '/response_comment', 'method' => 'get'))!!}
                                                <div class="d-flex justify-content-between">
                                                    {!! Form::text('response_value', null, ['class' => 'form-control', 'placeholder' => 'Reply to your brother...']) !!}
                                                    &nbsp;
                                                    {!! Form::hidden('comment_id', $comments[$i]->comment_id ) !!}
                                                    {!! Form::hidden('video_id', session('video')->id ) !!}
                                                
                                                    &nbsp;{!! Form::submit('Save', ['class' => 'btn btn-danger', 'style' => 'height:38px;']) !!}
                                                </div>
                                            {!! Form::close() !!}
                                        </div>
                                    </div>
                                </div>

                                
                                    
                        </div>
                            </div>
                                <!-- <div class="checkBlock">
                                    <div class="blockLick">
                                        <p class="numberLike">19</p>
                                        <img src="{{ asset('img/') }}" alt="">
                                     </div>
                                    <div class="d-flex">
                                        <img src="" alt="">
                                        <p></p>
                                    </div>
                                </div> -->
                    </div>
                   
                    </div>
                   
                    <div class="auteurCommentBlock">

                        <div class="elementAuteurComment">
                        @if(Auth::user()->photo)
                            <img src="{{asset('images/uploads')}}/{{Auth::user()->photo}}" style="width:45px; height:42px"  class="img-circle" alt="User Image"/>
                        @elseif(Auth::user()->age <= 15)
                            <img src="{{asset('images/kids_preloader.png')}}" style="width:45px; height:42px"  class="img-circle" alt="User Image"/>
                        @elseif(Auth::user()->age > 15 && Auth::user()->sex == '1')
                            <img src="{{asset('images/flow_preloader.png')}}" style="width:45px; height:42px"  class="img-circle" alt="User Image"/>
                        @elseif(Auth::user()->age > 15 && Auth::user()->sex == '0')
                            <img src="{{asset('images/sista_preloader.png')}}" style="width:45px; height:42px"  class="img-circle" alt="User Image"/>
                        @endif
                        </div>
                        <div class="textBlock">
                            <div>
                                {!! Form::open(array('url' => '/comment', 'method' => 'get'))!!}
                                <div class="d-flex justify-content-between">
                                    {!! Form::text('value', null, ['class' => 'form-control', 'placeholder' => 'Contribute to this video ...']) !!}
                                    &nbsp;
                                    {!! Form::hidden('video_id', session('video')->id ) !!}
                                
                                    &nbsp;{!! Form::submit('Save', ['class' => 'btn btn-danger', 'style' => 'height:38px;']) !!}
                                </div>
                                {!! Form::close() !!}
                            </div>
                        </div> 
                    </div>
                    @php
                        if($i == 0)
                            break;
                    @endphp 
                    @endfor
                    <div class="blockMoreAnswer">
                        <div class="d-flex">
                            <a href="#" class="textComment" style="text-decoration:none;"> <i class="fa fa-plus"></i>&nbsp;More comments</a>
                        </div>
                        <div class="d-flex">
                            <a href="#" class="textCommentBleu">{{$channel->name}} answer</a>
                            <i class="fa fa-message"></i>
                        </div>
                    </div>
                    <br>
                </div>
            </div>
           
            @endif 
            <div class="col-md-12 col-lg-6">
                <div class="contentSwipeToday swiperBlackMob">
                    <div class="barreLatraleNoir">To day</div>
                    <div class="swiper-container swipeContainermodife1">
                        <div class="swiper-wrapper">
                            <div class=" swiper-slide card-suggestionDay">
                                <div class="elementCardSuggestionDay">
                                    <img class="imgElementCardSuggestionDay" src="{{ asset('img/card1.png') }}" alt="">
                                    <div class="contentFlyHeure">
                                        <p class="flyText">Fly</p>
                                        <p class="heureFly" style="color:white;">17:25</p>
                                    </div>
                                </div>
                                <div class="contentCardSuggestionDay">
                                    <div class="d-flex justify-content-between">
                                        <p class="libertiText">Liberty in the words</p>
                                        <img class="imgLiberti" src="{{ asset('img/icones/Lune-bleu-small.png') }}" alt="">
                                    </div>
                                    <div class="mindCard">
                                        <div class="blockImgMind">
                                            <img class="" src="{{ asset('img/mid1.png') }}" alt="">
                                        </div>
                                        <div class="block3">
                                            <p class="mindText">Mind</p>
                                            <div class="d-flex justify-content-between">
                                                <p class="numberviewsSuggestion">1230</p>
                                                <img class="oeil-1" src="{{ asset('img/icones/oeil-1.png') }}" alt="">
                                                <p class="day">4 days ago</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" swiper-slide card-suggestionDay">
                                <div class="elementCardSuggestionDay">
                                    <img class="imgElementCardSuggestionDay" src="{{ asset('img/card2.png') }}" alt="">
                                    <div class="contentFlyHeure">
                                        <p class="flyText">Fly</p>
                                        <p class="heureFly">17:25</p>
                                    </div>
                                </div>
                                <div class="contentCardSuggestionDay">
                                    <div class="d-flex justify-content-between">
                                        <p class="libertiText">Liberty in the words</p>
                                        <img class="imgLiberti" src="{{ asset('img/icones/Lune-bleu-small.png') }}" alt="">
                                    </div>
                                    <div class="mindCard">
                                        <div class="blockImgMind">
                                            <img class="" src="{{ asset('img/auteurCard2.png') }}" alt="">
                                        </div>
                                        <div class="block3">
                                            <p class="mindText">Mind</p>
                                            <div class="d-flex justify-content-between">
                                                <p class="numberviewsSuggestion">1230</p>
                                                <img class="oeil-1" src="{{ asset('img/icones/oeil-1.png') }}" alt="">
                                                <p class="day">4 days ago</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" swiper-slide card-suggestionDay">
                                <div class="elementCardSuggestionDay">
                                    <img class="imgElementCardSuggestionDay" src="{{ asset('img/card3.png') }}" alt="">
                                    <div class="contentFlyHeure">
                                        <p class="flyText">Fly</p>
                                        <p class="heureFly">17:25</p>
                                    </div>
                                </div>
                                <div class="contentCardSuggestionDay">
                                    <div class="d-flex justify-content-between">
                                        <p class="libertiText">Liberty in the words</p>
                                        <img class="imgLiberti" src="{{ asset('img/icones/Lune-bleu-small.png') }}" alt="">
                                    </div>
                                    <div class="mindCard">
                                        <div class="blockImgMind">
                                            <img class="" src="{{ asset('img/auteurCard3.png') }}" alt="">
                                        </div>
                                        <div class="block3">
                                            <p class="mindText">Mind</p>
                                            <div class="d-flex justify-content-between">
                                                <p class="numberviewsSuggestion">1230</p>
                                                <img class="oeil-1" src="{{ asset('img/icones/oeil-1.png') }}" alt="">
                                                <p class="day">4 days ago</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" swiper-slide card-suggestionDay">
                                <div class="elementCardSuggestionDay">
                                    <img class="imgElementCardSuggestionDay" src="{{ asset('img/card4.png') }}" alt="">
                                    <div class="contentFlyHeure">
                                        <p class="flyText">Fly</p>
                                        <p class="heureFly">17:25</p>
                                    </div>
                                </div>
                                <div class="contentCardSuggestionDay">
                                    <div class="d-flex justify-content-between">
                                        <p class="libertiText">Liberty in the words</p>
                                        <img class="imgLiberti" src="{{ asset('img/icones/Lune-bleu-small.png') }}" alt="">
                                    </div>
                                    <div class="mindCard">
                                        <div class="blockImgMind">
                                            <img class="" src="{{ asset('img/auteurCard4.png') }}" alt="">
                                        </div>
                                        <div class="block3">
                                            <p class="mindText">Mind</p>
                                            
                                            <div class="d-flex justify-content-between">
                                                <p class="numberviewsSuggestion">1230</p>
                                                <img class="oeil-1" src="{{ asset('img/icones/oeil-1.png') }}" alt="">
                                                <p class="day">4 days ago</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
            <div class="barreLatraleNoir vertBarre">Healthcares</div>
            <div class="swiper-container swiper-helatcare">
                <div class="swiper-wrapper">
                    @foreach(session('videos_haltcare') as $video)
                    <div class=" swiper-slide card-suggestionDay">
                        <div class="elementCardSuggestionDay">
                            <img class="imgElementCardSuggestionDay" src="{{ asset('vids/thumbnails/') }}/{{$video->thumbnail}}" alt="">
                            <a href="{{route('play',[$video->id])}}" target="blank" class="contentFlyHeure">
                                <p class="flyText">{{$video->title}}</p>
                                <p class="heureFly">
                                    @php  
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
                                <img class="imgLiberti" src="{{ asset('img/icones/Lune-bleu-small.png') }}" alt="">
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
                                    <p class="mindText">{{$user->name}}</p>
                                    <div class="d-flex justify-content-between">
                                        <p class="numberviewsSuggestion">1230</p>
                                        <img class="oeil-1" src="{{ asset('img/icones/oeil-1.png') }}" alt="">
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
                            </div>
                        </div>
                    </div>
                    @endforeach
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
            <div class="barreLatraleNoir life">Life</div>
                <div class="swiper-container swiper-helatcare">
                <div class="swiper-wrapper">
                    @foreach(session('videos_life') as $video)
                    <div class=" swiper-slide card-suggestionDay">
                        <div class="elementCardSuggestionDay">
                            <img class="imgElementCardSuggestionDay" src="{{ asset('vids/thumbnails/') }}/{{$video->thumbnail}}" alt="">
                            <a href="{{route('play',[$video->id])}}" target="blank" class="contentFlyHeure">
                                <p class="flyText">{{$video->title}}</p>
                                <p class="heureFly">
                                    @php  
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
                                <img class="imgLiberti" src="{{ asset('img/icones/Lune-bleu-small.png') }}" alt="">
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
                                    <p class="mindText">{{$user->name}}</p>
                                    <div class="d-flex justify-content-between">
                                        <p class="numberviewsSuggestion">1230</p>
                                        <img class="oeil-1" src="{{ asset('img/icones/oeil-1.png') }}" alt="">
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
            <div class="barreLatraleNoir Health">Health</div>
                <div class="swiper-container swiper-helatcare">
                <div class="swiper-wrapper">
                    @foreach(session('videos_health') as $video)
                    <div class=" swiper-slide card-suggestionDay">
                        <div class="elementCardSuggestionDay">
                            <img class="imgElementCardSuggestionDay" src="{{ asset('vids/thumbnails/') }}/{{$video->thumbnail}}" alt="">
                            <a href="{{route('play',[$video->id])}}" target="blank" class="contentFlyHeure">
                                <p class="flyText">{{$video->title}}</p>
                                <p class="heureFly">
                                    @php  
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
                                <img class="imgLiberti" src="{{ asset('img/icones/Lune-bleu-small.png') }}" alt="">
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
                                    <p class="mindText">{{$user->name}}</p>
                                    <div class="d-flex justify-content-between">
                                        <p class="numberviewsSuggestion">1230</p>
                                        <img class="oeil-1" src="{{ asset('img/icones/oeil-1.png') }}" alt="">
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
            <div class="barreLatraleNoir Business">Business</div>
                <div class="swiper-container swiper-helatcare">
                <div class="swiper-wrapper">
                    @foreach(session('videos_business') as $video)
                    <div class=" swiper-slide card-suggestionDay">
                        <div class="elementCardSuggestionDay">
                            <img class="imgElementCardSuggestionDay" src="{{ asset('vids/thumbnails/') }}/{{$video->thumbnail}}" alt="">
                            <a href="{{route('play',[$video->id])}}" target="blank" class="contentFlyHeure">
                                <p class="flyText">{{$video->title}}</p>
                                <p class="heureFly">
                                    @php  
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
                                <img class="imgLiberti" src="{{ asset('img/icones/Lune-bleu-small.png') }}" alt="">
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
                                    <p class="mindText">{{$user->name}}</p>
                                    <div class="d-flex justify-content-between">
                                        <p class="numberviewsSuggestion">1230</p>
                                        <img class="oeil-1" src="{{ asset('img/icones/oeil-1.png') }}" alt="">
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
            <div class="barreLatraleNoir Education">Education</div>
                <div class="swiper-container swiper-helatcare">
                <div class="swiper-wrapper">
                    @foreach(session('videos_education') as $video)
                    <div class=" swiper-slide card-suggestionDay">
                        <div class="elementCardSuggestionDay">
                            <img class="imgElementCardSuggestionDay" src="{{ asset('vids/thumbnails/') }}/{{$video->thumbnail}}" alt="">
                            <a href="{{route('play',[$video->id])}}" target="blank" class="contentFlyHeure">
                                <p class="flyText">{{$video->title}}</p>
                                <p class="heureFly">
                                    @php  
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
                                <img class="imgLiberti" src="{{ asset('img/icones/Lune-bleu-small.png') }}" alt="">
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
                                    <p class="mindText">{{$user->name}}</p>
                                    <div class="d-flex justify-content-between">
                                        <p class="numberviewsSuggestion">1230</p>
                                        <img class="oeil-1" src="{{ asset('img/icones/oeil-1.png') }}" alt="">
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
            <div class="barreLatraleNoir Evironnement">Environnement</div>
                <div class="swiper-container swiper-helatcare">
                <div class="swiper-wrapper">
                    @foreach(session('videos_environnement') as $video)
                    <div class=" swiper-slide card-suggestionDay">
                        <div class="elementCardSuggestionDay">
                            <img class="imgElementCardSuggestionDay" src="{{ asset('vids/thumbnails/') }}/{{$video->thumbnail}}" alt="">
                            <a href="{{route('play',[$video->id])}}" target="blank" class="contentFlyHeure">
                                <p class="flyText">{{$video->title}}</p>
                                <p class="heureFly">
                                    @php  
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
                                <img class="imgLiberti" src="{{ asset('img/icones/Lune-bleu-small.png') }}" alt="">
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
                                    <p class="mindText">{{$user->name}}</p>
                                    <div class="d-flex justify-content-between">
                                        <p class="numberviewsSuggestion">1230</p>
                                        <img class="oeil-1" src="{{ asset('img/icones/oeil-1.png') }}" alt="">
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

</body>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="node_modules/swiper/swiper-bundle.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<script>
    //My code not persuassive
    var video_play = document.querySelector(".elementVideoParDefaut");

    if(video_play.readyState > video_play.HAVE_METADATA){
        var min = Math.floor(video_play.duration / 60);
        var sec = Math.floor(video_play.duration - min * 60);
        document.getElementById("doNotMissing").innerHTML = min + ":" + sec;
    }

</script>
<script>
    var swiper = new Swiper('.swipeContainermodife1', {
        slidesPerView: 2.2,
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
                slidesPerView: 3.3,
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
<script src="{{asset('js/menu.js')}}"></script>
