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

<div class="business-content">
    <div class="bando-name">
        <div class="business-bandeau-chaine chaineAbonneBlockHead">
            <div class="div-block-385">
                <div class="chaine">
                    <a href="#" class="link-block-40 w-inline-block">
                        <div class="div-block-386">
                            <img src="{{ asset('img/Mu-coeur-blanc.svg') }}" loading="lazy" width="23" alt="">
                        </div>
                        <div class="text-block-380">S&#x27;abonner</div>
                    </a>
                    <div class="alerte">
                        <img src="{{ asset('img/Mu-cloche-blanc.svg') }}" loading="lazy" width="11" alt="">
                    </div>
                    <div class="div-block-370">
                        <img src="{{ asset('img/Share-blanc.svg') }}" loading="lazy" width="29" alt="" class="image-126">
                    </div>
                    <a href="#Offre-business" class="link-block-42 w-inline-block">
                        <img src="{{ asset('img/Mu-panier2x_1.png') }}" loading="lazy" width="27" alt="">
                    </a>
                    <a href="#" class="link-block-41 w-inline-block">
                        <div>Soutenir</div>
                    </a>
                </div>
            </div>
        </div>
        <div class="chaine-name">
            <div class="logo-chaine">
                <img src="{{ asset('img/Capture-d’écran-2021-03-04-à-12.34.15.png') }}" class="image-118"></div>
            <div>
                <h1 class="heading-45">Business Objectifs</h1>
                <div class="div-block-383">
                    <p class="text-block-344">12 345 </p>
                    <p class="text-block-345">abonnés</p>
                </div>
            </div>
        </div>
    </div>
    <div class="menu-content-business">
        <a href="#" class="link-26">Infos</a>
        <a href="#" class="link-26">Récents</a>
        <a href="#" class="link-26">Toutes les videos</a>
        <a href="#" class="link-26">Offres</a>
        <a href="#" class="link-26">Playlist</a>
    </div>
    <div class="infos-hot">
        <p class="text-block-381">Fresh Flow</p>
        <div class="div-block-394">
            <div class="hot-green">
                <img src="{{ asset('img/Mu-hot-info.png') }}" loading="lazy" width="47" alt="" class="image-131">
            </div>
            <div class="div-block-391">
                <div class="div-block-393">
                    <div class="div-block-392">
                        <img src="{{ asset('img/Mu-video-format-bike-girl.jpg') }}" loading="lazy" sizes="100vw" srcset="images/Mu-video-format-bike-girl-p-800.jpeg 800w, images/Mu-video-format-bike-girl.jpg 898w" alt="" class="image-130"></div>
                    <div>
                        <p class="text-block-383">Titre de l&#x27;évenement</p>
                        <p class="text-block-385">Publier il y a 2h</p>
                        <div>
                            <p class="text-block-384">Cours du jeudi reporté à la semaine prochaine </p>
                            <p class="text-block-384">Inscription sur le site</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="business-now">
        <div class="video-sadakatia-asso">
            <img src="{{ asset('img/Mu-Vignette-video-400x250-photographe.jpg') }}" alt="">
        </div>
        <div class="sadaka-txt">
            <p class="text-block-334">Savoir Illustré son business</p>
            <p class="text-block-336">Avec le web, l&#x27;image est devenue une clé de conversion pour  <br>tout business en ligne.Dans cette vidéo vous découvrirez la <br>première formation concernant les bases de la photo... <br></p>
            <div class="div-block-337">
                <a href="#Offre-business" class="business-buton w-inline-block">
                    <span class="text-block-338">Découvrir toutes les offres</span>
                </a>
            </div>
            <div class="div-block-339">
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
            </div>
        </div>
    </div>
    <div class="chaine-description">
        <div class="chaine-desciption-all">
            <div class="div-block-335">
                <div class="div-block-384">
                    <img src="{{ asset('img/Capture-d’écran-2021-03-04-à-12.34.15.png') }}" width="47" class="image-128"></div>
                <div>
                    <div>
                        <div class="infos-biz-chaine">
                            <p class="text-block-343">Chaine de Business Objectifs</p>
                        </div>
                        <div class="descrition-biz-chaine">
                            <p class="text-block-330">But de l&#x27;entreprise sur 4 lignes décrivant les activités les plus <br>Suite but ligne 2<br>Suite but ligne 2<br>Suite but ligne 2<br></>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="coordonne">
        <p class="text-block-331">Adresse : Business Objectif <br>N° voie<br>Code postale Ville<br>Pays </p>
        <p class="text-block-332">Site web<br></p>
        <p class="text-block-339">Horaire d&#x27;ouverture<br>‍</p>
        <a href="#" class="link-25">Contact<br></a>
    </div>
    <div class="derniersNouvelles">
        <p class="text-Playlist">La playlist</p>
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
                            <img class="imgLiberti" src="{{ asset('img/icones/Mu-badge22.png') }}" alt="">
                        </div>
                        <div class="mindCard">
                            <div class="blockImgMind">
                                <img class="" src="{{ asset('img/mid1.png') }}" alt="">
                            </div>
                            <div class="block3">
                                <p class="mindText">Mind</p>
                                <p class="day">Publié il y à 2 jours</p>
                                <!--                                     <div class="d-flex justify-content-between">
                                                                                <p class="numberviewsSuggestion">1230</p>
                                                                                <img class="oeil-1" src="{{ asset('img/icones/oeil-1.png') }}" alt="">

                                                                            </div>
                                                    -->                                        </div>
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
                            <img class="imgLiberti" src="{{ asset('img/icones/Mu-badge22.png') }}" alt="">
                        </div>
                        <div class="mindCard">
                            <div class="blockImgMind">
                                <img class="" src="{{ asset('img/auteurCard2.png') }}" alt="">
                            </div>
                            <div class="block3">
                                <p class="mindText">Mind</p>
                                <p class="day">Publié il y à 2 jours</p>
                                <!--   <div class="d-flex justify-content-between">
                                       <p class="numberviewsSuggestion">1230</p>
                                       <img class="oeil-1" src="{{ asset('img/icones/oeil-1.png') }}" alt="">
                                   </div>-->
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
                            <img class="imgLiberti" src="{{ asset('img/icones/Mu-badge22.png') }}" alt="">
                        </div>
                        <div class="mindCard">
                            <div class="blockImgMind">
                                <img class="" src="{{ asset('img/auteurCard3.png') }}" alt="">
                            </div>
                            <div class="block3">
                                <p class="mindText">Mind</p>
                                <p class="day">Publié il y à 2 jours</p>
                                <!-- <div class="d-flex justify-content-between">
                                     <p class="numberviewsSuggestion">1230</p>
                                     <img class="oeil-1" src="{{ asset('img/icones/oeil-1.png') }}" alt="">
                                 </div>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="Offre-business" class="offre-de-la-chaine">
        <p class="text-block-342">Les offres</p>
        <div class="div-block-319">
            <div class="div-block-318">
                <div>
                    <img src="{{ asset('img/Nuage-rose.png') }}" width="52" alt=""></div>
                <p class="text-block-320">Nom produit/ formation</p>
                <a href="#" class="link-block-38 w-inline-block">
                    <div class="text-block-319">Découvrir</div>
                </a>
            </div>
            <div class="div-block-318">
                <div>
                    <img src="{{ asset('img/Nuage-rose.png') }}" width="52"></div>
                <p class="text-block-320">Nom produit 2</p>
                <a href="#" class="link-block-38 w-inline-block">
                    <div class="text-block-319">Découvrir</div>
                </a>
            </div>
            <div class="div-block-318">
                <div><img src="{{ asset('img/Nuage-rose.png') }}" width="52"></div>
                <p class="text-block-320">Nom produit...</p>
                <a href="#" class="link-block-38 w-inline-block">
                    <div class="text-block-319">Découvrir</div>
                </a>
            </div>
        </div>
    </div>
    <div class="">
        <div class="playlist2">
            <p class="text-Playlist">La playlist</p>
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
                                <img class="imgLiberti" src="{{ asset('img/icones/Mu-badge22.png') }}" alt="">
                            </div>
                            <div class="mindCard">
                                <div class="blockImgMind">
                                    <img class="" src="{{ asset('img/mid1.png') }}" alt="">
                                </div>
                                <div class="block3">
                                    <p class="mindText">Mind</p>
                                    <p class="day">Publié il y à 2 jours</p>
                                    <!--                                     <div class="d-flex justify-content-between">
                                                                                    <p class="numberviewsSuggestion">1230</p>
                                                                                    <img class="oeil-1" src="{{ asset('img/icones/oeil-1.png') }}" alt="">

                                                                                </div>
                                                        -->                                        </div>
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
                                <img class="imgLiberti" src="{{ asset('img/icones/Mu-badge22.png') }}" alt="">
                            </div>
                            <div class="mindCard">
                                <div class="blockImgMind">
                                    <img class="" src="{{ asset('img/auteurCard2.png') }}" alt="">
                                </div>
                                <div class="block3">
                                    <p class="mindText">Mind</p>
                                    <p class="day">Publié il y à 2 jours</p>
                                    <!--   <div class="d-flex justify-content-between">
                                           <p class="numberviewsSuggestion">1230</p>
                                           <img class="oeil-1" src="{{ asset('img/icones/oeil-1.png') }}" alt="">
                                       </div>-->
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
                                <img class="imgLiberti" src="{{ asset('img/icones/Mu-badge22.png') }}" alt="">
                            </div>
                            <div class="mindCard">
                                <div class="blockImgMind">
                                    <img class="" src="{{ asset('img/auteurCard3.png') }}" alt="">
                                </div>
                                <div class="block3">
                                    <p class="mindText">Mind</p>
                                    <p class="day">Publié il y à 2 jours</p>
                                    <!-- <div class="d-flex justify-content-between">
                                         <p class="numberviewsSuggestion">1230</p>
                                         <img class="oeil-1" src="{{ asset('img/icones/oeil-1.png') }}" alt="">
                                     </div>-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="playlist2">
            <p class="text-Playlist">Les dernières nouvelles</p>
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
                                <img class="imgLiberti" src="{{ asset('img/icones/Mu-badge22.png') }}" alt="">
                            </div>
                            <div class="mindCard">
                                <div class="blockImgMind">
                                    <img class="" src="{{ asset('img/mid1.png') }}" alt="">
                                </div>
                                <div class="block3">
                                    <p class="mindText">Mind</p>
                                    <p class="day">Publié il y à 2 jours</p>
                                    <!--                                     <div class="d-flex justify-content-between">
                                                                                    <p class="numberviewsSuggestion">1230</p>
                                                                                    <img class="oeil-1" src="{{ asset('img/icones/oeil-1.png') }}" alt="">

                                                                                </div>
                                                        -->                                        </div>
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
                                <img class="imgLiberti" src="{{ asset('img/icones/Mu-badge22.png') }}" alt="">
                            </div>
                            <div class="mindCard">
                                <div class="blockImgMind">
                                    <img class="" src="{{ asset('img/auteurCard2.png') }}" alt="">
                                </div>
                                <div class="block3">
                                    <p class="mindText">Mind</p>
                                    <p class="day">Publié il y à 2 jours</p>
                                    <!--   <div class="d-flex justify-content-between">
                                           <p class="numberviewsSuggestion">1230</p>
                                           <img class="oeil-1" src="{{ asset('img/icones/oeil-1.png') }}" alt="">
                                       </div>-->
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
                                <img class="imgLiberti" src="{{ asset('img/icones/Mu-badge22.png') }}" alt="">
                            </div>
                            <div class="mindCard">
                                <div class="blockImgMind">
                                    <img class="" src="{{ asset('img/auteurCard3.png') }}" alt="">
                                </div>
                                <div class="block3">
                                    <p class="mindText">Mind</p>
                                    <p class="day">Publié il y à 2 jours</p>
                                    <!-- <div class="d-flex justify-content-between">
                                         <p class="numberviewsSuggestion">1230</p>
                                         <img class="oeil-1" src="{{ asset('img/icones/oeil-1.png') }}" alt="">
                                     </div>-->
                                </div>
                            </div>
                        </div>
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

