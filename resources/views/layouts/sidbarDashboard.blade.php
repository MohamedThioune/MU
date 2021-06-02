<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>
        MU
    </title>
    <meta charset="utf-8">
    <meta name="viewport" content="target-densitydpi=device-dpi, initial-scale=1.0, user-scalable=no" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <link rel="stylesheet" href="{{asset('bootstrap/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/sidbarDasboard.css')}}">
    <link rel="stylesheet" href="{{asset('css/mu-dev.webflow.css')}}">
    <link rel="stylesheet" href="{{asset('css/menu.css')}}">
    <script src="https://kit.fontawesome.com/2def424b14.js" crossorigin="anonymous"></script>
    @yield('head')
    @php if(isset($_COOKIE['lang'])) App::setLocale($_COOKIE['lang']); @endphp
</head>

<body>

<div class="position-relative">
    <div class="griscolor"></div>
    <div class="content-element-page">
        <div class="nav-bar">
            <!-- navbar web-->
            <div class="bar-up webUp">
                <div class="nav-up-right">
                    <a data-w-id="85409373-dce4-fdcf-64c5-c0ed0fa665a1" href="#" class="_4-points w-inline-block">
                        <div class="_2points">
                            <div class="point-1x4"></div>
                            <div class="point-1x4"></div>
                        </div>
                        <div class="_2points">
                            <div class="point-1x4"></div>
                            <div class="point-1x4"></div>
                        </div>
                    </a>
                    <a  href="{{route('home')}}" class="mu-logo w-inline-block">
                        <img src="{{ asset('img/logo-MU.png') }}" class="imgLogo22" alt="">
                    </a>
                </div>
                <div class="search-bar">
                    <img src="{{ asset('img/Loupe.png') }}" class="loupe">
                    <div class="text-block-281">{{__('search')}}</div>
                </div>
                <div class="modalNavUp2">
                    <a href="#" class="dropdownItemNavText">In sha Allah</a>
                    <a href="#" class="dropdownItemNavText">Din</a>
                    <a href="#" class="dropdownItemNavText">Business</a>
                    <a href="#" class="dropdownItemNavText">Health</a>
                    <a href="#" class="dropdownItemNavText">Sport Fit</a>
                    <a href="#" class="dropdownItemNavText">Life</a>
                    <a href="#" class="dropdownItemNavText">Tech et science</a>
                    <a href="#" class="dropdownItemNavText">Education</a>
                    <a href="#" class="dropdownItemNavText">News</a>
                </div>
                <div class="nav-up-left">
                    <ul class="ulModife1">
                        @if(Auth::guest())
                        <li class="nav-item nav-modife">
                            <a href="{{route('register')}}" class="oumma w-button">{{__('Joining the Ummah')}}</a>
                        </li>
                        <li class="nav-item nav-modife" style="margin-top:5px;">
                            <img src="{{ asset('img/icones/login.svg') }}" alt="">
                            <a class="nav-link" href="{{route('login')}}">{{__('Log in')}}</a>
                        </li>
                        @else
                        <!--  <li class="nav-item nav-modife">
                              @if(Auth::user()->timeout)
                              @if(intval(abs(strtotime("now") - strtotime(Auth::user()->timeout))/ 86400) == 0)
                              @if(intval(abs(strtotime("now") - strtotime(Auth::user()->timeout))/ 3600) > 0)
                              <p class="day" style="font-size:18px; color:white">Last login - <span style="color:#c22d84">{{intval(abs(strtotime("now") - strtotime(Auth::user()->timeout))/3600)}} hours ago</span></p>
                              @else(intval(abs(strtotime("now") - strtotime(Auth::user()->timeout))/ 3600) == 0)
                              <p class="day"style="font-size:18px; color:white">Last login - <span style="color:#c22d84">{{intval(abs(strtotime("now") - strtotime(Auth::user()->timeout))/60)}} minutes ago</span></p>
                              @endif
                              @elseif(intval(abs(strtotime("now") - strtotime(Auth::user()->timeout))/ 86400) == 1)
                              <p class="day" style="font-size:18px; color:white">Last login - <span style="color:#c22d84">Yesterday at {{strftime("%H:%M", strtotime(Auth::user()->timeout))}}</span></p>
                              @elseif(intval(abs(strtotime("now") - strtotime(Auth::user()->timeout))/ 86400) >= 2 && intval(abs(strtotime("now") - strtotime(Auth::user()->timeout))/ 86400) <= 27)
                              <p class="day"style="font-size:18px; color:white">Last login - <span style="color:#c22d84">{{intval(abs(strtotime("now") - strtotime(Auth::user()->timeout))/ 86400)}} days ago</span></p>
                              @else(intval(abs(strtotime("now") - strtotime(Auth::user()->timeout))/ 86400) > 27)
                              <p class="day" style="font-size:18px; color:white">Last login - <span style="color:#c22d84">On {{strftime("%d/%m/%Y", strtotime(Auth::user()->timeout))}}</span></p>
                              @endif
                              @else
                              <p class="day" style="font-size:18px; color:#f4de39">WELCOME <span style="color:white"> TO</span> <span style="color:#c22d84"> MU</span></p>
                              @endif
                          </li>-->
                        @if(Auth::user())
                        @if(Auth::user()->type)
                        @if(Auth::user()->type == "OUMMATI")
                        <li class="nav-item nav-modife">
                            @if(!Auth::guest())
                            <button type="button" class="btnImgUser">
                                <img src="{{ asset('img') }}/{{Auth::user()->photo}}" width="69" alt="" class="image-94Nav">
                            </button>
                            <!-- Modal -->
                            <div class="modalNavUp">
                                @if(Auth::user()->type == "OUMMATI")
                                <a href="{{route('choose')}}" class="dropdownItemNavText">Changer le profil</a>
                                @endif
                                <a href="{{route('parametre')}}" class="dropdownItemNavText">Infos perso</a>
                                <a href="{{route('tarifs')}}" class="dropdownItemNavText">Abonnement</a>
                                <form action="{{ route('logout') }}" class="nav-modife formModife" method="POST">
                                <button class="dropdownItemNavText">{{__('Log out')}} </button>
                                @csrf
                                </form>

                            </div>

                            @endif
                          <!--  @if(!session('profile'))
                            <span class="btnCommunaute" style="background:none; box-shadow: 4px 4px 15px white;font-weight:bold">
                                                        @php
                                                            $profile = DB::Table('users')->select('profile.*')
                                                                                        ->join('profile', 'users.id', 'profile.user_id')
                                                                                        ->where('users.id', Auth::id())
                                                                                        ->first();

                                                            echo $profile->name;
                                                        @endphp
                                                        &nbsp;&nbsp;
                                                        <a style="color:white;font-size:19px;" href="{{route('choose')}}"><i class="fas fa-caret-down"></i></a>
                                                    </span>
                            @elseif(session('profile')["age"] <= 15)
                            <span class="btnCommunaute" style="background:none; box-shadow: 4px 4px 15px #e9d22e;font-weight:bold"> {{session('profile')["name"]}} &nbsp;&nbsp;<a style="color:#e9d22e;font-size:19px;" href="{{route('choose')}}"><i class="fas fa-caret-down"></i></a></span>
                            @elseif(session('profile')["age"] > 15 && session('profile')["sex"] == '1')
                            <span class="btnCommunaute" style="background:none; box-shadow: 4px 4px 15px #3eacec;font-weight:bold"> {{session('profile')["name"]}} &nbsp;&nbsp;<a href="{{route('choose')}}"><i class="fas fa-caret-down"></i></a></span>
                            @elseif(session('profile')["age"] > 15 && session('profile')["sex"] == '0')
                            <span class="btnCommunaute" style="background:none; box-shadow: 4px 4px 15px #d14f94;font-weight:bold"> {{session('profile')["name"]}} &nbsp;&nbsp;<a style="color:#d14f94;font-size:19px;" href="{{route('choose')}}"><i class="fas fa-caret-down"></i></a><span>
                            @endif-->
                        </li>
                        @endif
                        @endif
                        @endif
                    <!--    <div class="btn connexion">
                                    <span class="div-block-272">
                                        <img src="{{ asset('img/Mu-login-blanc.svg') }}" alt="" class="image-101">
                                    </span>
                            <form action="{{ route('logout') }}" class="nav-modife formModife" method="POST">
                                @csrf
                                <button class="nav-link btnLogOut" type="submit" >{{__('Log out')}}</button>
                            </form>
                        </div>
                        @endif-->
                    </ul>

                </div>
            </div>

            <!-- navbar Mobile-->
            <div class="bar-up webMobile">
                <div class="nav-up-right">
                    <a  href="#" class="_4-points w-inline-block IconeBlanc">
                        <div class="_2points">
                            <div class="point-1x4"></div>
                            <div class="point-1x4"></div>
                        </div>
                        <div class="_2points">
                            <div class="point-1x4"></div>
                            <div class="point-1x4"></div>
                        </div>
                    </a>
                    <a  href="{{route('home')}}" class="mu-logo w-inline-block">
                        <img src="{{ asset('img/logo-MU.png') }}" class="imgLogo22" alt="">
                    </a>
                    <div class="search-bar">
                        <img src="{{ asset('img/Loupe.png') }}" class="loupe">
                        <div class="text-block-281">{{__('search')}}</div>
                    </div>
                    <div class="modalNavUp2">
                        <a href="#" class="dropdownItemNavText">In sha Allah</a>
                        <a href="#" class="dropdownItemNavText">Din</a>
                        <a href="#" class="dropdownItemNavText">Business</a>
                        <a href="#" class="dropdownItemNavText">Health</a>
                        <a href="#" class="dropdownItemNavText">Sport Fit</a>
                        <a href="#" class="dropdownItemNavText">Life</a>
                        <a href="#" class="dropdownItemNavText">Tech et science</a>
                        <a href="#" class="dropdownItemNavText">Education</a>
                        <a href="#" class="dropdownItemNavText">News</a>
                    </div>
                </div>

            </div>
            <div class="barHead2">
                <div class="group17">
                    <div class="div-block-422">
                        <img src="{{ asset('img/Time-shahid.svg') }}" alt="">
                    </div>
                    <p class="textTimeShalied">26.3</p>
                </div>
                <a href="" class="clocheHead2">
                    <img src="{{ asset('img/Mu-cloche-blanc.png') }}" alt="">
                </a>
            </div>

            <div class="bar-down">
                <div class="div-block-268">
                    <img src="{{ asset('img/Smuuse-logo-blanc-SB-2021-80x22.png') }}" alt="" class="image-102">
                </div>
                <div class="d-flex">
                    <a href="{{route('flow')}}" class="div-block-281 w-inline-block">
                        <p class="text-block-286">Flow</p>
                    </a>
                  
                    <a href="{{Auth::user()->sex == 0 ? route('sistas') : '#'}}" class="div-block-283 w-inline-block">
                        <p class="text-block-286" data-toggle="tooltip" data-placement="top" title="{{Auth::user()->sex == 1 ? 'Vous ne pourrez pas accéder a cette partie compte tenu de votre profil' : 'Rubrique destiné aux videos de nos soeurs' }}">Sista&#x27;s</p>
                    </a>
                </div>
                <div class="publish-notif">
                    <a href="{{route('video.create')}}" class="cam-publier w-inline-block">
                        <img src="{{ asset('img/Mu-upload-cloud-blanc2x.png') }}" class="imgCloud2" alt="">
                    </a>
                    <a href="{{route('notification')}}" class="cloche w-inline-block">
                        <img src="{{ asset('img/Mu-cloche-blanc.png') }}" class="imgCloche" alt="">
                    </a>
                </div>
            </div>
        </div>
        <div class="d-flex group9 mobileVisiblite">
            <div class="content-section-sibBar-2 ">
                <div class="">
                    <div class="content-sidbar">
                        <div class="sidebar sideBarModife ">
                            <div class="sidenavbar">
                                <div class="sidenavbar-up">
                                    <div>
                                        <a href="#" class="_4-points-closed w-inline-block IconeRose">
                                            <div class="_2points">
                                                <div class="point-1x4-pr"></div>
                                                <div class="point-1x4-pr2"></div>
                                            </div>
                                            <div class="_2points">
                                                <div class="point-1x4-pr3"></div>
                                                <div class="point-1x4-pr4"></div>
                                            </div>
                                        </a>
                                    </div>
                                    <a  href="{{route('home')}}" class="mu-logo w-inline-block">
                                        <img src="{{ asset('img/Mu-full-white-00.png') }}" class="imgMUfull" alt=""></a>
                                </div>
                            </div>
                            <div class="div-block-387">
                                <div class="logo-txt-sidebar">
                                    <img src="{{ asset('img/Smuuse-logo-blanc-SB-2021-80x22.png') }}"  class="imgSumse">
                                </div>
                            </div>
                            <div class="head-slidebar ">
                                @if(!Auth::guest())
                                    <div class="text-ma-chaine">{{Auth::user()->name}}</div>
                                @endif
                                <div class="text-fonction">{{__('Individuals')}}</div>
                                <div class="profil-photo">
                                    <img src="{{asset('img')}}/{{Auth::user()->photo}}" alt="" class="image-94">
                                </div>

                            </div>
                            <div class="faq-wrapper">
                                <div class="faq-question" id="monFlow">
                                    <div class="indentification">
                                        <div class="sidebar-icon">
                                            <img src="{{ asset('img/Mu-flow-picto-bull.svg') }}" alt="" class="image-120"></div>
                                        <div class="faq-q-text" ><strong class="bold-text-5">{{__('My flow')}}</strong></div>
                                    </div>
                                </div>
                                <div class="faq-answer" id="sousBlockMonFlow">
                                    <div data-w-id="3ebc1e8b-4c8a-0be6-ba36-5e829586b776" class="text-block-257">
                                        <a href="{{route('home')}}" style="text-decoration:none" class="link-27">{{__('My flow')}}</a><br>
                                    </div>
                                    <div data-w-id="3ebc1e8b-4c8a-0be6-ba36-5e829586b77a" class="text-block-257">
                                        <a href="{{route('notification')}}" style="text-decoration:none" class="link-27">{{__('My notifications')}}</a><br>
                                    </div>
                                </div>
                            </div>
                            <div class="faq-wrapper">
                                <div class="faq-question" id="mesKiffes">
                                    <div class="indentification">
                                        <div class="sidebar-icon">
                                            <img src="{{ asset('img/Mu-coeur-gris.svg') }}" class="imgCoeurGris" alt="">
                                        </div>
                                        <div class="faq-q-text" ><strong class="bold-text-5">{{__('My likes')}}</strong></div>
                                    </div>
                                </div>
                                <!-- <div id="sousBlockKiffes" class="faq-answer">
                                    <p class="text-block-257">{{__('My likes')}}<br></p>
                                    <p class="text-block-257">Associations<br></p>
                                    <p class="text-block-257">Business<br></p>
                                    <p class="text-block-257">{{__('All')}}<br></p>
                                </div> -->
                            </div>
                            <div class="faq-wrapper">
                                <div class="faq-question" id="maChaines">
                                    <div class="indentification">
                                        <div class="sidebar-icon">
                                            <img src="{{ asset('img/Mu-tV-chanel-play-gris.svg') }}" class="imgMuGris" alt="">
                                        </div>
                                        @if(isset($_COOKIE['state']))
                                            <div class="faq-q-text"><p class="bold-text-5" style="{{ $_COOKIE['state'] == 'Channel' ? 'color:#F59546' : ''}}" >{{__('My channel')}}</p></div>
                                        @else 
                                            <div class="faq-q-text"><strong class="bold-text-5">{{__('My channel')}}</strong></div>
                                        @endif
                                    </div>
                                </div>
                                <div class="faq-answer" id="sousBlockChaines">
                                    @php
                                    $channel = DB::Table('users')->select('channels.*')
                                                ->join('channels', 'users.id', 'channels.user_id')
                                                ->where('users.id', Auth::id())
                                                ->first();
                                    @endphp
                                    @if($channel)
                                    <a data-w-id="3ebc1e8b-4c8a-0be6-ba36-5e829586b79c" href="{{route('channel.visitor', [$channel->id])}}" style="text-decoration:none" class="link-block-36 w-inline-block">
                                        <p class="text-block-257">{{__('Dashboard')}}<br></p>
                                    </a>
                                    @else if($canal)
                                    <a data-w-id="3ebc1e8b-4c8a-0be6-ba36-5e829586b79c" href="{{route('channel.visitor', [$canal->id])}}" style="text-decoration:none" class="link-block-36 w-inline-block">
                                        <p class="text-block-257">{{__('Dashboard')}}<br></p>
                                    </a>
                                    @endif
                                    <a data-w-id="3ebc1e8b-4c8a-0be6-ba36-5e829586b7a0" href="{{route('video.create')}}" style="text-decoration:none" class="link-block-36 w-inline-block">
                                        <p class="text-block-257">{{__('Publish')}}<br></p>
                                    </a>
                                    <a data-w-id="3ebc1e8b-4c8a-0be6-ba36-5e829586b7a0" href="{{route('video.index')}}" style="text-decoration:none" class="link-block-36 w-inline-block">
                                        <p class="text-block-257">{{__('My videos')}}<br></p>
                                    </a>
                                    <!-- <p class="faq-answer-text">{{__('My videos')}}<br>{{__('Comments')}}<br>Audiences <br>{{__('Subscribers')}}<br>{{__('Monetization')}}<br></p> -->
                                </div>
                            </div>
                            <div class="faq-wrapper" id="timeChield">
                                <div class="time-shahid-onglet">
                                    <div class="indentification">
                                        <div class="sidebar-icon">
                                            <img src="{{ asset('img/Time-shahid.png') }}" class="imgTimeShalid" alt="">
                                        </div>
                                        <div class="faq-q-text" ><strong class="titre-onglet-time">Time Shahid</strong></div>
                                    </div>
                                </div>
                            </div>
                            <div class="faq-wrapper">
                                <div class="faq-question" id="hassanates">
                                    <div class="indentification">
                                        <div class="sidebar-icon">
                                            <img src="{{ asset('img/Mu-etoile-gris-.svg') }}" class="imgEtoile" alt=""></div>
                                        <div class="faq-q-text" ><strong class="bold-text-5">Hassanates</strong></div>
                                    </div>
                                </div>
                                <div class="faq-answer" id="sousBlockHassanates" data-toggle="tooltip" data-placement="right" title="Restez connecté sera disponible dans une deuxieme version"> 
                                    <!-- <p class="faq-answer-text">Time Sahid<br>Sadakatiya<br>Hassanates Party<br></p> -->
                                </div>
                            </div>
                            <div class="faq-wrapper">
                                <div class="faq-question" id="parametre">
                                    <a href="{{route('parametre')}}" class="indentification">
                                        <div class="sidebar-icon">
                                            <img src="{{ asset('img/Mu-engrenage-gris2x.png') }}" class="imgMuEngrenage" alt=""></div>
                                        <div class="faq-q-text" ><p class="bold-text-5">{{__('Parameters')}}</p></div>
                                    </a>
                                </div>
                                <div class="faq-answer" id="sousBlockParametre">
                                    <p class="faq-answer-text">Smuuse<br>‍<br></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="contentOneMonFlow">
                @yield ('content-sidbar-element')
            </div>
        </div>

    </div>
</div>




<!-- AdminLTE App -->
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('bootstrap/bootstrap.min.js')}}"></script>
<script src="{{asset('js/menu.js')}}"></script>
<script>
    $(".btnImgUser").click(function(){
        $(".modalNavUp").toggle();
    });
    $(".group9").click(function(){
        $(".modalNavUp").hide();
    });
</script>
<script>
    $(function(){
        var container = $('.bandeau-chaine1'), inputFile = $('#file2'), img, btn, txt = 'Modifier mon bandeau', txtAfter = 'Modifier mon bandeau';

        if(!container.find('#upload').length){
            container.find('.input1').append('<input type="button" value="'+txt+'" id="upload1">');
            btn = $('#upload1');
            container.prepend('<img src="" class="hidden" alt="Uploaded file" id="uploadImg" width="100">');
            img = $('#uploadImg');
        }

        btn.on('click', function(){
            img.animate({opacity: 0}, 300);
            inputFile.click();
        });

        inputFile.on('change', function(e){
            container.find('label').html( inputFile.val() );

            var i = 0;
            for(i; i < e.originalEvent.srcElement.files.length; i++) {
                var file = e.originalEvent.srcElement.files[i],
                    reader = new FileReader();

                reader.onloadend = function(){
                    img.attr('src', reader.result).animate({opacity: 1}, 700);
                }
                reader.readAsDataURL(file);
                img.removeClass('hidden');
            }

            btn.val( txtAfter );
        });
    });
</script>

<script>
    $(function(){
        var container = $('.div-block-222'), inputFile = $('#file3'), img, btn, txt = 'Changer l image', txtAfter = 'Changer l image';
        if(!container.find('#upload1').length){
            container.find('.input3').append('<img src="" class="hidden" alt="" id="uploadImg1" width="100">');
            img = $('#uploadImg1');
            container.find('.input3').append('<input type="button" class="12" value="'+txt+'" id="upload3">');
            btn = $('#upload3');
        }

        btn.on('click', function(){
            img.animate({opacity: 0}, 300);

            inputFile.click();
        });

        inputFile.on('change', function(e){
            container.find('label').html( inputFile.val() );
            $( ".div-block-2files" ).addClass('opacityElementFiles') ;
            var i = 0;
            for(i; i < e.originalEvent.srcElement.files.length; i++) {
                var file = e.originalEvent.srcElement.files[i],
                    reader = new FileReader();

                reader.onloadend = function(){
                    img.attr('src', reader.result).animate({opacity: 1}, 700);
                }
                reader.readAsDataURL(file);
                img.removeClass('hidden');
            }


        });
    });
</script>
<script>
    $(".search-bar").click(function(){
        $(".modalNavUp2").toggle();
    });
    $(".group9").click(function(){
        $(".modalNavUp2").hide();
    });
</script>

<script>                                    
    $(".btnImgUser").click(function(){
        $(".modalNavUp").toggle();
    });
    $(".group9").click(function(){
        $(".modalNavUp").hide();
    });
</script>


@yield('scripts')
</body>
</html>