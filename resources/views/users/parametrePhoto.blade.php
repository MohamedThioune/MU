@extends('../layouts.sidbarNavigation')
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
<div class="globalParametre">
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
    <div class="menu-content-business">
        <a href="#" class="link-26">Compte</a>
        <a href="#" class="link-26">info. personnelles</a>
        <a href="#" class="link-26">Gestion des Profils</a>
        <a href="#" class="link-26">Facturations</a>
        <a href="#" class="link-26">Sécurité</a>
    </div>
    <br>
    <h3 style="margin-left:35px; font-weight:bold">Click on the image to make your choice</h3>
    <div class="div-block-202">
        <form type="" class="infos">
            <div class="image-id">
                <div class="choix">
                    <div class="div-block-200"><a href="{{route('users.picture','Mu-bull-profil-pixabay-161153.jpg')}}"><img src="{{ asset('images/uploads/Mu-bull-profil-pixabay-161153.jpg') }}" loading="lazy" alt="" class="image-87"></a></div>
                    <div class="div-block-200"><a href="{{route('users.picture','Mu-bull-profil-taryn-elliott.jpg')}}"><img src="{{ asset('images/uploads/Mu-bull-profil-taryn-elliott.jpg') }}" loading="lazy" alt="" class="image-87"></a></div>
                    <div class="div-block-200"><a href="{{route('users.picture','Mu-bull-profil-jill-wellington.jpg')}}"><img src="{{ asset('images/uploads/Mu-bull-profil-jill-wellington.jpg') }}" loading="lazy" alt="" class="image-87"></a></div>
                    <div class="div-block-200"><a href="{{route('users.picture','Mu-bull-profil-caio-56733.jpg')}}"><img src="{{ asset('images/uploads/Mu-bull-profil-caio-56733.jpg') }}" loading="lazy" alt="" class="image-87"></a></div>
                    <div class="div-block-200"><a href="{{route('users.picture','Mu-bull-profil-karolina-grabowska-bonbon.jpg')}}"><img src="{{ asset('images/uploads/Mu-bull-profil-karolina-grabowska-bonbon.jpg') }}" loading="lazy" alt="" class="image-87"></a></div>
                    <div class="div-block-200"><a href="{{route('users.picture','Mu-bull-profil-anete-lusina.jpg')}}"><img src="{{ asset('images/uploads/Mu-bull-profil-anete-lusina.jpg') }}" loading="lazy" alt="" class="image-87"></a></div>
                    <div class="div-block-200"><a href="{{route('users.picture','Mu-bull-profil-reynaldo-brigworkz-brigantty.jpg')}}"><img src="{{ asset('images/uploads/Mu-bull-profil-reynaldo-brigworkz-brigantty.jpg') }}" loading="lazy" alt="" class="image-87"></a></div>
                    <div class="div-block-200"><a href="{{route('users.picture','Mu-bull-profil-arminas-raudys.jpg')}}"><img src="{{ asset('images/uploads/Mu-bull-profil-arminas-raudys.jpg') }}" loading="lazy" alt="" class="image-87"></a></div>
                    <div class="div-block-200"><a href="{{route('users.picture','Mu-bull-profil-carlos-baeza.jpg')}}"><img src="{{ asset('images/uploads/Mu-bull-profil-carlos-baeza.jpg') }}" loading="lazy" alt="" class="image-87"></a></div>
                    <div class="div-block-200"><a href="{{route('users.picture','Mu-bull-profil-karolina-grabowska-2.jpg')}}"><img src="{{ asset('images/uploads/Mu-bull-profil-karolina-grabowska-2.jpg') }}" loading="lazy" alt="" class="image-87"></a></div>
                    <div class="div-block-200"><a href="{{route('users.picture','Mu-bull-profil-pok-rie-4661201.jpg')}}"><img src="{{ asset('images/uploads/Mu-bull-profil-pok-rie-4661201.jpg') }}" loading="lazy" alt="" class="image-87"></a></div>
                    <div class="div-block-200"><a href="{{route('users.picture','Mu-bull-profil-shams-alam-ansari.jpg')}}"><img src="{{ asset('images/uploads/Mu-bull-profil-shams-alam-ansari.jpg') }}" loading="lazy" alt="" class="image-87"></a></div>
                    <div class="div-block-200"><a href="{{route('users.picture','Mu-bull-profil-belen.jpg')}}"><img src="{{ asset('images/uploads/Mu-bull-profil-belen.jpg') }}" loading="lazy" alt="" class="image-87"></a></div>
                    <div class="div-block-200"><a href="{{route('users.picture','Mu-bull-profil-sebastiaan-stam.jpg')}}"><img src="{{ asset('images/uploads/Mu-bull-profil-sebastiaan-stam.jpg') }}" loading="lazy" alt="" class="image-87"></a></div>
                    <div class="div-block-200"><a href="{{route('users.picture','Mu-bull-profil-engin-akyurt.jpg')}}"><img src="{{ asset('images/uploads/Mu-bull-profil-engin-akyurt.jpg') }}" loading="lazy" alt="" class="image-87"></a></div>
                    <div class="div-block-200"><a href="{{route('users.picture','Mu-bull-profil-karolina-grabowska-2_1.jpg')}}"><img src="{{ asset('images/uploads/Mu-bull-profil-karolina-grabowska-2_1.jpg') }}" loading="lazy" alt="" class="image-87"></a></div>
                    <div class="div-block-200"><a href="{{route('users.picture','Mu-bull-profil-diego-madrigal.jpg')}}"><img src="{{ asset('images/uploads/Mu-bull-profil-diego-madrigal.jpg') }}" loading="lazy" alt="" class="image-87"></a></div>
                    <div class="div-block-200"><a href="{{route('users.picture','Mu-bull-profil-karolina-grabowska.jpg')}}"><img src="{{ asset('images/uploads/Mu-bull-profil-karolina-grabowska.jpg') }}" loading="lazy" alt="" class="image-87"></a></div>
                    <div class="div-block-200"><a href="{{route('users.picture','Mu-bull-profil-jill-burrow.jpg')}}"><img src="{{ asset('images/uploads/Mu-bull-profil-jill-burrow.jpg') }}" loading="lazy" alt="" class="image-87"></a></div>
                    <div class="div-block-200"><a href="{{route('users.picture','Mu-bull-profil-ekrulila.jpg')}}"><img src="{{ asset('images/uploads/Mu-bull-profil-ekrulila.jpg') }}" loading="lazy" alt="" class="image-87"></a></div>
                </div>
            </div>
        </form>
        <!-- <div class="div-block-212">
            <div class="defails-box margin2">
                <p class="text-block-232">Remplis ta date de naissance <br>dans le calendrier grégorien<br>tu auras automatiquement la date hégirienne<br>‍<br>Ton âge s&#x27;affichera aussitôt.</p>
                <div class="div-block-210">
                    <div class="div-block-208">
                        <p class="text-block-231">Grégorienne </p>
                        <p class="text-block-231">00-Mois-Année</p>
                        <p class="text-block-233">Age</p>
                        <div>
                            <p class="text-block-234">36</p>
                        </div>
                    </div>
                    <div class="div-block-208">
                        <p class="text-block-230">Hégierienne </p>
                        <p class="text-block-230">00-Mois-Année</p>
                        <p class="text-block-233">Age</p>
                        <div>
                            <p class="text-block-234">37</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="defails-box">
                <div class="div-block-213">
                    <button class="btn text-block-235">Femme</button>
                    <button class="btn text-block-236">Homme</button>
                </div>
            </div>
        </div> -->
    </div>
</div>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="{{asset('js/fixeElement.js')}}"></script>
@endsection
</body>

