<html>
<head>
    <meta content="TARIF" property="og:title">
    <meta content="TARIF" property="twitter:title">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="{{asset('css/menu.css')}}">
    <link rel="stylesheet" href="{{asset('css/tarif.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <script type="text/javascript">WebFont.load({  google: {    families: ["Ubuntu:300,300italic,400,400italic,500,500italic,700,700italic","Oswald:200,300,400,500,600,700","Open Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic","Exo:100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic"]  }});</script>
    <!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
    <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    @php if(isset($_COOKIE['lang'])) App::setLocale($_COOKIE['lang']); @endphp
</head>
<body class="body-15">

<!--<div class="d-block d-flex justify-content-center" style="margin:10%;">
    <div class="card shadow-lg p-3 mb-5 bg-white rounded" >
        <div class="card-body">
            <div class="card-title"> <img src="{{ asset('img/logo-MU.png') }}" width="20" height="20" alt=""> SMUUSE <br>
                <h2><strong>Annuel - Take my rate !</strong></h2>
                <p>
                    Oummati <br>(5 pers.)
                </p>
            </div>
            <form method="post" id="payment-form" action="{{route('tarif')}}">
                @csrf
                <section>
                    <label for="amount">

                        <div class="input-wrapper amount-wrapper">
                            <input id="amount" name="amount" type="hidden" min="120" value="120">
                        </div>
                    </label>
                </section>

                <button class="button btn btn-danger" type="submit"><span style="font-weight:bold">Pick up</span></button><br><br>
            </form>
        </div>
    </div>
    <div class="card shadow-lg p-3 mb-5 bg-white rounded" style="margin-left:40px;">

        <div class="card-body">
            <div class="card-title"> <img src="{{ asset('img/logo-MU.png') }}" width="20" height="20" alt=""> SMUUSE <br>
                <h2><strong>Mensuel - Take my rate !</strong></h2>
                <p>
                Oummati<br>(5 pers.)
                </p>
            </div>
            <form method="post" id="payment-form" action="{{route('tarif')}}">
                @csrf
                <section>
                    <label for="amount">

                        <div class="input-wrapper amount-wrapper">
                            <input id="amount" name="amount" type="hidden" min="12" value="12">
                        </div>
                    </label>
                </section>

                <button class="button btn btn-danger" type="submit"><span style="font-weight:bold">Pick up</span></button><br><br>
            </form>
        </div>
    </div>

    <div class="card shadow-lg p-3 mb-5 bg-white rounded" style="margin-left:40px;" >

        <div class="card-body">
            <div class="card-title"> <img src="{{ asset('img/logo-MU.png') }}" width="20" height="20" alt=""> SMUUSE <br>
                <h2><strong>Mensuel - Take my rate !</strong></h2>
                <p>
                    Sahaba(Individual)
                </p>
            </div>
            <form method="post" id="payment-form" action="{{route('tarif')}}">
                @csrf
                <section>
                    <label for="amount">

                        <div class="input-wrapper amount-wrapper">
                            <input id="amount" name="amount" type="hidden" min="6" value="6">
                        </div>
                    </label>
                </section>

                <button class="button btn btn-info" type="submit"><span style="font-weight:bold">Pick up</span></button><br><br>
            </form>
        </div>
    </div>
    <div class="card shadow-lg p-3 mb-5 bg-white rounded" style="margin-left:40px" >

        <div class="card-body">
            <div class="card-title"> <img src="{{ asset('img/logo-MU.png') }}" width="20" height="20" alt=""> SMUUSE <br>
                <h2><strong>Annuel - Take my rate !</strong></h2>
                <p>
                    Sahaba(Individual)
                </p>
            </div>
            <form method="post" id="payment-form" action="{{route('tarif')}}">
                @csrf
                <section>
                    <label for="amount">

                        <div class="input-wrapper amount-wrapper">
                            <input id="amount" name="amount" type="hidden" min="60" value="60">
                        </div>
                    </label>
                </section>

                <button class="button btn btn-info" type="submit"><span style="font-weight:bold">Pick up</span></button><br><br>
            </form>
        </div>
    </div>
</div>-->
<div class="contentTarif">
    <div class="mu-header-join">
        <div class="container-14 w-container">
            <a href="#" class="link-block-6 w-inline-block w-clearfix">
                <img src="{{asset('img/smuuse-logo-txt-blck-©--p-500.png')}}" loading="lazy" alt="" class="image-46">
            </a>
            <a href="#" class="button-9 w-button">Rejoindre la communauté</a>
        </div><img src="https://uploads-ssl.webflow.com/60264e79b577b12d1dd26f2a/60264e79b577b10320d26f72_Doobl%20buble%402x.png" loading="lazy" alt="" class="bull-22">
    </div>
    <div class="abonne-toi">
        <div class="container-19 w-container">
            <div class="div-block-181">
                <h1 class="heading-18"><span class="text-span-7">À toi de jouer </span>
                    <a href="#prnom" data-ms-member="first-name" class="first-name"><span class="text-span-5">first name <br></span></a>
                </h1>
            </div>
            <p class="text-block-151">participe toi aussi à la levée de fonds...</p>
            <p class="text-block-50">... et construis avec nous le  futur de la communauté</p>
            <div class="div-block-171">
                <div class="text-block-95">Choisis ton abonnement<br>sans engagement + 1 mois gratuits **</div>
                <div class="text-block-136">*</div>
            </div>
            <div class="div-block-172">
                <div class="text-block-137">*</div>
                <div class="text-block-108">Note bien que la plateforme sera disponible pour le ramadan.</div>
            </div>
        </div>
    </div>
    <div class="soutenir">
        <div class="container-22 w-container">
            <div class="baraka-annuel">
                <p class="text-block-174">Annuel</p>
                <div data-w-id="9aaa5bff-a04d-f507-a188-f2f1a25064f7" class="_49-up">
                    <div style="opacity:0.6" class="div-block-184">
                        <p class="text-block-161">Baraka</p>
                        <p class="text-block-380">Individual</p>
                        <p class="text-block-162">59.40 €</p>
                        <div class="div-block-185"></div>
                        <p class="text-block-163">49.95 € /an</p>
                        <p class="text-block-196">soit</p>
                        <div class="_99-95">
                            <p class="text-block-160">4.17</p>
                            <p class="text-block-159">€</p>
                        </div>
                        <p>/mo</p>
                    </div>
                    <a data-w-id="9aaa5bff-a04d-f507-a188-f2f1a250650b" style="opacity:0.1;width:0px;height:0px" href="#/ms/signup/602ba0eed5d448000440ad47" class="link-block-9 w-inline-block">
                        <div class="text-block-155">Bismillah</div>
                        <div class="text-block-156">Je m&#x27;abonne</div>
                        <img src="{{asset('img/Tracé-262x_2Tracé-262x.png')}}" loading="lazy" alt="" class="image-54">
                        <div class="text-block-63">Je vous soutiens </div>
                    </a>
                </div>
            </div>
            <div class="sahab-mensuel">
                <p class="text-block-175">Mensuel</p>
                <div data-w-id="9aaa5bff-a04d-f507-a188-f2f1a2506516" class="_4-95-up">
                    <div class="div-block-96">
                        <h1 class="heading-21">Sahaba</h1>
                        <p class="text-block-59">Individual</p>
                    </div>
                    <div class="div-block-186">
                        <p class="text-block-51">4.95</p>
                        <p class="text-block-52">€</p>
                    </div>
                    <div class="div-block-94">
                        <p class="text-block-56">/mo</p>
                    </div>
                    <a data-w-id="9aaa5bff-a04d-f507-a188-f2f1a2506524" href="#/ms/signup/602b88a32f93b10004c99bc8" class="link-block-8 w-inline-block">
                        <p class="text-block-154">Bismillah</p>
                        <p class="text-block-60">Je m&#x27;abonne</p>
                    </a>
                </div>
            </div>
            <div class="oummati-mensuel">
                <div class="text-block-175">Mensuel</div>
                <div data-w-id="9aaa5bff-a04d-f507-a188-f2f1a250652c" class="_9-95-up">
                    <h1 class="heading-24">Oummati</h1>
                    <p class="text-block-64">Community  (5 pers.)</p>
                    <div class="div-block-92">
                        <h1 class="heading-19">9.95</h1>
                        <p class="text-block-53">€</p>
                    </div>
                    <div>
                        <div class="text-block-58">/mo</div>
                    </div>
                    <a data-w-id="9aaa5bff-a04d-f507-a188-f2f1a2506539" href="#/ms/signup/602ba09cac9a110004d784a3" class="link-block-10 w-inline-block">
                        <h1 class="heading-22">Bismillah<br></h1>
                        <p class="text-block-157">On s&#x27;abonne</p>
                    </a>
                </div>
            </div>
            <div class="mahaba-annuel">
                <p class="text-block-174">Annuel</p>
                <div data-w-id="9aaa5bff-a04d-f507-a188-f2f1a2506542" class="_99-up">
                    <div style="opacity:0.6" class="div-block-184">
                        <p class="text-block-161">Mahaba</p>
                        <p class="text-block-380">Community (5 pers.)</p>
                        <p class="text-block-162">119.40 €</p>
                        <div class="div-block-185"></div>
                        <div class="div-block-346">
                            <p class="text-block-163">99,95 €/an</p>
                        </div>
                        <p class="text-block-199">soit</p>
                        <div class="_99-95">
                            <p class="text-block-160">8.33</p>
                            <p class="text-block-159">€</p>
                        </div>
                        <p>/mo</p>
                    </div>
                    <a data-w-id="9aaa5bff-a04d-f507-a188-f2f1a2506557" style="opacity:0.1;width:0px;height:0px" href="#/ms/signup/602ba156c978d60004ec5a88" class="link-block-24 w-inline-block">
                        <p class="text-block-167">Bismillah</p>
                        <p class="text-block-168">On s&#x27;abonne</p><img src="images/Tracé-262x_2Tracé-262x.png" loading="lazy" alt="" class="image-69">
                        <p class="text-block-165">On vous soutient </p>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="picing-mobil">
        <div class="sahaba-mobil w-container">
            <div class="div-block-99">
                <div class="div-block-101">
                    <div class="div-block-100">
                        <div class="div-block-104">
                            <div class="div-block-102">
                                <h1 class="heading-25">4.95</h1>
                                <p class="text-block-65">€</p>
                            </div>
                            <p class="text-block-66">/mois</p>
                        </div>
                    </div>
                    <div class="div-block-103">
                        <h1 class="heading-26">Sahaba</h1>
                        <p class="text-block-67">Individuel</p>
                    </div>
                </div>
                <a href="#" class="link-block-8 w-inline-block">
                    <h1 class="heading-22">Bismillah<br></h1>
                    <p class="text-block-60">Je m&#x27;abonne</p>
                </a>
            </div>
        </div>
    </div>
    <div class="pricing-horizon">
        <div class="sahaba-mob w-container">
            <p class="text-block-175">Mensuel</p>
            <div class="sahaba-horiz">
                <div class="div-block-105">
                    <div class="div-block-107">
                        <div class="div-block-109">
                            <h1 class="heading-28">Sahaba</h1>
                            <p class="text-block-70">Individuel</p>
                            <div class="div-block-108">
                                <h1 class="heading-27">4.95</h1>
                                <p class="text-block-68">€</p>
                            </div>
                            <p class="text-block-69">/mo</p>
                        </div>
                    </div>
                    <a href="#/ms/signup/602b88a32f93b10004c99bc8" class="link-bull-bismillah w-inline-block">
                        <p class="text-block-71">Bismillah</p>
                        <p class="text-block-72">Je m&#x27;abonne</p>
                    </a>
                </div>
            </div>
        </div>
        <div class="oummati-mob w-container">
            <div class="div-block-117">
                <div class="div-block-118">
                    <div class="div-block-119">
                        <div class="div-block-122">
                            <p class="text-block-81">Oummati</p>
                            <p class="text-block-430">Community  (5 pers.)</p>
                        </div>
                        <div class="div-block-121">
                            <div class="text-block-79">9.95</div>
                            <div class="text-block-97">€</div>
                        </div>
                        <p class="text-block-82">/mo</p>
                    </div>
                    <a href="#/ms/signup/602ba09cac9a110004d784a3" class="div-block-120 w-inline-block">
                        <p class="text-block-83">Bismillah</p>
                        <p class="text-block-84">On s&#x27;abonne</p>
                    </a>
                </div>
            </div>
        </div>
        <p class="text-block-174">Annuel</p>
        <div class="baraka-mob w-container">
            <div class="div-block-123">
                <div class="div-block-124">
                    <div class="div-block-128">
                        <p class="text-block-88">Baraka</p>
                        <p class="text-block-87">Individuel</p>
                        <p class="text-block-432">49.95/an*</p>
                        <p class="text-block-429">soit</p>
                        <div class="div-block-126">
                            <p class="text-block-86">4.17</p>
                            <p class="text-block-97">€</p>
                        </div>
                        <div class="div-block-127">
                            <p class="text-block-89">/mo</p>
                        </div>
                    </div>
                </div>
                <a href="#/ms/signup/602ba0eed5d448000440ad47" class="link-block-12 w-inline-block">
                    <p class="text-block-92">Bismillah</p>
                    <p class="text-block-94">Je m&#x27;abonne</p>
                    <img src="{{asset('img/Tracé-262x_2Tracé-262x.png')}}" loading="lazy" alt="">
                    <p class="text-block-94">Je vous soutiens </p>
                </a>
            </div>
            <p class="text-block-431">*Offre promotionnelle 49.95 au lieu de 59.40</p>
        </div>
        <div class="baraka-plus w-container">
            <div class="div-block-173">
                <div class="_99">
                    <div class="div-block-176">
                        <p class="text-block-143">Mahaba</p>
                        <p class="text-block-144">Community (5 pers.)</p>
                        <p class="text-block-145">99,95/an*</p>
                        <p class="text-block-429">soit</p>
                    </div>
                    <div class="div-block-177">
                        <div class="text-block-141">8.33</div>
                        <div class="text-block-152">€</div>
                    </div>
                    <div class="div-block-182">
                        <div>/mo</div>
                    </div>
                </div>
                <a href="#/ms/signup/602ba156c978d60004ec5a88" class="link-block-20 w-inline-block">
                    <p class="text-block-138">Bismillah</p>
                    <p class="abonneT">On s&#x27;abonne</p>
                    <img src="{{asset('img/Tracé-262x_2Tracé-262x.png')}}" loading="lazy" alt="">
                    <p class="abonneT">On vous soutient</p>
                </a>
            </div>
            <p class="text-block-431">*Offre promotionnelle 99.95 au lieu de 119.40</p>
        </div>
    </div>
    <div class="section-19">
            <div class="container-48 w-container">
            <div class="text-block-183">Voir les <a href="#" class="link-10">conditions générales d&#x27;utilisation</a>
            </div>
            <div class="text-block-189">** Nous n&#x27;effectuerons qu&#x27;un seul prélèvement pour activer ton compte.<br><br>Une fois la plateforme active, tu pourras profiter de 1 mois gratuit pour les abonnements mensuels et de 2 mois gratuits pour les abonnements annuels.</div>
        </div>
    </div>
    <footer id="footer" class="footer-fr-2">
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
                <a id="email" href="#" class="footer-link">Politique de Confidentialité </a>
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
                        <div data-w-id="4bf2d467-3962-b2a1-4399-4f570702e62d" class="francais">
                            <a href="#" class="button-3 w-button">Français </a>
                        </div>
                        <div style="width:0px;height:0px;opacity:0" class="choix-langue">
                            <a href="https://www.smuuse.com" class="link-block-29 w-inline-block">
                                <p class="text-block-194">English </p>
                            </a>
                            <a href="#" class="link-block-30 w-inline-block">
                                <p class="text-block-195">Français</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <p class="text-block-223">© 2021 Smuuse. Tous droits réservés.</p>
        </div>
    </footer>
    <script src="js/webflow.js" type="text/javascript"></script>
    <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
</div>


<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="{{asset('js/tarif.js')}}"></script>

</body>
