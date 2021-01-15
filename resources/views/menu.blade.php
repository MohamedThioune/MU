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
    <link rel="stylesheet" href="css/menu.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

<body>
<div class="content-home">
    <div class="content-naveBar">
        <nav class="navbar navbar-expand-lg navModife">
            <button class="groupPointNav pointsRose btnMenue1">
                <img class="pointsRose" src="{{ asset('img/icones/troispoints.svg') }}" alt="">
            </button>
            <a class="navbar-brand elementLogo" href="#">
                <img src="{{ asset('img/logo-MU.png') }}" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <button class="groupPointNav btnMenue visible">
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
                            <img class="iconeMenue" src="{{ asset('img/icones/settings.svg') }}" alt="">
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
                        <button class="btn btnCategorie">Flow ''S</button>
                        <button class="btn btnCategorie">Kids</button>
                        <button class="btn btnCategorie">Sista’s</button>
                    </div>
                    <div class="contentSousMenueCategorie">
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
                    <li class="nav-item nav-modife">
                        <a href="" class="btnCommunaute">Rejoindre la communauté</a>
                    </li>
                    <li class="nav-item nav-modife">
                        <img src="{{ asset('img/icones/login.svg') }}" alt="">
                        <a class="nav-link" href="#">Log in</a>
                    </li>
                </ul>

            </div>
        </nav>
        <div class="header2">
            <div class="container-modife">
                <div class="block2">
                    <p class="textHeader2">mmmuuu</p>
                    <div class="d-flex">
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
                <div class="col-md-9">
                    <div class="videoParDefaut">
                        <video class="elementVideoParDefaut"  controls>
                            <source src="{{ asset('videos/video-principale.mp4') }}" type="video/mp4">
                        </video>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="content2">
                        <div class="bannierAlerte">
                            <img class="alertMissing" src="{{ asset('img/icones/alerte.svg') }}" alt="">
                            <p class="doNotMissing">Do not miss</p>
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
    <div class="container-modife">
        <div class="blockgeneral">
            <div class="blockDetail">
                <p class="text-title">Dad Men : because life is fun 1/4</p>
                <div class="content12">
                    <p class="datePublication">Published : 08 nov. 2020</p>
                    <div class="d-flex">
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
                    </div>
                </div>
                <div class="blockshareAndComments">
                    <div class="blockImgPuli bottomElement">
                        <img src="{{ asset('img/icones/lune.png') }}" alt="">
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
                <p class="nameAuteur">Dad Men</p>
                <p class="nbreAbonnees">12,4 k Abonnes</p>
                <button class="btn btnSubscribe">Subscribe</button>
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
</div>

</body>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        $( ".btnMenue" ).click(function() {
            $( ".menue1" ).addClass('visible');
            $( ".btnMenue" ).removeClass('visible');
            $( ".btnMenue1" ).addClass('visible');
        });

        $( ".btnMenue1" ).click(function() {
            $( ".menue1" ).removeClass('visible');
            $( ".btnMenue1" ).removeClass('visible');
            $( ".btnMenue" ).addClass('visible');
        });
    });
</script>
<script>
    $(document).ready(function() {
        $( ".btnMenue" ).click(function() {

            $( ".btnMenue1" ).addClass('visible');
        });
    });

</script>
