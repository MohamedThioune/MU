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
            <div class="like-notication2">
                <button class="btn btnNote">
                    <img src="{{ asset('img/Image-5.png') }}" alt="">
                </button>
                <button class="btn btnNote">
                    <img src="{{ asset('img/Image-6.png') }}" alt="">
                </button>
            </div>
        </div>
        <div class="imgPubBlock">
            <img src="{{ asset('img/Mu-bandeau-Pub.jpg') }}" alt="">
        </div>
    </div>
    <p class="text-block-350">6 notifications</p>
    <div class="div-block-406">
        <div class="div-block-407">
            <div class="div-block-414">
                <div class="div-block-412">
                    <div class="vignette">
                        <img src="{{ asset('img/Mu-video-format-photo-phone-.jpg') }}"  class="image-135">
                    </div>
                    <div class="div-block-410">
                        <div class="text-block-394">This is some text inside of a div block.<br>sur deux lignes</div>
                        <div class="text-block-396">Publier il y a 2 jours</div>
                    </div>
                </div>
                <div class="div-block-413">
                    <div class="div-block-409">
                        <img src="{{ asset('img/Mu-bull-profil-sebastiaan-stam.jpg') }}" alt="" class="image-136">
                    </div>
                    <div class="text-block-395">Chaine name</div>
                </div>
            </div>
            <button class="points-vertical">
                <div class="div-block-411"></div>
                <div class="div-block-411"></div>
                <div class="div-block-411"></div>
            </button>
        </div>
        <div class="div-block-407">
            <div class="div-block-414">
                <div class="div-block-412">
                    <div class="vignette">
                        <img src="{{ asset('img/Mu-video-format-old-lady.jpg') }}"  alt="" class="image-135">
                    </div>
                    <div class="div-block-410">
                        <p class="text-block-394">This is some text inside of a div block.<br>sur deux lignes</p>
                        <p class="text-block-396">Publier il y a 2 jours</p>
                    </div>
                </div>
                <div class="div-block-413">
                    <div class="div-block-409">
                        <img src="{{ asset('img/Mu-bull-profil-jill-burrow.jpg') }}" alt="" class="image-136">
                    </div>
                    <p class="text-block-395">Chaine name</p>
                </div>
            </div>
            <button class="points-vertical">
                <div class="div-block-411"></div>
                <div class="div-block-411"></div>
                <div class="div-block-411"></div>
            </button>
        </div>
        <div class="div-block-407">
            <div class="div-block-414">
                <div class="div-block-412">
                    <div class="vignette">
                        <img src="{{ asset('img/Mu-video-format-phone.jpg') }}" alt="" class="imge135">
                    </div>
                    <div class="div-block-410">
                        <p class="text-block-394">This is some text inside of a div block.<br>sur deux lignes</p>
                        <p class="text-block-396">Publier il y a 2 jours</p>
                    </div>
                </div>
                <div class="div-block-413">
                    <div class="div-block-409">
                        <img src="{{ asset('img/Mu-bull-profil-karolina-grabowska-bonbon.jpg') }}" alt="" class="image-136">
                    </div>
                    <p class="text-block-395">Chaine name</p>
                </div>
            </div>
            <button class="points-vertical">
                <div class="div-block-411"></div>
                <div class="div-block-411"></div>
                <div class="div-block-411"></div>
            </button>
        </div>
        <div class="div-block-407">
            <div class="div-block-414">
                <div class="div-block-412">
                    <div class="vignette">
                        <img src="{{ asset('img/Mu-video-format-sista-fone.jpg') }}" class="image-135">
                    </div>
                    <div class="div-block-410">
                        <div class="text-block-394">This is some text inside of a div block.<br>sur deux lignes</div>
                        <div class="text-block-396">Publier il y a 2 jours</div>
                    </div>
                </div>
                <div class="div-block-413">
                    <div class="div-block-409">
                        <img src="{{ asset('img/Mu-bull-profil-pixabay-161153.jpg') }}"  alt="" class="image-136">
                    </div>
                    <p class="text-block-395">Chaine name</p>
                </div>
            </div>
            <button class="points-vertical">
                <div class="div-block-411"></div>
                <div class="div-block-411"></div>
                <div class="div-block-411"></div>
            </button>
        </div>
        <div class="div-block-407">
            <div class="div-block-414">
                <div class="div-block-412">
                    <div class="vignette">
                        <img src="{{ asset('img/Mu-video-format-2-man.jpg') }}"  alt="" class="image-135">
                    </div>
                    <div class="div-block-410">
                        <p class="text-block-394">This is some text inside of a div block.<br>sur deux lignes</p>
                        <p class="text-block-396">Publier il y a 2 jours</p>
                    </div>
                </div>
                <div class="div-block-413">
                    <div class="div-block-409">
                        <img src="{{ asset('img/Mu-bull-profil-yender-fonseca.jpg') }}" width="43" alt="" class="image-136">
                    </div>
                    <p class="text-block-395">Chaine name</p>
                </div>
            </div>
            <button class="points-vertical">
                <div class="div-block-411"></div>
                <div class="div-block-411"></div>
                <div class="div-block-411"></div>
            </button>
        </div>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{{asset('js/fixeElement.js')}}"></script>
    @endsection
</body>