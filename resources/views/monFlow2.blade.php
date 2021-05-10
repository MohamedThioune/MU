@extends('layouts.sidbarNavigation')
<html lang="fr">
<head>
    @section('css')
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <link rel="stylesheet" href="{{asset('swiper/swiper-bundle.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/menu.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    @endsection
</head>
<body class="home-body">
@section('content-play-element')
<div class="contentOneMonFlow">
    <p class="text-block-350">Tous tes informations en un clin d&#x27;œil </p>
    <div class="menu-content-business-copy business-Web">
        <a href="#" class="link-26">Infos</a>
        <a href="#event" class="link-26">Events.</a>
        <a href="#resume" class="link-26">Résumé</a>
        <a href="#Playlist-flow" class="link-26">Playlist</a>
        <a href="#" class="link-26">Offres</a>
    </div>
    <div class="business-MOb">
        <div class="swiper-container swipeContainermodife3">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <a href="#" class="link-26">Infos</a>
                </div>
                <div class="swiper-slide">
                    <a href="#" class="link-26">Events.</a>
                </div>
                <div class="swiper-slide">
                    <a href="{{route('flow')}}" class="link-26">Résumé</a>
                </div>
                <div class="swiper-slide">
                    <a href="#" class="link-26">Offres</a>
                </div>
            </div>
        </div>
    </div>
    <div class="hot-notification-block">
        <div class="div-block-403">
            <p class="text-block-428">Hot notifications</p>
            <p class="text-block-392">Toutes mes notifications</p>
        </div>
        <div class="div-block-367">
            <div class="div-block-476">
                <div class="div-block-391-copy">
                    <div class="div-block-393">
                        <div class="div-block-392">
                            <img src="{{asset('img/Mu-video-format-bike-girl.jpg')}}"class="image-130">
                        </div>
                        <div class="text-hot-flow">
                            <div>
                                <p class="hot-flow-description-txt-2-copy">Je m&#x27;implique dans ma oumma</p>
                                <p class="mb-0">J&#x27;active mon abonnement</p>
                                <div class="like-notication"></div>
                            </div>
                        </div>
                    </div>
                    <a href="#" class="button-35 w-button">Bismillah</a>
                    <p class="text-block-427">Pourquoi activé mon abonnement ?</p>
                </div>
            </div>
            <div class="recondation-video-card">
                <div class="video-vignette-recom">
                    <img src="{{asset('img/Mu-video-format.jpg')}}" class="vignette-video-sugg">
                </div>
                <div class="vignette-vid-info-recom">
                    <div class="div-block-295">
                        <p class="titre-v-c-recom">Titre de la vidéo sur deux les deux ligne si </p>
                        <div class="badge-eval">
                            <img src="{{asset('img/Mu-badge-vide2x.png')}}" class="image-111">
                        </div>
                    </div>
                    <div class="resume-vigne-stat">
                        <div class="bull-name-stat">
                            <a href="asso-flow.html" class="bull-id-acount-recom w-inline-block">
                                <img src="{{asset('img/Mu-bull-profil-arminas-raudys.jpg')}}" class="image-109">
                            </a>
                            <div class="div-block-292">
                                <p class="smuusin-name-recom">Name entier</p>
                                <div>
                                    <p class="publication-info-recom">il y à 2 jours</p>
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
            <div class="hot-notification-copy-copy-copy">
                <div class="hot-green">
                    <img src="{{asset('img/Mu-hot-info.png')}}" class="image-131">
                </div>
                <div class="div-block-391">
                    <div class="div-block-393">
                        <div class="div-block-392">
                            <img src="{{asset('img/Mu-video-format-bike-girl.jpg')}}" class="image-130">
                        </div>
                        <div class="text-hot-flow">
                            <p class="text-block-383">Titre de l&#x27;évenement...</p>
                            <p class="text-block-385">Publier il y a 2h</p>
                            <div>
                                <p class="hot-flow-txt-description">Cours du jeudi reporté<br> à la semaine prochaine </p>
                                <p class="hot-flow-description-txt-2">Inscription sur le site</p>
                                <div class="like-notication">
                                    <div class="div-block-398"><img src="{{asset('img/Image-5.png')}}" loading="lazy" alt=""></div>
                                    <div><img src="{{asset('img/Image-6.png')}}" loading="lazy" width="28" alt=""></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="recommandation">
        <p class="titre-recommandation">Suggestions </p>
        <div class="swiper-container swipeSuggestion">
            <div class="swiper-wrapper">
                <div class=" swiper-slide suggestionSwipe">
                    <div class="recondation-video-card">
                        <div class="video-vignette-recom">
                            <img src="{{asset('img/Mu-video-format-old-lady.jpg')}}" class="vignette-video-sugg">
                        </div>
                        <div class="vignette-vid-info-recom">
                            <div class="div-block-295">
                                <p class="titre-v-c-recom">Titre de la vidéo sur deux les deux ligne si </p>
                                <div class="badge-eval">
                                    <img src="{{asset('img/Mu-badge-vide2x.png')}}" loading="lazy" alt="" class="image-111">
                                </div>
                            </div>
                            <div class="resume-vigne-stat">
                                <div class="bull-name-stat">
                                    <a href="asso-flow.html" class="bull-id-acount-recom w-inline-block">
                                        <img src="{{asset('img/Mu-bull-profil-karolina-grabowska-2.jpg')}}" class="image-109">
                                    </a>
                                    <div class="div-block-292">
                                        <p class="smuusin-name-recom">Name entier</p>
                                        <div>
                                            <p class="publication-info-recom">il y à 2 jours</p>
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
                </div>
                <div class=" swiper-slide suggestionSwipe">
                    <div class="recondation-video-card">
                        <div class="video-vignette-recom">
                            <img src="{{asset('img/Mu-video-format-sista-fone.jpg')}}" class="image-108 vignette-video-sugg">
                        </div>
                        <div class="vignette-vid-info-recom">
                            <div class="div-block-295">
                                <p class="titre-v-c-recom">Coucou les filles<br>‍</p>
                                <div class="badge-eval">
                                    <img src="{{asset('img/Mu-badge-vide2x.png')}}" loading="lazy" alt="" class="image-111">
                                </div>
                            </div>
                            <div class="resume-vigne-stat">
                                <div class="bull-name-stat">
                                    <div class="bull-id-acount-recom">
                                        <img src="{{asset('img/Mu-bull-profil-reynaldo-brigworkz-brigantty.jpg')}}" class="image-109">
                                    </div>
                                    <div class="div-block-292">
                                        <p class="smuusin-name-recom">Name entier</p>
                                        <div>
                                            <p class="publication-info-recom">il y à 2 jours</p>
                                        </div>
                                        <div class="div-block-294">
                                            <p class="text-block-301">100k</p>
                                            <div class="div-block-293">
                                                <img src="{{asset('img/Mu-eye-lune-3333332x.png')}}" alt="" class="image-110">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" swiper-slide suggestionSwipe">
                    <div class="recondation-video-card">
                        <div class="video-vignette-recom">
                            <img src="{{asset('img/Mu-video-format-lady-phone.jpg')}}" alt="" class="image-108 vignette-video-sugg">
                        </div>
                        <div class="vignette-vid-info-recom">
                            <div class="div-block-295">
                                <p class="titre-v-c-recom">Titre de la vidéo sur deux les deux ligne si </p>
                                <div class="badge-eval">
                                    <img src="{{asset('img/Mu-badge-vide2x.png')}}" loading="lazy" alt="" class="image-111">
                                </div>
                            </div>
                            <div class="resume-vigne-stat">
                                <div class="bull-name-stat">
                                    <div class="bull-id-acount-recom">
                                        <img src="{{asset('img/Mu-bull-profil-karolina-grabowska-2_1.jpg')}}" class="image-109">
                                    </div>
                                    <div class="div-block-292">
                                        <p class="smuusin-name-recom">Name entier</p>
                                        <div>
                                            <p class="publication-info-recom">il y à 2 jours</p>
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
                </div>
                <div class=" swiper-slide suggestionSwipe">
                    <div class="recondation-video-card">
                        <div class="video-vignette-recom">
                            <img src="{{asset('img/Mu-video-format-bike-girl.jpg')}}" class="image-108 vignette-video-sugg">
                        </div>
                        <div class="vignette-vid-info-recom">
                            <div class="div-block-295">
                                <p class="titre-v-c-recom">Titre de la vidéo sur deux les deux ligne si </p>
                                <div class="badge-eval">
                                    <img src="{{asset('img/Mu-badge-vide2x.png')}}" loading="lazy" alt="" class="image-111">
                                </div>
                            </div>
                            <div class="resume-vigne-stat">
                                <div class="bull-name-stat">
                                    <div class="bull-id-acount-recom">
                                        <img src="{{asset('img/Mu-bull-profil-jill-burrow.jpg')}}" class="image-109">
                                    </div>
                                    <div class="div-block-292">
                                        <p class="smuusin-name-recom">Name entier</p>
                                        <div>
                                            <p class="publication-info-recom">il y à 2 jours</p>
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
                </div>
            </div>
        </div>
    </div>
    <div id="Playlist-flow" class="playlist">
        <div>
            <p class="titre-asso-video-all">La playlist</p>
        </div>
        <div class="swiper-container swipeSuggestion">
            <div class="swiper-wrapper">
                <div class=" swiper-slide suggestionSwipe">
                    <div class="recondation-video-card">
                        <div class="video-vignette-recom">
                            <img src="{{asset('img/Mu-video-format-old-lady.jpg')}}" class="vignette-video-sugg">
                        </div>
                        <div class="vignette-vid-info-recom">
                            <div class="div-block-295">
                                <p class="titre-v-c-recom">Titre de la vidéo sur deux les deux ligne si </p>
                                <div class="badge-eval">
                                    <img src="{{asset('img/Mu-badge-vide2x.png')}}" loading="lazy" alt="" class="image-111">
                                </div>
                            </div>
                            <div class="resume-vigne-stat">
                                <div class="bull-name-stat">
                                    <div class="bull-id-acount-recom">
                                        <img src="{{asset('img/Capture-d’écran-2021-03-04-à-12.34.15.png')}}" class="image-109">
                                    </div>
                                    <div class="div-block-292">
                                        <p class="smuusin-name-recom">Name entier</p>
                                        <div>
                                            <p class="publication-info-recom">il y à 2 jours</p>
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
                </div>
                <div class=" swiper-slide suggestionSwipe">
                    <div class="recondation-video-card">
                        <div class="video-vignette-recom">
                            <img src="{{asset('img/Mu-video-format-sista-fone.jpg')}}" class="image-108 vignette-video-sugg">
                        </div>
                        <div class="vignette-vid-info-recom">
                            <div class="div-block-295">
                                <p class="titre-v-c-recom">Coucou les filles</p>
                                <div class="badge-eval">
                                    <img src="{{asset('img/Mu-badge-vide2x.png')}}" loading="lazy" alt="" class="image-111">
                                </div>
                            </div>
                            <div class="resume-vigne-stat">
                                <div class="bull-name-stat">
                                    <div class="bull-id-acount-recom">
                                        <img src="{{asset('img/Mu-fleur-color2x.png')}}" class="image-109">
                                    </div>
                                    <div class="div-block-292">
                                        <p class="smuusin-name-recom">Name entier</p>
                                        <div>
                                            <p class="publication-info-recom">il y à 2 jours</p>
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
                </div>
                <div class=" swiper-slide suggestionSwipe">
                    <div class="recondation-video-card">
                        <div class="video-vignette-recom">
                            <img src="{{asset('img/Mu-video-format-lady-phone.jpg')}}" class="image-108 vignette-video-sugg">
                        </div>
                        <div class="vignette-vid-info-recom">
                            <div class="div-block-295">
                                <p class="titre-v-c-recom">Titre de la vidéo sur deux les deux ligne si </p>
                                <div class="badge-eval">
                                    <img src="{{asset('img/Mu-badge-vide2x.png')}}" loading="lazy" alt="" class="image-111">
                                </div>
                            </div>
                            <div class="resume-vigne-stat">
                                <div class="bull-name-stat">
                                    <div class="bull-id-acount-recom">
                                        <img src="{{asset('img/Mu-bull-profil-karolina-grabowska-2_1.jpg')}}" class="image-109">
                                    </div>
                                    <div class="div-block-292">
                                        <p class="smuusin-name-recom">Name entier</p>
                                        <div>
                                            <p class="publication-info-recom">il y à 2 jours</p>
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
                </div>
                <div class=" swiper-slide suggestionSwipe">
                    <div class="recondation-video-card">
                        <div class="video-vignette-recom">
                            <img src="{{asset('img/Mu-video-format-bike-girl.jpg')}}" class="image-108 vignette-video-sugg">
                        </div>
                        <div class="vignette-vid-info-recom">
                            <div class="div-block-295">
                                <p class="titre-v-c-recom">Titre de la vidéo sur deux les deux ligne si </p>
                                <div class="badge-eval">
                                    <img src="{{asset('img/Mu-badge-vide2x.png')}}" class="image-111">
                                </div>
                            </div>
                            <div class="resume-vigne-stat">
                                <div class="bull-name-stat">
                                    <div class="bull-id-acount-recom">
                                        <img src="{{asset('img/Mu-bull-profil-jill-burrow.jpg')}}" class="image-109">
                                    </div>
                                    <div class="div-block-292">
                                        <p class="smuusin-name-recom">Name entier</p>
                                        <div>
                                            <p class="publication-info-recom">il y à 2 jours</p>
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
                </div>
            </div>
        </div>
    </div>
    <div class="chaine-vu">
        <div>
            <p class="text-block-353-copy">Voilà la chaîne que tu consultes le plus</p>
        </div>
        <div class="div-block-367-copy">
            <div class="bull-chaine">
                <img src="{{asset('img/Mu-bull-profil-reynaldo-brigworkz-brigantty.jpg')}}" class="image-125">
            </div>
            <div class="div-block-368">
                <p class="text-block-362">Nom de la chaine</p>
                <div class="div-block-371">
                    <p class="text-block-363">100 k</p>
                    <p class="text-block-345">Abonnés</p>
                </div>
                <p class="text-block-364">34 Publications</p>
                <div class="text-block-366">
                    <a href="#" class="link-28">Voir la chaîne</a>
                </div>
            </div>
            <div class="back-subscrib-bar">
                <div class="chaine">
                    <a class="btnSubscripeNotif" href="">
                        <div class="btn div-block-386">
                            <img src="{{ asset('img/Mu-coeur-blanc.svg') }}" class="imgCoeurBlanc" width="23" alt="">
                        </div>
                        <div>S'abonner</div>
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
    </div>
    <div id="event" class="big-event">
        <div class="text-block-353">Les prochains événements </div>
        <div class="div-block-375">
            <div class="div-block-373">
                <div class="div-block-372">
                    <img src="{{asset('img/Groupe-9262x.png')}}" class="image-127">
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
<!--   partie time-shield-->





</div>
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('bootstrap/bootstrap.min.js')}}"></script>
<script src="{{asset('swiper/swiper-bundle.min.js')}}"></script>
<script>
    var swiper = new Swiper('.swipeSuggestion', {
        slidesPerView: 4,
        spaceBetween: 10,
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
</script>
<script>
    var swiper = new Swiper('.swipeContainermodife3', {
        slidesPerView: 4,
        spaceBetween: 10,
        // Responsive breakpoints
        breakpoints: {

            // when window width is <= 320px
            320: {
                slidesPerView: 3.6,
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
</script>

<script src="{{asset('js/fixeElement.js')}}"></script>
@endsection
</body>
