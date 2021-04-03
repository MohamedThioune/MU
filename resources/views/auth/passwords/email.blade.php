<!DOCTYPE html>
<html>
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
    <link rel="stylesheet" href="../css/mu-dev.css">
    <link rel="stylesheet" href="../css/webflow.css">
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/mu-dev.webflow.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    @php App::setLocale(session('lang')); @endphp

</head>
<body class="body-4">
<img src="{{ asset('img/Doobl-buble.png') }} "  alt="" class="bull2">
<img src="{{ asset('img/Buble-400.png') }}" class="bull">
<div class="section-5">
    <div class="container-7 w-container">
        <div class="logo section96">
            <a href="{{route('home')}}"><img src="{{ asset('img/smuuse-logo-txt-blck-©-.png') }}"  class="image-3"></a>
        </div>
        <div class="div-block-16">
            <div class="text-block-205">{{__('Forgot Your Password?')}} </div>
            <div class="text-block-204">{{__('Says')}} &quot;La ilaha illa Allah&quot;<br>&quot;{{__('There is no God but Allah')}}</div>
            <div class="text-block-207">{{__('This is the most beautiful of words')}}</div>
            <div class="div-block-17">
                <div class="text-block-209">{{__('Enter your email address ')}}<br>{{__('and receive instructions')}}<br>{{__('to reset your password')}}</div>
            </div>
        </div>
        <form method="POST" action="{{ route('password.email') }}" aria-label="{{ __('Reset Password') }}" >
            @include('adminlte-templates::common.errors')
            @csrf
            <div class="panel-body">
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
                @endif
                <input type="email" class="text-field w-input{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"  placeholder="E-mail " id="email" value="{{ old('email') }}" required>
                <button type="submit" class="submit-button w-button">Bismillah</button>
                @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                @endif
        </form>

        <div class="div-block-19">
            <div class="text-block-214">{{__('Don\'t you have an account yet ?')}}</div>
        </div>
        <a data-w-id="bf7b3e52-289d-2a8b-0bd9-f6996ef1c3d1" href="{{ route('register') }}" class="rejoindre-vide w-inline-block">
            <div class="text-block-213">BISMILLAH</div>
            <div class="text-block-212">{{__('I join my community')}}</div>
        </a>
    </div>
</div>
<div>
    <div class="copy-right">
        <div class="text-block-201">© 2021 Smuuse.  All Rights Reserved.</div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.1/moment.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
<!-- AdminLTE App -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.3/js/adminlte.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.2/icheck.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.min.js"></script>
<script src="js/menu.js"></script>
<script src="js/app.js"></script>
<script src="js/webflow.js"></script>
</body>
</html>