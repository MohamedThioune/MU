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
@php if(isset($_COOKIE['lang'])) App::setLocale($_COOKIE['lang']); @endphp

<div class="globalParametre">
    <div class="pub-bando-connect">
        <div class="info-pub-bando">
            <div class="accroche">
                <a class="accrocheskate" href="">
                    <img class="accrocheskateImg" src="{{ asset('img/Nuage-rose.png') }}" alt="">
                    <p class="link-212"></p>
                </a>
            </div>
            <div class="annonces">
                <p class="text-block-294">Annonces</p>
                <p class="link-229">www.pub-link</p>
                <a href="" class="go w-inline-block text-block-295">{{__('Go !')}}</a>
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
    <div class="menu-content-business webBusiness">
        <a href="#" class="link-26">{{__('Account')}}</a>
        <a href="#" class="link-26">{{__('Personal info.')}}</a>
        <a href="#" class="link-26">{{__('Profile Management')}}</a>
        <a href="#" class="link-26">Facturations</a>
        <a href="#" class="link-26">{{__('Security')}}</a>
    </div>
    <div class="menu-content-business mobBusiness">
        <div class="swiper-container swipeContainermodife1">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <a href="#" class="link-26">{{__('Account')}}</a>
                </div>
                <div class="swiper-slide">
                    <a href="#" class="link-26">{{__('Personal info.')}}</a>
                </div>
                <div class="swiper-slide">
                    <a href="#" class="link-26">{{__('Profile Management')}}</a>
                </div>
                <div class="swiper-slide">
                    <a href="#" class="link-26">Facturations</a>
                </div>
                <div class="swiper-slide">
                    <a href="#" class="link-26">{{__('Security')}}</a>
                </div>
            </div>
        </div>
    </div>
    <div class="div-block-201">
        <form action="{{route('users.parameter')}}" method="POST" class="infos">
            @include('flash::message')
            @include('adminlte-templates::common.errors')
            @csrf
            <div class="box-infos">
                <div class="infos-nom">
                    <p class="text-block-228">{{__('NAME')}}</p>
                    <div class="div-block-209">
                        <input type="text" name="name" class="form-control  text-block-229" id="nom"  placeholder="{{Auth::user()->name}}">
                    </div>
                </div>
                <!-- <div class="infos-1">
                    <p class="text-block-228">PRENOM</p>
                    <div class="div-block-209">
                        <input type="text" class="form-control  text-block-229" id="prenom"  placeholder="prenom">
                    </div>
                </div> -->
                <div class="infos-1">
                    <p class="text-block-228">{{__('ANNIVERSARY')}}</p>
                    <div class="div-block-209">
                        <input type="date" name="date" class="form-control  text-block-229" id="dateNaissance"  placeholder="">
                    </div>
                </div>
                <div class="infos-1">
                    <p class="text-block-228">GENRE</p>
                    @if(Auth::user()->sex = 1)
                    <div class="div-block-209">
                        <p class="text-block-229">{{__('Man')}}</p>
                    </div>
                    @else
                    <div class="div-block-209">
                        <p class="text-block-229">{{__('Woman')}}</p>
                    </div>
                    @endif
                </div>
                <div class="infos-1">
                    <p class="text-block-228">{{__('PASSWORD')}}</p>
                    <div class="div-block-209">
                        <input type="password" name="password" class="form-control  text-block-229" id="dateNaissance"  placeholder="......">
                    </div>
                </div>
            </div>
            <div class="photo-profil">
                <div>
                    <div class="div-block-211">
                        <p class="text-block-228">PHOTO</p>
                        <img src="{{ asset('img') }}/{{Auth::user()->photo}}" loading="lazy" alt="" class="image-92">
                        <a href="{{ url('parametrePhoto') }}" class="w-inline-block">
                            <img src="{{ asset('img/Mu-fleche-nav-blanc.svg') }}" loading="lazy" alt="" class="image-91">
                        </a>
                    </div>
                </div>
            </div>
            <div class="box-infos">
                <div class="infos-1">
                    <p class="text-block-228">{{__('ADDRESS')}}</p>
                    <div class="div-block-209">
                        <input type="text" name="adresse" class="form-control  text-block-229" id="dateNaissance"  placeholder="{{Auth::user()->adresse ? Auth::user()->adresse : 'Rue France - Brocante, 7 r Patriarches 75005 Paris'  }}">
                    </div>
                </div>
            </div><br>
            <div class="box-infos" style="border:none;">
            <center><button class="text-block-235" type="submit"><i class="fas fa-sync"></i>{{__('Refresh')}}</button></center>
            </div>
        </form>
        @php
            $date = new hijri();
            $bismi = new hijri();
            $anniversary = strtotime(Auth::user()->date);

            $hajj = explode(",",$date->hijriDate($anniversary));
            $hijri_year = trim($hajj[1]);
            $hijri_month =  explode(" ", $hajj[0])[6];
            $hijri_day = explode(" ", $hajj[0])[5];
            $hijri = $hijri_day ."-". $hijri_month ."-" . $hijri_year;

            $gregorian = explode("-", Auth::user()->date);

            $year =  explode("-", Auth::user()->date);
            $year = $year[0];

            $age = idate('Y') - $year;

            $muslim = explode(",",$bismi->date(null,2,false));
            $muslim_year = trim($muslim[1]);
            $hegir = $muslim_year - $hijri_year;

        @endphp
        <div class="div-block-212">
            <div class="defails-box">
                <p class="text-block-232">{{__('Your date of birth through the Gregorian calendar')}}<br>{{__('and then followed by the one governed by the Muslim calendar')}} <br>{{__('for a corresponding Hegira date"')}} &#x1F447;.</p>
                <div class="div-block-210">
                    <div class="div-block-208">
                        <p class="text-block-231">{{__('Gregorian')}} </p>
                        <p class="text-block-231">{{$gregorian[2]}}-{{$gregorian[1]}}-{{$gregorian[0]}}</p>
                        <p class="text-block-233">Age</p>
                        <div>
                            <p class="text-block-234">{{$age}}</p>
                        </div>
                    </div>
                    <div class="div-block-208">
                        <p class="text-block-230">{{__('Hegierian')}} </p>
                        <p class="text-block-230" style="width:200px">{{$hijri}}</p>
                        <p class="text-block-233">Age</p>
                        <div>
                            <p class="text-block-234">{{$hegir}}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="defails-box">
                <div class="div-block-213">
                    <button class="text-block-235">{{__('Man')}}</button>
                    <button class="text-block-236">{{__('Woman')}}</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="node_modules/swiper/swiper-bundle.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="{{asset('js/fixeElement.js')}}"></script>
<script>
    var swiper = new Swiper('.swiper-container', {
        slidesPerView: 2.7,
        spaceBetween: 3
    });
</script>
@endsection
</body>

