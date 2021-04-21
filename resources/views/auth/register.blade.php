@extends('layouts.app')

@section('content')
@php if(isset($_COOKIE['lang'])) App::setLocale($_COOKIE['lang']); @endphp

<div class="body-4">
    <img src="{{ asset('img/Doobl-buble.png') }} "  alt="" class="bull2">
    <img src="{{ asset('img/Buble-400.png') }}" class="bull">
    <div class="section-5">
        <div class="container-7 w-container">
            <div class="logo section96">
            <a href="{{route('home')}}"><img src="{{ asset('img/smuuse-logo-txt-blck-©-.png') }}"  class="image-3"></a>
            </div>
            <div class="div-block-16">
                @if(!session('lang')) 
                <div><a href="{{route('language.choose', 'fr')}}" class="btn btn-danger"> Change langage : Continuer en français &#x1F1EB;&#x1F1F7;</a></div>
                @else
                    @if(session('lang') == "en")
                    <div><a href="{{route('language.choose', 'fr')}}" class="btn btn-default"> Change langage : Continuer en français &#x1F1EB;&#x1F1F7;</a></div>
                    @else
                    <div><a href="{{route('language.choose', 'en')}}" class="btn btn-danger"> Changer de langue : Continue in english &#x1F1FA;&#x1F1F8;</a></div>
                    @endif
                @endif
                <br>
                <div class="text-block-205">{{__('I join my community')}}</div>
            </div>
            <div class="text-block-216">{{__('register.create')}}<br>{{__('register.hassanate')}}</div>
            <div class="w-form">

                <form method="POST" class="form-2" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                    @csrf
                    @include('adminlte-templates::common.errors')
                    <div class="">
                        <input id="email" type="email" placeholder="{{ __('register.email') }}" class="form-control text-field-3 w-input{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                        @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif
                    </div>

                    <div>
                        <label for="sex" class="field-label-3">{{__('register.ami')}} </label>
                        <label class="radio-button-field w-radio"><input type="radio"  id="radio" name="sex" value="0" class="w-form-formradioinput radio-button-2 w-radio-input {{ $errors->has('sex') ? ' is-invalid' : '' }}" ><span class="radio-button-label w-form-label">{{__('register.femme')}}</span></label>
                        <label class="radio-button-field-2 w-radio"><input type="radio"  id="radio-2" name="sex" value="1" class="w-form-formradioinput radio-button w-radio-input {{ $errors->has('sex') ? ' is-invalid' : '' }}"><span class="radio-button-label-2 w-form-label">{{__('register.homme')}}</span></label>
                        @if ($errors->has('sex'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('sex') }}</strong>
                        </span>
                        @endif
                    </div>

                    <div class="">
                        <input id="name" type="text" class=" text-field-4 w-input form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{__('Pseudonyme')}}" name="name" value="{{ old('name') }}" required>
                        @if ($errors->has('name'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                        @endif
                    </div>

                    <div class="">
                        <input id="name" type="text" class=" text-field-4 w-input form-control{{ $errors->has('firstName') ? ' is-invalid' : '' }}" placeholder="{{__('First name')}}" name="firstName" value="{{ old('firstName') }}" required>
                        @if ($errors->has('firstName'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('firstName') }}</strong>
                        </span>
                        @endif
                    </div>

                    <div class="">
                        <input id="name" type="text" class=" text-field-4 w-input form-control{{ $errors->has('lastName') ? ' is-invalid' : '' }}" placeholder="{{__('Last name')}}" name="lastName" value="{{ old('lastName') }}" required>
                        @if ($errors->has('lastName'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('lastName') }}</strong>
                        </span>
                        @endif
                    </div>

                    <div class="">
                        <input id="name" type="text" class=" text-field-4 w-input form-control{{ $errors->has('pays') ? ' is-invalid' : '' }}" placeholder="{{__('Country')}}" name="pays" value="{{ old('pays') }}" required>

                        @if ($errors->has('pays'))
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('pays') }}</strong>
                                    </span>
                        @endif
                    </div>

                    <div class="">
                        <input id="age" type="number" class=" text-field-4 w-input form-control{{ $errors->has('age') ? ' is-invalid' : '' }}" placeholder="Age" name="age" value="{{ old('age') }}" required>

                        @if ($errors->has('age'))
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('age') }}</strong>
                                    </span>
                        @endif
                    </div>
                    <div class="">
                        <input id="password" type="password" placeholder="{{__('Password')}}" class="text-field-4 w-input form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                        @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                    </span>
                        @endif
                    </div>

                    <div class="">
                        <input id="password-confirm" type="password" placeholder="{{__('Confirm Password')}}" class="form-control text-field-4 w-input" name="password_confirmation" required>
                    </div>

                    <div class="">
                        <button type="submit" class="btn submit-button-2 w-button">
                            {{ __('Register') }}
                        </button>
                    </div>

                    <!--                <div class="form-group row">
                                    <label for="sex" class="col-md-4 col-form-label text-md-right">Sex</label>

                                    <div class="col-md-6">

                                        <select name="sex" id="sex" class="form-control{{ $errors->has('sex') ? ' is-invalid' : '' }}">
                                            <option value="1">Masculin</option>
                                            <option value="0">Féminin</option>
                                        </select>

                                        @if ($errors->has('sex'))
                                        <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('sex') }}</strong>
                                                    </span>
                                        @endif
                                    </div>
                                </div>
                    -->

                </form>

            </div>
        </div>
        <a href="multi-account.html" class="w-inline-block"><img src="images/Mu-bull-gris-.png" loading="lazy" width="81" alt=""></a>
    </div>
    <div>
        <div class="copy-right">
            <div class="text-block-201">© 2021 Smuuse.  All Rights Reserved.</div>
        </div>
    </div>
</div>
<!--<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">{{ __('Register') }}</div>

                <div class="panel-body">
                    <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="sex" class="col-md-4 col-form-label text-md-right">Sex</label>

                            <div class="col-md-6">

                                <select name="sex" id="sex" class="form-control{{ $errors->has('sex') ? ' is-invalid' : '' }}">
                                    <option value="1">Masculin</option>
                                    <option value="0">Féminin</option>
                                </select>

                                @if ($errors->has('sex'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('sex') }}</strong>
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
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>-->
@endsection