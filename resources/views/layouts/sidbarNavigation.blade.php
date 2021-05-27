@php
$channel = DB::Table('users')->select('channels.*')
->join('channels', 'users.id', 'channels.user_id')
->where('users.id', Auth::id())
->first();
@endphp
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>
        MU
    </title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="{{asset('bootstrap/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/menu.css')}}">
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('css/sidbarNavigation.css')}}">
    @yield('css')
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
                    <button class="search-bar">
                        <img src="{{ asset('img/Loupe.png') }}" class="loupe">
                        <div class="text-block-281">{{__('search')}}</div>
                    </button>
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
                                    <li class="nav-item nav-modife">
                                            <p style="color:white; margin-top:20px;margin-right:15px">{{Auth::user()->name}}</p>
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
                                    </li>
                                @endif
                            @endif
                            @endif
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
                        <a  href="{{route('flow')}}" class="mu-logo w-inline-block">
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
                     @if(Auth::user())  
                        <a href="{{Auth::user()->sex == 0 ? route('sistas') : '#'}}" class="div-block-283 w-inline-block">
                            <p class="text-block-286" data-toggle="tooltip" data-placement="top" title="{{Auth::user()->sex == 1 ? 'Vous ne pourrez pas accéder a cette partie compte tenu de votre profil' : 'Rubrique destiné aux videos de nos soeurs' }}">Sista&#x27;s</p>
                        </a>
                    @else
                        <a href="" class="div-block-283 w-inline-block">
                            <p class="text-block-286" data-toggle="tooltip" data-placement="top" title="">Sista&#x27;s</p>
                        </a>
                    @endif
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
            <div class="d-flex group9 ">
               <div class="contentSidElement v1">
                   <div class="sidebar-format indexElement">
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
                               <a  href="{{route('flow')}}" class="mu-logo w-inline-block">
                                   <img src="{{ asset('img/Mu-full-white-00.png') }}" class="imgMUfull" alt=""></a>
                           </div>
                       </div>
                       <div class="div-block-387">
                           <div class="logo-txt-sidebar">
                               <img src="{{ asset('img/Smuuse-logo-blanc-SB-2021-80x22.png') }}"  class="imgSumse">
                           </div>
                       </div>
                       <div class="head-slidebar-user">
                            @php
                                $channel = DB::Table('users')->select('channels.*')
                                                ->join('channels', 'users.id', 'channels.user_id')
                                                ->where('users.id', Auth::id())
                                                ->first();
                            @endphp
                       @if(!Auth::guest())
                            @if($channel)
                                <p class='text-block-242'>{{$channel->name}}</p>
                            @endif
                        @endif


                           <p class="text-block-243">{{__('Individuals')}}</p>
                           <div class="profil-photo">
                            @if(!Auth::guest())
                               <img src="{{ asset('img') }}/{{Auth::user()->photo}}" width="69" alt="" class="image-94">
                            @endif
                            </div>

                           <div class="text-block-237">{{__('Welcome to your dashboard')}}</div>
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
                                   <a href="{{route('home')}}" class="link-27">{{__('My flow')}}</a><br>
                               </div>
                               <div data-w-id="3ebc1e8b-4c8a-0be6-ba36-5e829586b77a" class="text-block-257">
                                   <a href="{{route('notification')}}" class="link-27">{{__('My notifications')}}</a><br>
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
                           <div id="sousBlockKiffes" class="faq-answer">
                               <p class="text-block-257">{{__('My likes')}}<br></p>
                               <p class="text-block-257">Associations<br></p>
                               <p class="text-block-257">Business<br></p>
                               <p class="text-block-257">{{__('All')}}<br></p>
                           </div>
                       </div>
                       <div class="faq-wrapper">
                           <div class="faq-question" id="maChaines">
                               <div class="indentification">
                                   <div class="sidebar-icon">
                                       <img src="{{ asset('img/Mu-tV-chanel-play-gris.svg') }}" class="imgMuGris" alt="">
                                   </div>
                                   <div class="faq-q-text" ><strong class="bold-text-5">{{__('My channel')}}</strong></div>
                               </div>
                           </div>
                           <div class="faq-answer" id="sousBlockChaines">
                               
                               @if($channel)
                               <a data-w-id="3ebc1e8b-4c8a-0be6-ba36-5e829586b79c" href="{{route('channel.visitor', [$channel->id])}}" class="link-block-36 w-inline-block">
                                   <p class="text-block-257">{{__('Dashboard')}}<br></p>
                               </a>
                               @endif
                               <a data-w-id="3ebc1e8b-4c8a-0be6-ba36-5e829586b7a0" href="{{route('video.create')}}" class="link-block-36 w-inline-block">
                                   <p class="text-block-257">{{__('Publish')}}<br></p>
                               </a>
                               <a data-w-id="3ebc1e8b-4c8a-0be6-ba36-5e829586b7a0" href="{{route('video.index')}}" class="link-block-36 w-inline-block">
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
                           <div class="faq-answer" id="sousBlockHassanates">
                               <p class="faq-answer-text">Time Sahid<br>Sadakatiya<br>Hassanates Party<br></p>
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

                       </div>
                   </div>
               </div>
                @yield('content-play-element')
            </div>
        </div>
    </div>
    <script>
        $(".btnImgUser").click(function(){
            $(".modalNavUp").toggle();
        });
        $(".group9").click(function(){
            $(".modalNavUp").hide();
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
</body>
</html>