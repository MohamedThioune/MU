@extends('layouts.app')

@section('content')
<!--<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-info">
                <div class="panel-heading">{{ __('Login') }}</div>

                <div class="panel-body">
                    <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
-->
<div>
    <div class="section-2">
        <div class="container-6 w-container">
            <div class="div-block-15">
                <img src="{{ asset('img/smuuse-logo-txt-blck-©-.png') }}" ></div>
            <div>
                <div class="text-block-4">As Salaaamou alaykouuum !!!</div>
                <div class="text-block-5">Bienvenue sur Smuuse !<br>La plateforme vidéo des musulmans.</div>
            </div>
        </div>
    </div>
    <div class="pad">
        <div class="container-2 w-container">
            <div class="block-element1">
                <img src=" {{ asset('img/Mu-3-pad-3d-mix2x.png') }}" >
            </div>
            <div class="div-block-4">
                <div class="form-block w-form">
                    <form class="form-group form"  method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                        @csrf
                        <div class="w-100">
                            <input id="email" type="email" placeholder="E-mail ou téléphone" class="text-field w-input form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required >

                            @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="w-100">
                            <input id="password" type="password" placeholder="Mot de passe" class="text-field w-input form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                            @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <button type="submit" class="btn submit-button w-button">
                            {{ __('Connexion') }}
                        </button>
                        <div class="text-center">
                            <a class="link-2" href="{{ route('password.request') }}">
                                {{ __('Mot de passe oublié ?') }}
                            </a>
                        </div>
                        <div class="link-block w-inline-block">
                            <p class="text-block-6">Tu n&#x27;as pas encore de compte ?</p>
                        </div>
                        <div class="div-block-6 text-center">
                            <a href="{{ route('register') }}" class="text-block-7"><b>Bismillah </b> <br> <span class="text-block-9">Je rejoins ma communauté</span></a>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="copy-right">
        <div class="text-block-201">© 2021 Smuuse.  All Rights Reserved.</div>
    </div>
</div>
@endsection