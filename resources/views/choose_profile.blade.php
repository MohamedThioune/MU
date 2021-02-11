<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Theme style -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.3/css/AdminLTE.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.3/css/skins/_all-skins.min.css">

    <!-- iCheck -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.2/skins/square/_all.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.min.css">

    <link rel="stylesheet" href="../css/mu-dev.css">
    <link rel="stylesheet" href="../css/webflow.css">
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/mu-dev.webflow.css">

    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/css/bootstrap-datetimepicker.min.css">

</head>

<body class="sidebar-mini">
<div class="wrapper">
<div class="body-5">
    <div class="section-6">
        <a href="index.html" class="logo w-inline-block"><img src="{{ asset('img/smuuse-logo-txt-blck-©-.png') }}"   alt="" class="image-3"></a>
    </div>
    <div class="section-7">
        <div class="w-container">
            <div class="text-block-220">As Salamou&#x27;alaykoum,<br>choisis ton profil</div>

            <div class="div-block-20">
                <div class="big-bull">
                    @php
                    $profile = DB::Table('users')->select('profile.*')
                    ->join('profile', 'users.id', 'profile.user_id')
                    ->where('users.id', Auth::id())
                    ->first();
                    @endphp
                    <a href="{{ route('connected', [$profile->id])}}" class="link-block-2 w-inline-block">
                        <img src="{{ asset('img/pexels-anni-roenkae-2156883.jpg') }}" alt="">
                    </a>
                    <div class="text-block-218"> {{$profile->name}} </div>
                    <div class="text-block-219">
                        <a href="{{route('profiles.index')}}" class="link-4">Gérer les profils</a>
                    </div>
                </div>

                <div>

                    <div class="div-block-23">
                        @foreach($profiles as $profile)
                        <div class="div-block-22">
                            <div class="@php if($profile->age <= 15) echo 'div-block-24'; else if($profile->age > 15 && $profile->sex == 0) echo 'div-block-21'; else if($profile->age > 15 && $profile->sex == 1) echo 'div-block-28'; @endphp" >
                                <img src="{{ asset('img/pexels-anna-shvets-5217954.jpg') }}" alt="">
                            </div>
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

    <script src="js/menu.js"></script>
    <script src="js/app.js"></script>
    <script src="js/webflow.js"></script>

</body>