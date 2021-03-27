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
    <div class="div-block-201">
        <form type="" class="infos">
            <div class="box-infos">
                <div class="infos-nom">
                    <p class="text-block-228">NOM</p>
                    <div class="div-block-209">
                        <input type="text" class="form-control  text-block-229" id="nom"  placeholder="Mouhamed">
                    </div>
                </div>
                <div class="infos-1">
                    <p class="text-block-228">PRENOM</p>
                    <div class="div-block-209">
                        <input type="text" class="form-control  text-block-229" id="prenom"  placeholder="prenom">
                    </div>
                </div>
                <div class="infos-1">
                    <p class="text-block-228">ANNIVERSAIRE</p>
                    <div class="div-block-209">
                        <input type="text" class="form-control  text-block-229" id="dateNaissance"  placeholder="17 Rajab 1601">
                    </div>
                </div>
                <div class="infos-1">
                    <p class="text-block-228">GENRE</p>
                    <div class="div-block-209">
                        <p class="text-block-229">Homme</p>
                    </div>
                </div>
                <div class="infos-1">
                    <p class="text-block-228">MOT DE PASSSE</p>
                    <div class="div-block-209">
                        <input type="text" class="form-control  text-block-229" id="dateNaissance"  placeholder="......">
                    </div>
                </div>
            </div>
            <div class="photo-profil">
                <div>
                    <div class="div-block-211">
                        <p class="text-block-228">PHOTO</p>
                        <img src="{{ asset('img/Mu-bull-profil-taryn-elliott.jpg') }}" loading="lazy" alt="" class="image-92">
                        <a href="{{ url('parametrePhoto') }}" class="w-inline-block">
                            <img src="{{ asset('img/Mu-fleche-nav-blanc.svg') }}" loading="lazy" alt="" class="image-91">
                        </a>
                    </div>
                </div>
            </div>
            <div class="box-infos">
                <div class="infos-1">
                    <p class="text-block-228">ADRESSE</p>
                    <div class="div-block-209">
                        <input type="text" class="form-control  text-block-229" id="dateNaissance"  placeholder="Meyrin Village 2 1217">
                    </div>
                </div>
            </div>
        </form>
        <div class="div-block-212">
            <div class="defails-box">
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
                    <button class="text-block-235">Femme</button>
                    <button class="text-block-236">Homme</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="{{asset('js/fixeElement.js')}}"></script>
@endsection
</body>

