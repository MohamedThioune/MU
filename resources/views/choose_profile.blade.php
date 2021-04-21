<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="target-densitydpi=device-dpi, initial-scale=1.0, user-scalable=no" />

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Theme style -->

    <link rel="stylesheet" href="../css/mu-dev.css">
    <link rel="stylesheet" href="../css/webflow.css">
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/mu-dev.webflow.css">

    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/css/bootstrap-datetimepicker.min.css">
    @php if(isset($_COOKIE['lang'])) App::setLocale($_COOKIE['lang']); @endphp
</head>

<body class="sidebar-mini">
<div class="wrapper">
<div class="body-5">
    <div class="container-fluid">
        <div class="section-6">
            <a href="index.html" class="logo w-inline-block"><img src="{{ asset('img/smuuse-logo-txt-blck-©-.png') }}"   alt="" class="image-3"></a>
            <div class="gotoBlock">
                <img class="flecheBlanc " src="{{ asset('img/icones/fleche-nav-blanc.svg') }}" alt="">
                <img src="{{ asset('img/logo-MU.png') }}" alt="">
            </div>
        </div>

    </div> 
    <div class="section-7">
        <div class="w-container">
            <div class="text-block-220">As Salamou&#x27;alaykoum,<br>{{__('choose your profile')}}</div>
            @include('flash::message')
            <div class="div-block-20">                
                <div class="big-bull">
                    @php
                        $profil = DB::Table('users')->select('profile.*')
                        ->join('profile', 'users.id', 'profile.user_id')
                        ->where('users.id', Auth::id())
                        ->first();
                    @endphp
                    <a href="{{ route('connected', [$profil->id])}}" class="link-block-2 w-inline-block">
                        <img src="" alt="">
                    </a>
                    <div class="text-block-emir"> {{$profil->name}} </div>
                    <div class="text-block-219">
                        @if(count($profiles) < 4)
                        <button class="btn btn-add-profile link-4" data-toggle="modal" data-target="#exampleModal"style="color:white;">{{__('Add profile')}}</button>
                        @endif
                        <!-- <a href="{{route('profiles.index')}}" class="link-4">Gérer les profils</a> -->

                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Add New Profil</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="POST" class="form-3" action="{{route('profiles.store') }}">
                                            @csrf
                                            @include('adminlte-templates::common.errors')
                                            <div class="">
                                                <input id="name" type="text" class=" text-field-4 w-input form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="Nom au Complet" name="name" value="{{ old('name') }}" required>
                                            </div>
                                            
                                            <div>
                                                <label for="sex" class="field-label-3">Sex </label>
                                                <label class="radio-button-field w-radio"><input type="radio"  id="radio" name="sex" value="0" class="w-form-formradioinput radio-button-2 w-radio-input {{ $errors->has('sex') ? ' is-invalid' : '' }}" ><span class="radio-button-label w-form-label">{{__('register.femme')}}</span></label>
                                                <label class="radio-button-field-2 w-radio"><input type="radio"  id="radio-2" name="sex" value="1" class="w-form-formradioinput radio-button w-radio-input {{ $errors->has('sex') ? ' is-invalid' : '' }}"><span class="radio-button-label-2 w-form-label">{{__('register.homme')}}</span></label>
                                            </div>


                                            <div class="">
                                                <input id="age" type="number" class=" text-field-4 w-input form-control{{ $errors->has('age') ? ' is-invalid' : '' }}" placeholder="Age" name="age" value="{{ old('age') }}" required>
                                            </div>

                                            <div class="modal-footer">
                                                <button type="submit" class="btn submit-button-2 w-button">Save</button>
                                            </div>
                                        </form>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="div-block-23">
                        @foreach($profiles as $profile)
                        @php
                        if($profile->id == $profil->id)
                            continue;
                        @endphp
                        <div class="div-block-22">
                            <a href="{{route('connected',[$profile->id])}}">
                                <div class="@php if($profile->age <= 15) echo 'div-block-24'; else if($profile->age > 15 && $profile->sex == 0) echo 'div-block-21'; else if($profile->age > 15 && $profile->sex == 1) echo 'div-block-28'; @endphp" >
                                </div>
                            </a>
                            <p class="text-block-218">{{$profile->name}}</p>
                        </div>
                        @endforeach
                </div>
            </div>

        </div>
    </div>
        <img src="{{ asset('img/Doobl-buble.png') }}" class="image-6">
        <img src="{{ asset('img/Buble-400.png') }}"  width="27" alt="" class="image-7">
        <img src="{{ asset('img/Mu-bull-gris-.png') }}"  width="111" alt="" class="image-8">

    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="js/menu.js"></script>
    <script src="js/app.js"></script>
    <script src="js/webflow.js"></script>

</body>
