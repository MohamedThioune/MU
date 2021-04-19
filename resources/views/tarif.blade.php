@extends('layouts.sidbarNavigation')
<html>
<head>
    @section('css')
    <link rel="stylesheet" href="node_modules/swiper/swiper.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <script src="https://kit.fontawesome.com/2def424b14.js" crossorigin="anonymous"></script>
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
<div class="d-block d-flex justify-content-center" style="margin:10%;">
    <div class="card shadow-lg p-3 mb-5 bg-white rounded" >
        <div class="card-body">
            <div class="card-title"> <img src="{{ asset('img/logo-MU.png') }}" width="20" height="20" alt=""> SMUUSE <br>
                <h2><strong>Annuel - Take my rate !</strong></h2>
                <p>
                    Oummati <br>(5 pers.)
                </p>
            </div>
            <form method="post" id="payment-form" action="{{route('tarif')}}">
                @csrf
                <section>
                    <label for="amount">
                        <!-- <span class="input-label">Amount</span> -->
                        <div class="input-wrapper amount-wrapper">
                            <input id="amount" name="amount" type="hidden" min="120" value="120">
                        </div>
                    </label>
                </section>

                <button class="button btn btn-danger" type="submit"><span style="font-weight:bold">Pick up</span></button><br><br>
            </form>
        </div>
    </div>
    <div class="card shadow-lg p-3 mb-5 bg-white rounded" style="margin-left:40px;">

        <div class="card-body">
            <div class="card-title"> <img src="{{ asset('img/logo-MU.png') }}" width="20" height="20" alt=""> SMUUSE <br>
                <h2><strong>Mensuel - Take my rate !</strong></h2>
                <p>
                Oummati<br>(5 pers.)
                </p>
            </div>
            <form method="post" id="payment-form" action="{{route('tarif')}}">
                @csrf
                <section>
                    <label for="amount">
                        <!-- <span class="input-label">Amount</span> -->
                        <div class="input-wrapper amount-wrapper">
                            <input id="amount" name="amount" type="hidden" min="12" value="12">
                        </div>
                    </label>
                </section>

                <button class="button btn btn-danger" type="submit"><span style="font-weight:bold">Pick up</span></button><br><br>
            </form>
        </div>
    </div>

    <div class="card shadow-lg p-3 mb-5 bg-white rounded" style="margin-left:40px;" >

        <div class="card-body">
            <div class="card-title"> <img src="{{ asset('img/logo-MU.png') }}" width="20" height="20" alt=""> SMUUSE <br>
                <h2><strong>Mensuel - Take my rate !</strong></h2>
                <p>
                    Sahaba(Individual)
                </p>
            </div>
            <form method="post" id="payment-form" action="{{route('tarif')}}">
                @csrf
                <section>
                    <label for="amount">
                        <!-- <span class="input-label">Amount</span> -->
                        <div class="input-wrapper amount-wrapper">
                            <input id="amount" name="amount" type="hidden" min="6" value="6">
                        </div>
                    </label>
                </section>
                
                <button class="button btn btn-info" type="submit"><span style="font-weight:bold">Pick up</span></button><br><br>
            </form>
        </div>
    </div>
    <div class="card shadow-lg p-3 mb-5 bg-white rounded" style="margin-left:40px" >

        <div class="card-body">
            <div class="card-title"> <img src="{{ asset('img/logo-MU.png') }}" width="20" height="20" alt=""> SMUUSE <br>
                <h2><strong>Annuel - Take my rate !</strong></h2>
                <p>
                    Sahaba(Individual)
                </p>
            </div>
            <form method="post" id="payment-form" action="{{route('tarif')}}">
                @csrf
                <section>
                    <label for="amount">
                        <!-- <span class="input-label">Amount</span> -->
                        <div class="input-wrapper amount-wrapper">
                            <input id="amount" name="amount" type="hidden" min="60" value="60">
                        </div>
                    </label>
                </section>
                
                <button class="button btn btn-info" type="submit"><span style="font-weight:bold">Pick up</span></button><br><br>
            </form>
        </div>
    </div>
</div>
@endsection

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
 
</body>
