<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>
        MU
    </title>
    <meta charset="utf-8">
     <meta http-equiv="X-UA-Com10.patible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/sidbarDasboard.css">

    <link rel="stylesheet" href="../css/mu-dev.webflow.css">
    <script src="https://kit.fontawesome.com/2def424b14.js" crossorigin="anonymous"></script>
    @yield('head')
</head>

<body>

<div class="content-section-sibBar">
    <div class="d-flex">
        <div class="content-sidbar">
            <div class="sidebar sideBarModife">
                <div class="head-slidebar">
                    <div class="text-ma-chaine">Ma chaîne</div>
                    <div class="text-fonction">Particulier</div>
                    <div class="profil-photo">
                        <img src="{{ asset('img/Mu-bull-profil-daniela-constantin.jpg') }}" alt="" class="image-94">
                    </div>

                </div>
                <div class="faq-wrapper">
                    <div class="faq-question" id="monFlow">
                        <div class="indentification">
                            <div class="sidebar-icon">
                                <img src="{{ asset('img/baseline-brightness_2-24px2x.png') }}" alt="">
                            </div>
                            <p class="faq-q-text"><strong class="bold-text-5">Mon Flow</strong></p>
                        </div>
                    </div>
                    <div class="faq-answer" id="sousBlockMonFlow">
                        <a class="faq-answer-text" href="">Alerte</a>
                        <a class="faq-answer-text" href="">Playliste</a>
                        <a class="faq-answer-text" href="">Âbonnements </a>
                    </div>
                </div>
                <div class="faq-wrapper">
                    <div class="faq-question" id="maChaines">
                        <div class="indentification">
                            <div class="sidebar-icon">
                                <img class="machaineImg" src="{{ asset('img/Mu-tv-icone2x.png') }}"  alt="">
                            </div>
                            <p class="faq-q-text"><strong class="bold-text-5">Ma Chaîne</strong></p>
                        </div>
                    </div>
                    <div class="faq-answer" id="sousBlockChaines">
                        <a href="flow-dashboard.html" class="link-block-36 w-inline-block">
                            <div class="text-block-261">Tableau de bord</div>
                        </a>
                        <a href="ma-chaine-publier.html" class="link-block-36 w-inline-block w--current">
                            <p class="text-block-261">Publier</p>
                        </a>
                        <a href="" class="faq-answer-text">Publier</a>
                        <a href=""  class="faq-answer-text">Mes vidéos </a>
                        <a href="" class="faq-answer-text">Commentaires</a>
                        <a href="" class="faq-answer-text">Audiences</a>
                        <a href="" class="faq-answer-text">Abonnés</a>
                        <a href="" class="faq-answer-text"> Monétisation</a>
                    </div>
                </div>
                <div class="faq-wrapper">
                    <div class="faq-question" id="timeChield">
                        <div class="indentification">
                            <div class="sidebar-icon">
                                <img src="{{ asset('img/baseline-brightness_2-24px2x.png') }}"  alt="">
                            </div>
                            <p class="faq-q-text"><strong class="bold-text-5">Time Shaid</strong></p>
                        </div>
                    </div>
                    <div class="faq-answer" id="sousBlockTimeChield">
                        <a href="" class="faq-answer-text">Smuuse option</a>
                        <a href="" class="faq-answer-text">‍</a>
                    </div>
                </div>
                <div class="faq-wrapper">
                    <div class="faq-question" id="hassanates">
                        <div class="indentification">
                            <div class="sidebar-icon">
                                <img src="{{ asset('img/baseline-brightness_2-24px2x.png') }}" alt="">
                            </div>
                            <p class="faq-q-text"><strong class="bold-text-5">Hassanates P.</strong></p>
                        </div>
                    </div>
                    <div class="faq-answer"id="sousBlockHassanates">
                        <a href="" class="faq-answer-text">Time Sahid</a>
                        <a href="" class="faq-answer-text">Sadakatiya</a>
                        <a href="" class="faq-answer-text">Hassanates Party</a>
                    </div>
                </div>
                <div class="faq-wrapper">
                    <div class="faq-question" id="sadaka">
                        <div class="indentification">
                            <div class="sidebar-icon">
                                <img src="{{ asset('img/Mu-menu-4-balls-blanc2x.png') }}" alt="">
                            </div>
                            <p class="faq-q-text"><strong class="bold-text-5">Sadakatiya</strong></p>
                        </div>
                    </div>
                    <div class="faq-answer" id="sousBlockSadaka">
                        <a href="" class="faq-answer-text">Smuuse option</a>
                        <a href="" class="faq-answer-text">‍</a>
                    </div>
                </div>
                <div class="faq-wrapper">
                    <div class="faq-question" id="compte">
                        <div class="indentification">
                            <div class="sidebar-icon">
                                <img src="{{ asset('img/Mu-menu-4-balls-blanc2x.png') }}" alt="">
                            </div>
                            <p class="faq-q-text"><strong class="bold-text-5">MON COMPTE</strong></p>
                        </div>
                    </div>
                    <div class="faq-answer" id="sousBlockCompte">
                        <a href="" class="faq-answer-text">Smuuse option</a>
                        <a href="" class="faq-answer-text">‍</a>
                    </div>
                </div>
            </div>

        </div>
        <div class="content22">
            @yield ('content-sidbar-element')
        </div>
    </div>
</div>


<!-- AdminLTE App -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="{{asset('js/menu.js')}}"></script>
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
@stack('scripts')
</body>
</html>