<?php
setcookie('lang', session('lang'), time() + 365*24*3600, null, null, false, true); // On écrit un cookie
?>
@extends('layouts.app')

@section('content')
@php if(isset($_COOKIE['lang'])) App::setLocale($_COOKIE['lang']); @endphp
<div class="body-3">
    <div class="section-9">
            @if(isset($_COOKIE['lang']))
            @if($_COOKIE['lang'] == 'en')
            <a href="{{route('language.choose','fr')}}" class="link-block-33 w-inline-block">
                <p class="text-block-226">Change language: Continuer en français </p>
                <div class="div-block-197"><img src="{{ asset('img/FR-flag.png') }}" alt="" class="image-85"></div>
            </a>
            @else
            <a href="{{route('language.choose','en')}}" class="link-block-33 w-inline-block">
                <p class="text-block-226">Changer de langue: Continue in english </p>
                <div class="div-block-197"><img src="{{ asset('img/FR-flag.png') }}" alt="" class="image-85"></div>
            </a>
            @endif
            @endif
       
    </div>
<div class="section-2">
    <div class="container-6 w-container">
        <div class="div-block-15">
            <img class="image-34" src="{{ asset('img/smuuse-logo-txt-blck-©-.png') }}" >
        </div>
        <div>
            <p class="text-block-4">As Salaaamou alaykouuum !!!</p>
            <p class="text-block-5">{{__('Welcome to SMUUSE')}}!<br>{{__('The Muslim video platform.')}}</p>
        </div>
    </div>
</div>
<div class="pad">
    <div class="container-2 w-container">
        <div class="block-element1">
            <img src="{{ asset('img/Mu-3-pad-3d-mix2x.png') }}" >
        </div>
        <div class="div-block-4">
            <div class="form-block w-form">
                <form class="form-group form"  method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                    @csrf
                    @include('adminlte-templates::common.errors')
                    <div class="w-100">
                        <input id="email" type="email" placeholder="{{ __('E-Mail') }}" class="text-field w-input form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required >

                        @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                        @endif
                    </div>
                    <div class="w-100">
                        <input id="password" type="password" placeholder="{{__('Password')}}" class="text-field w-input form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                        @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif
                    </div>
                    <button type="submit" class="btn submit-button w-button">
                        {{ __('Login') }}
                    </button>
                    <div class="text-center">
                        <a class="link-2" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    </div>
                    <div class="link-block w-inline-block">
                        <p class="text-block-6">{{__('Don\'t you have an account yet ?')}}</p>
                    </div>
                    <div class="div-block-6 text-center">
                        <a href="{{ route('register') }}" class="text-block-7"><b>Bismillah </b> <br> <span class="text-block-9">{{ __('I join my community')}} </span></a>
                    </div>

                </form>
                <div class="w-form-done">
                    <p>{{ __('Thank you! Your submission has been received!')}}</p>
                </div>
                <div class="w-form-fail">
                    <p>{{ __('Oops! Something went wrong while submitting the form.')}}</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="Muslims" class="necesseraire">
    <div class="container-22 w-container">
        <div class="div-block-137">
            <div class="div-block-130">
                <div class="div-block-131">
                </div>
                <div class="div-block-135">
                    <h1 data-w-id="adafdb43-370d-b392-95fb-2c2aa0f32678" class="heading-29">{{__('We are muslims.')}}<br>{{__('So let\'s share the good"')}} ;)</h1>
                </div>
                <div class="div-block-136">
                </div>
            </div>
        </div>
        <div class="div-block-132">
            <div class="div-block-133">
                <p  class="text-block-102">{{__('It was essential and urgent to have a streaming service free of inappropriate content and inspired by our values.')}} </p>
                <p  class="text-block-103">{{__('...so we did it.')}}</p>
                <p  class="text-block-104">{{__('For our children and for ourselves.')}}</p>
            </div>
            <div class="div-block-134">
                <img src="{{ asset('img/Mu-Family-copie2x.png') }}">
            </div>
        </div>
    </div>
</div>
<div id="Muslims-value" class="necessaire-mobil">
    <div class="container-24 w-container">
        <div class="noublions">
            <div>
                <img src="{{ asset('img/Mu-outline-format_quote-24px2x_1Mu-outline-format_quote-24px2x.png') }}" class="image-60">
            </div>
            <div>
                <p class="text-block-169">Nous sommes musulmans.<br> Alors partageons le bien  ;)</p>
            </div>
            <div>
                <img src="{{ asset('img/Mu-outline-format_quote-12x_1Mu-outline-format_quote-12x.png') }}" class="image-60">
            </div>
        </div>
        <div class="div-block-138">
            <p class="text-block-105">Il était indispensable et urgent d’avoir un service de streaming préservé de contenus inappropriés et inspiré de nos valeurs … </p><img src="images/Mu-Family-copie2x.png" loading="lazy" sizes="100vw" srcset="images/Mu-Family-copie2x-p-500.png 500w, images/Mu-Family-copie2x.png 772w" alt="">
            <p class="text-block-106">... alors, nous l&#x27;avons fait.</p>
            <p class="text-block-107">Pour nos enfants <br>comme pour nous même.</p>
        </div>
    </div>
</div>
<section id="subscribe-form" class="email-sbuscription">
    <div class="centered-container-2 w-container">
        <h2 class="heading-44">Al hamdulilah ! <br>{{__('Incredible')}} !<br></h2>
        <p class="text-block-222">{{__('I want to stay informed')}}</p>
        <div class="w-form">
            <form class="subscribe-form-flex">
                <div class="subscribe-form-input-wrapper">
                    <input type="email" class="subscribe-form-input-2 w-input" maxlength="256" placeholder="E-mail">
                </div>
                <input type="submit" value="BISMILLAH"  class="submit-button-3 w-button">
            </form>
            <div class="w-form-done">
                <p>{{__('Thank you! Your submission has been received!')}}</p>
            </div>
            <div class="w-form-fail">
                <p>{{__('Oops! Something went wrong while submitting the form.')}}</p>
            </div>
        </div>
        <a href="#" class="button-13 w-button"> {{__('I join my community')}}</a>
        <a href="#" class="link-16">{{__('Learn More')}}</a>
    </div>
</section>
<div id="FAQ" class="faq-fr">
    <div class="container-53 w-container">
        <div class="w-clearfix">
            <div class="bulle-faq">
                <img src="{{ asset('img/Doobl-buble2x.png') }}" class="image-83">
            </div>
            <h3 class="faq-h2">{{__('Frequently asked questions')}}</h3>
            <div class="bull-faq-2">
                <img src="{{ asset('img/Buble-4002x.png') }}" class="img-80">
            </div>
            <div class="faq-min-height">
                <div class="faq-wrapper">
                    <div class="faq-question">
                        <p class="faq-q-text"><strong class="bold-text-5">{{__('What is Smuuse?')}}</strong></p>
                        <div class="faq-plus-wrap">
                            <div class="faq-plus-l"></div>
                            <div class="faq-plus"></div>
                        </div>
                    </div>
                    <div class="faq-answer">
                        <p class="faq-answer-text">{{__('Smuuse is a video hosting website inspired by Muslim values.Smuuse allows you to discover, share, publish, rate, inform and support those who promote the best, through diverse and varied videos... embracing exciting and surprising topics.Much more than a platform, Smuuse offers you the opportunity to collect many hassanates (good deeds) and find inspiration to make yourself better. In sha Allah!')}}<br></p>
                    </div>
                </div>
                <div class="faq-wrapper">
                    <div class="faq-question">
                        <p class="faq-q-text"><strong class="bold-text-5">{{__('How much does it cost ?')}}</strong></p>
                        <div class="faq-plus-wrap">
                            <div class="faq-plus-l"></div>
                            <div class="faq-plus"></div>
                        </div>
                    </div>
                    <div class="faq-answer">
                        <p class="faq-answer-text">{{__('How much does it cost ? The individual subscription costs: 4,95 € / month * (for 5 people) The family subscription costs: 9.95 € / month* (for 5 people).You can also take advantage of an annual subscription, the price of which varies according to the current offers.Your subscription is first and foremost an investment for yourself, for the role you wish to play in your community. With Smuuse, we provide you with a great tool, it\'s up to you to make the best use of it')}}</p>
                    </div>
                </div>
                <div class="faq-wrapper">
                    <div class="faq-question">
                        <p class="faq-q-text"><strong class="bold-text-5">{{__('Why is Smuuse not free ?')}}</strong></p>
                        <div class="faq-plus-wrap">
                            <div class="faq-plus-l"></div>
                            <div class="faq-plus"></div>
                        </div>
                    </div>
                    <div class="faq-answer">
                        <p class="faq-answer-text">{{__('To give you the best and most reliable experience. To guarantee our independence and yours. To pay those who produce content. Because we don\'t sell your data. We want to build the future of the community with the community and without funding this is not possible. So we need your financial participation, but also your invocations and any other help you can give; by sharing the site as much as possible for example...')}}</p>
                    </div>
                </div>

                <div class="faq-wrapper">
                    <div class="faq-question">
                        <p class="faq-q-text"><strong class="bold-text-5">{{__('Can I earn money on Smuuse ?')}}</strong></p>
                        <div class="faq-plus-wrap">
                            <div class="faq-plus-l"></div>
                            <div class="faq-plus"></div>
                        </div>
                    </div>
                    <div class="faq-answer">
                        <p class="faq-answer-text">{{__('Yes! In sha Allah! By producing content that is appreciated by other users. This way you can combine and multiply your intentions to earn both here and in the hereafter. You will find all the elements in the remuneration section, once the platform is active.')}}</p>
                    </div>
                </div>
               
                <div class="faq-wrapper">
                    <div class="faq-question">
                        <div class="faq-q-text"><strong class="bold-text-5">{{__('Does Smuuse filter content ?')}}</strong></div>
                        <div class="faq-plus-wrap">
                            <div class="faq-plus-l"></div>
                            <div class="faq-plus"></div>
                        </div>
                    </div>
                    <div class="faq-answer">
                        <p class="faq-answer-text">{{__('Yes, we apply several filters on content, but also on accounts and publications. We have also provided you with a filter to refine videos with us... Yes! No good deed goes unnoticed. So take advantage of it.')}}</p>
                    </div>
                </div>
                <div class="faq-wrapper">
                    <div class="faq-question">
                        <p class="faq-q-text"><strong class="bold-text-5">{{__('Is there any advertising on Smuuse ?')}}</strong></p>
                        <div class="faq-plus-wrap">
                            <div class="faq-plus-l"></div>
                            <div class="faq-plus"></div>
                        </div>
                    </div>
                    <div class="faq-answer">
                        <p class="faq-answer-text">{{__('Yes, there is advertising. Don\'t worry, it won\'t be intrusive. We don\'t like to be interrupted by ads in the middle of a video either. Advertising is important on Smuuse. Advertising is important on Smuuse. It allows us to give more visibility to commercial actors in the community, to associations, etc. It also allows you to consume more efficiently. It also allows you to consume more ethically and to do good deeds at the same time.')}}</p>
                    </div>
                </div>
                <div class="faq-wrapper">
                    <div class="faq-question">
                        <p class="faq-q-text"><strong class="bold-text-5">{{__('What does my subscription include ?')}}</strong></p>
                        <div class="faq-plus-wrap">
                            <div class="faq-plus-l"></div>
                            <div class="faq-plus"></div>
                        </div>
                    </div>
                    <div class="faq-answer">
                        <p class="faq-answer-text">{{__('Your subscription includes unlimited access to all streaming services (Flow, Sista2Sista and Kids) and to \"hassanates parties\". However, additional services will be added at a later date... Many surprises are in store.')}}</p>
                    </div>
                </div>
                <div class="faq-wrapper">
                    <div class="faq-question">
                        <p class="faq-q-text"><strong class="bold-text-5">{{__('How do I deactivate my subscription ?')}}</strong></p>
                        <div class="faq-plus-wrap">
                            <div class="faq-plus-l"></div>
                            <div class="faq-plus"></div>
                        </div>
                    </div>
                    <div class="faq-answer">
                        <p class="faq-answer-text">{{__('Your subscription includes unlimited access to all streaming services (Flow, Sista2Sista and Kids) and to \'hassanates parties\'. However, additional services will be added at a later date... Many surprises are in store.')}}</p>
                    </div>
                </div>
                <div class="faq-wrapper">
                    <div class="faq-question">
                        <p class="faq-q-text"><strong class="bold-text-5">{{__('How do I deactivate my subscription ?')}}</strong></p>
                        <div class="faq-plus-wrap">
                            <div class="faq-plus-l"></div>
                            <div class="faq-plus"></div>
                        </div>
                    </div>
                    <div class="faq-answer">
                        <p class="faq-answer-text">{{__('When you sign up for your subscription, you will be charged once to activate your account. As soon as the platform is online, you get 1 month free of charge before the monthly payments start. If you have taken out an annual subscription, you will receive 2 months free.')}}</p>
                    </div>
                </div>
                <div class="faq-wrapper">
                    <div class="faq-question">
                        <p class="faq-q-text"><strong class="bold-text-5">{{__('Who are we ?')}}</strong></p>
                        <div class="faq-plus-wrap">
                            <div class="faq-plus-l"></div>
                            <div class="faq-plus"></div>
                        </div>
                    </div>
                    <div class="faq-answer">
                        <p class="faq-answer-text"> {{__('We are fathers and mothers, sons and daughters, brothers and sisters, entrepreneurs. We want to be actors in our contemporary lives and not just spectators. We will make many mistakes, because the task is not easy. We therefore ask for your support, your indulgence and your invocations, and above all the forgiveness of our Lord (AL Afouw, He who erases faults) and His help. We are simply Muslims, proud to be Muslims and hope for the Firdaws (the highest paradise), for us as well as for you! May the Peace and blessings of Allah, to Him be the glory and praise, be upon our beloved Prophet.')}}</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="remerciement">
    <div class="container-37 w-container">
        <p class="text-block-44">* {{__('Non-contractual images')}}<br></p>
        <p class="text-block-170">{{__('We would like to thank all the people who look after our well-being and health... and all praise is due to Allah. Our thanks also to all those who contribute to our success.')}}</p>
    </div>
</div>
<footer id="footer" class="footer-fr">
    <div class="w-container">
        <div class="footer-flex-container">
            <div>
                <ul role="list" class="list w-list-unstyled">
                    <li>
                        <a href="#" class="footer-link">À propos</a>
                    </li>
                </ul>
            </div>
            <a href="#" class="footer-link">{{__('')}}Conditions d&#x27;utilisation</a>
            <a id="email" href="mailto:salam@smuuse.com?subject=ask%20footer" class="footer-link">Contact</a>
            <div>
                <ul role="list" class="list-3 w-list-unstyled">
                    <li>
                        <a href="#/ms/profile" class="footer-link">Mon compte</a>
                    </li>
                </ul>
            </div>
            <div>
                <ul role="list" class="list-3 w-list-unstyled">
                    <li>
                        <a href="#" class="footer-link">FAQ</a>
                    </li>
                </ul>
            </div>
            <div class="div-block-194">
                <div class="langue w-clearfix">
                    @if(isset($_COOKIE['lang']))
                        @if($_COOKIE['lang'] == 'fr')
                        <div data-w-id="df413b25-36ec-fef2-5e7e-8c290ca1aad7" class="francais">
                            <img src="{{ asset('img/Mu-globe-langue-gris2x_1Mu-globe-langue-gris2x.png') }}" width="28" alt="">
                            <a href="#" class="button-3 w-button">Français </a>
                            <img src="{{ asset('img/Mu-flech-bas2x_1Mu-flech-bas2x.png') }}"  width="35" alt="">
                        </div>
                        @else
                        <div data-w-id="df413b25-36ec-fef2-5e7e-8c290ca1aad7" class="francais">
                            <img src="{{ asset('img/Mu-globe-langue-gris2x_1Mu-globe-langue-gris2x.png') }}" width="28" alt="">
                            <a href="#" class="button-3 w-button">Anglais </a>
                            <img src="{{ asset('img/Mu-flech-bas2x_1Mu-flech-bas2x.png') }}"  width="35" alt="">
                        </div>
                        @endif
                    @endif
                    <div style="width:0px;height:0px;opacity:0" class="choix-langue">
                        <a href="#" data-w-id="df413b25-36ec-fef2-5e7e-8c290ca1aadd" class="link-block-29 w-inline-block">
                            <div class="text-block-194">English </div>
                        </a>
                        <a href="#" class="link-block-30 w-inline-block">
                            <div class="text-block-195">Français</div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <p class="text-block-223">© 2021 Smuuse.  {{__('All Rights reserved.')}}</p>
    </div>
</footer>
<div class="copy-right">
    <p class="text-block-201">© 2021 Smuuse.  {{__('All Rights reserved.')}}</p>
</div>
</div>
@if(!isset($_COOKIE['lang']))
<div class="modal fade ModalTraduction" id="myModal">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="container-56 w-container">
                <div class="div-block-389">
                    <img src="{{ asset('img/Smuus-logo-2021-fluide-color.png') }}" class="image-139">
                    <img src="{{ asset('img/Smuuse-fushia-blanc-SB.png') }}" loading="lazy" width="347" sizes="(max-width: 479px) 100vw, 347px" class="image-138">
                </div>
                <div class="lang-activ">
                    <a href="{{route('language.choose', 'en')}}" class="button-19 w-button" >English </a>
                    <a href="{{route('language.choose', 'fr')}}" class="button-33 w-button" >Français</a>
                </div>
                <div class="lang-offf">
                    <button  class="button-31 w-button" data-dismiss="modal">عرب</button>
                    <button class="button-31 w-button" data-dismiss="modal">Türk</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
<script>
    
    $("#accordion").on("hide.bs.collapse show.bs.collapse", e => {
        $(e.target)
            .prev()
            .find("i:last-child")
            .toggleClass("fa-minus fa-plus");
    });

    $('form').each(function() {
        if (!$(this).is('[action]')) {
            $(this).attr('action', '/');
        }
    });
</script>
<script>
    $(window).on('load',function(){
        var delayMs = 500; // delay in milliseconds

        setTimeout(function(){
            $('#myModal').modal('show');
        }, delayMs);
    });
</script>
@endsection