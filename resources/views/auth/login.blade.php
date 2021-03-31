@extends('layouts.app')

@section('content')
@php App::setLocale(session('lang')); @endphp
<div class="body-3">
<div class="section-2">
    <div class="container-6 w-container">
        <div class="div-block-15">
            <img src="{{ asset('img/smuuse-logo-txt-blck-©-.png') }}" >
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
                    <div class="w-100">
                        <input id="email" type="email" placeholder="{{ __('E-Mail or Phone') }}" class="text-field w-input form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required >

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
                        <p class="text-block-6">{{ __('You don\'t have an account yet?')}}</p>
                    </div>
                    <div class="div-block-6 text-center">
                        <a href="{{ route('register') }}" class="text-block-7"><b>Bismillah </b> <br> <span class="text-block-9">{{ __('I join my community')}}</span></a>
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
                    <h1 data-w-id="adafdb43-370d-b392-95fb-2c2aa0f32678" class="heading-29">Nous sommes musulmans.<br>Alors partageons le bien ;)</h1>
                </div>
                <div class="div-block-136">
                </div>
            </div>
        </div>
        <div class="div-block-132">
            <div class="div-block-133">
                <p  class="text-block-102">Il était indispensable et urgent d’avoir un service de streaming préservé de contenus inappropriés et inspiré de nos valeurs … </p>
                <p  class="text-block-103">... alors, nous l&#x27;avons fait.</p>
                <p  class="text-block-104">Pour nos enfants et pour nous même.</p>
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
        <h2 class="heading-44">Al hamdulilah ! <br>Incroyable !<br></h2>
        <p class="text-block-222">Je souhaite rester informé</p>
        <div class="w-form">
            <form class="subscribe-form-flex">
                <div class="subscribe-form-input-wrapper">
                    <input type="email" class="subscribe-form-input-2 w-input" maxlength="256" placeholder="E-mail">
                </div>
                <input type="submit" value="BISMILLAH"  class="submit-button-3 w-button">
            </form>
            <div class="w-form-done">
                <p>Thank you! Your submission has been received!</p>
            </div>
            <div class="w-form-fail">
                <p>Oops! Something went wrong while submitting the form.</p>
            </div>
        </div>
        <a href="#" class="button-13 w-button">Je rejoins ma communauté </a>
        <a href="#" class="link-16">En savoir davantage</a>
    </div>
</section>
<div id="FAQ" class="faq-fr">
    <div class="container-53 w-container">
        <div class="w-clearfix">
            <div class="bulle-faq">
                <img src="{{ asset('img/Doobl-buble2x.png') }}" class="image-83">
            </div>
            <h3 class="faq-h2">Foire aux questions </h3>
            <div class="bull-faq-2">
                <img src="{{ asset('img/Buble-4002x.png') }}" class="img-80">
            </div>
            <div class="faq-min-height">
                <div class="faq-wrapper">
                    <div class="faq-question">
                        <p class="faq-q-text"><strong class="bold-text-5">Qu’est-ce que Smuuse ?</strong></p>
                        <div class="faq-plus-wrap">
                            <div class="faq-plus-l"></div>
                            <div class="faq-plus"></div>
                        </div>
                    </div>
                    <div class="faq-answer">
                        <p class="faq-answer-text">Smuuse est un site web d’hébergement de vidéos inspiré des valeurs musulmanes.<br>‍<br>Smuuse te permet de découvrir, partager, publier, évaluer , informer et soutenir ceux qui promeuvent le meilleur, au travers de vidéos diverses et variées… embrassant des sujets passionnants et surprenants. <br><br>Bien plus qu’une plateforme, Smuuse t’offre l’opportunité de récolter beaucoup de hassanates (bonnes actions) et de trouver l’inspiration pour te rendre meilleur(e). In sha Allah !<br></p>
                    </div>
                </div>
                <div class="faq-wrapper">
                    <div class="faq-question">
                        <p class="faq-q-text"><strong class="bold-text-5">Combien ça coûte ?</strong></p>
                        <div class="faq-plus-wrap">
                            <div class="faq-plus-l"></div>
                            <div class="faq-plus"></div>
                        </div>
                    </div>
                    <div class="faq-answer">
                        <p class="faq-answer-text">L’abonnement individuel coûte : 4,95 € / mois * <br>L’abonnement famille coûte : 9,95 € /mois* (pour 5 personnes).<br>Tu peux également profiter d’un abonnement annuel dont le prix varie en fonction des offres du moment.<br>‍<br>Ton abonnement est avant tout un investissement pour toi même, pour le rôle que tu souhaites jouer dans ta communauté. Avec Smuuse, nous mettons à ta disposition un bel outil, à toi d&#x27;en faire le meilleur usage.<br></p>
                    </div>
                </div>
                <div class="faq-wrapper">
                    <div class="faq-question">
                        <p class="faq-q-text"><strong class="bold-text-5">Pourquoi Smuuse est-il payant ?</strong></p>
                        <div class="faq-plus-wrap">
                            <div class="faq-plus-l"></div>
                            <div class="faq-plus"></div>
                        </div>
                    </div>
                    <div class="faq-answer">
                        <p class="faq-answer-text">Pour t’offrir la meilleure expérience et la plus fiable. <br>Pour garantir notre indépendance et la tienne.<br>Pour rémunérer ceux qui produisent du contenu.<br>‍<br>Parce que nous ne revendons pas tes données.<br>‍<br>Nous souhaitons construire le futur de la communauté avec la communauté et sans financement ce n’est pas possible. <br><br>Nous avons donc besoin de ta participation financière, mais également de tes invocations et de toutes autres aides que tu peux apporter ; en partageant au maximum le site par exemple...<br></p>
                    </div>
                </div>
                <div class="faq-wrapper">
                    <div class="faq-question">
                        <p class="faq-q-text"><strong class="bold-text-5">Puis-je gagner de l&#x27;argent sur Smuuse ?</strong></p>
                        <div class="faq-plus-wrap">
                            <div class="faq-plus-l"></div>
                            <div class="faq-plus"></div>
                        </div>
                    </div>
                    <div class="faq-answer">
                        <p class="faq-answer-text">Oui ! In sha Allah ! En produisant du contenu apprécié par les autres utilisateurs.<br><br>Tu peux ainsi combiner et multiplier tes intentions à la fois pour gagner ici bas et dans l&#x27;au-delà.<br>Tu trouveras tous les éléments dans la rubrique rémunération, une fois la plateforme active.<br></p>
                    </div>
                </div>
                <div class="faq-wrapper">
                    <div class="faq-question">
                        <div class="faq-q-text"><strong class="bold-text-5">Smuuse filtre-t-il les contenus ?</strong></div>
                        <div class="faq-plus-wrap">
                            <div class="faq-plus-l"></div>
                            <div class="faq-plus"></div>
                        </div>
                    </div>
                    <div class="faq-answer">
                        <p class="faq-answer-text">Oui, nous appliquons plusieurs filtres sur les contenus, mais également sur les comptes et les publications.<br>‍<br>Nous avons aussi mis à ta disposition un filtre pour affiner les vidéos avec nous… Oui ! Aucune bonne action n’est à négliger. Alors, profites-en.</p>
                    </div>
                </div>
                <div class="faq-wrapper">
                    <div class="faq-question">
                        <p class="faq-q-text"><strong class="bold-text-5">Y a-t-il de la publicité sur Smuuse ?</strong></p>
                        <div class="faq-plus-wrap">
                            <div class="faq-plus-l"></div>
                            <div class="faq-plus"></div>
                        </div>
                    </div>
                    <div class="faq-answer">
                        <p class="faq-answer-text">Oui, il y a de la publicité. Rassure-toi, elle ne sera pas intrusive.<br>Nous aussi nous n’aimons pas être interrompus par de la pub en plein milieu d’une vidéo.<br>‍<br>La publicité est importante sur Smuuse. Elle permet de donner plus de visibilité aux acteurs commerciaux de la communauté, aux associations, etc. Elle te permet aussi de consommer plus éthique et de faire des bonnes actions par la même occasion.</p>
                    </div>
                </div>
                <div class="faq-wrapper">
                    <div class="faq-question">
                        <p class="faq-q-text"><strong class="bold-text-5">Qu’inclut mon abonnement ?</strong></p>
                        <div class="faq-plus-wrap">
                            <div class="faq-plus-l"></div>
                            <div class="faq-plus"></div>
                        </div>
                    </div>
                    <div class="faq-answer">
                        <p class="faq-answer-text">Ton abonnement comprend, en illimité, tous les services de streaming (Flow, Sista2Sista et Kids) et aux &quot;hassanates party&quot;.  <br>Cependant, des services additionnels  viendront compléter l’offre ultérieurement… Beaucoup de surprises sont à venir.</p>
                    </div>
                </div>
                <div class="faq-wrapper">
                    <div class="faq-question">
                        <p class="faq-q-text"><strong class="bold-text-5">Comment désactiver mon abonnement ?</strong></p>
                        <div class="faq-plus-wrap">
                            <div class="faq-plus-l"></div>
                            <div class="faq-plus"></div>
                        </div>
                    </div>
                    <div class="faq-answer">
                        <p class="faq-answer-text">Tu pourras facilement désactiver ton abonnement en te rendant dans ton compte et en décochant celui-ci. Il s’arrêtera automatiquement à la fin du cycle de facturation.</p>
                    </div>
                </div>
                <div class="faq-wrapper">
                    <div class="faq-question">
                        <p class="faq-q-text"><strong class="bold-text-5">Quand commence mon abonnement ?</strong></p>
                        <div class="faq-plus-wrap">
                            <div class="faq-plus-l"></div>
                            <div class="faq-plus"></div>
                        </div>
                    </div>
                    <div class="faq-answer">
                        <p class="faq-answer-text">Lorsque tu souscris à ton abonnement, tu es prélevé(e) une seule fois pour activer ton compte. <br>‍<br>Dès lors que la plateforme est en ligne, tu profites de 1 mois gratuit avant que ne commencent les prélèvements mensuels. <br>‍<br>Si tu as souscrit à un abonnement annuel, tu bénéficieras de 2 mois gratuits.</p>
                    </div>
                </div>
                <div class="faq-wrapper">
                    <div class="faq-question">
                        <p class="faq-q-text"><strong class="bold-text-5">Qui sommes-nous ?</strong></p>
                        <div class="faq-plus-wrap">
                            <div class="faq-plus-l"></div>
                            <div class="faq-plus"></div>
                        </div>
                    </div>
                    <div class="faq-answer">
                        <p class="faq-answer-text">Nous sommes des pères et des mères, des fils et des filles, des frères et des soeurs, des entrepreneurs et des entrepreneuses. <br>‍<br>Nous souhaitons être les acteurs de nos vies contemporaines et non uniquement des spectateurs.<br> <br>Nous commettrons beaucoup d’erreurs, car la tâche n’est pas simple. Nous demandons donc ton soutien, ton indulgence et tes invocations, et surtout le pardon de notre Seigneur (AL Afouw, Celui qui efface les fautes) et Son aide.<br>  <br>Nous sommes tout simplement des musulmans, fiers de l’être et espérons le Firdaws (le paradis le plus élevé), pour nous comme pour toi !<br>‍<br>Que la Paix et les bénédictions d’Allah, à Lui la gloire et les louanges, soient sur notre bien aimé prophète. <br><br>Tu peux nous écrire par e-mail à : <a href="mailto:ask@smuuse.com" class="link-15">salam@smuuse.com</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="remerciement">
    <div class="container-37 w-container">
        <p class="text-block-44">* Images non contractuelles<br></p>
        <p class="text-block-170">Nous tenons à remercier toutes les personnes qui veillent à notre bien-être et à notre santé... et toutes les louanges sont à Allah.<br>Nos remerciements également tous celles et ceux qui concourent à notre réussite. <br></p>
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
            <a href="#" class="footer-link">Conditions d&#x27;utilisation</a>
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
                    <div data-w-id="df413b25-36ec-fef2-5e7e-8c290ca1aad7" class="francais">
                        <img src="{{ asset('img/Mu-globe-langue-gris2x_1Mu-globe-langue-gris2x.png') }}" width="28" alt="">
                        <a href="#" class="button-3 w-button">Français </a>
                        <img src="{{ asset('img/Mu-flech-bas2x_1Mu-flech-bas2x.png') }}"  width="35" alt="">
                    </div>
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
        <p class="text-block-223">© 2021 Smuuse.  All rights reserved.</p>
    </div>
</footer>
<div class="copy-right">
    <p class="text-block-201">© 2021 Smuuse.  All Rights Reserved.</p>
</div>
</div>
<script>
    $("#accordion").on("hide.bs.collapse show.bs.collapse", e => {
        $(e.target)
            .prev()
            .find("i:last-child")
            .toggleClass("fa-minus fa-plus");
    });
</script>
@endsection