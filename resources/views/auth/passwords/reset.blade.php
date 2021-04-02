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
    <link rel="stylesheet" href="{{asset('../css/mu-dev.css')}}">
    <link rel="stylesheet" href="{{asset('../css/webflow.css')}}">
    <link rel="stylesheet" href="{{asset('../css/normalize.css')}}">
    <link rel="stylesheet" href="{{asset('../css/mu-dev.webflow.css')}}">
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
            <div class="text-block-205">{{ __('Reset Password') }}</div>
            <div class="div-block-17">
                <div class="text-block-209">{{__('Enter your new password')}}</div>
            </div>
        </div>
        <form method="POST" action="{{ route('password.request') }}" aria-label="{{ __('Reset Password') }}">
          
            @include('adminlte-templates::common.errors')
            @csrf
            <div class="form-group row">
                <div class="col-md-12">
                    <input type="hidden" name="token" value="{{ $token }}"  required>

                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $email ?? old('email') }}" placeholder = "{{__('E-mail')}}" required autofocus>

                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-12">
                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="{{__('Password')}}" required>

                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group row">

                <div class="col-md-12">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="{{__('Confirm Your Password')}}"required>
                </div>
            </div>

            <button type="submit" style="background:none;"  data-w-id="bf7b3e52-289d-2a8b-0bd9-f6996ef1c3d1" class="rejoindre-vide w-inline-block"class="col-md-6 offset-md-4">
                <div class="text-block-213">BISMILLAH</div>    
                <div class="text-block-212">{{ __('Reset Password') }}</div>
            </button>
        </form>
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
