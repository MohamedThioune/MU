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
    <link rel="stylesheet" href="../css/webflow.css">

    @yield('head')
</head>

<body>

<div class="content-section-sibBar">
    <div class="content-naveBar-sidbar">
        <div class="section-12">
            <a href="#" class="w-inline-block">
                <img src="{{ asset('img/Mu-menu-4-balls-blanc2x.png') }}"  class="image-96">
            </a>
            <img src="{{ asset('img/logo-MU.png') }}" class="imgLogo">
        </div>
        <div class="section-13">
            <a href="" class="link-block-34 w-inline-block">
                <img src="{{ asset('img/Smuuse-fushia-blanc-SB.png') }}"  class="fushia">
            </a>
        </div>
    </div>
    <div class="d-flex">
        <div class="content-sidbar">
            <div class="sidebar">
                <div class="head-slidebar">
                    <div class="text-ma-chaine">Ma chaîne</div>
                    <div class="text-fonction">Particulier</div>
                    <div class="profil-photo">
                        <img src="{{ asset('img/Mu-bull-profil-daniela-constantin.jpg') }}" alt="" class="image-94">
                    </div>
                    <p class="text-name-creator">Halimatou Créatrice de douceurs</p>
                </div>
                <div class="faq-wrapper">
                    <div class="faq-question">
                        <div class="indentification">
                            <div class="sidebar-icon">
                                <img src="{{ asset('img/baseline-brightness_2-24px2x.png') }}" alt="">
                            </div>
                            <p class="faq-q-text"><strong class="bold-text-5">Mon Flow</strong></p>
                        </div>
                    </div>
                    <div class="faq-answer">
                        <p class="faq-answer-text">Alerte<br>Playliste<br>Ânonnements <br></p>
                    </div>
                </div>
                <div class="faq-wrapper">
                    <div class="faq-question">
                        <div class="indentification">
                            <div class="sidebar-icon">
                                <img class="machaineImg" src="{{ asset('img/Mu-tv-icone2x.png') }}"  alt="">
                            </div>
                            <p class="faq-q-text"><strong class="bold-text-5">Ma Chaîne</strong></p>
                        </div>
                    </div>
                    <div class="faq-answer">
                        <a href="flow-dashboard.html" class="link-block-36 w-inline-block">
                            <div class="text-block-261">Tableau de bord</div>
                        </a>
                        <a href="ma-chaine-publier.html" class="link-block-36 w-inline-block w--current">
                            <p class="text-block-261">Publier</p>
                        </a>
                        <p class="faq-answer-text">Publier<br>Mes vidéos <br>Commentaires <br>Audiences <br>Abonnés<br>Monétisation<br></p>
                    </div>
                </div>
                <div class="faq-wrapper">
                    <div class="faq-question">
                        <div class="indentification">
                            <div class="sidebar-icon">
                                <img src="{{ asset('img/baseline-brightness_2-24px2x.png') }}"  alt="">
                            </div>
                            <p class="faq-q-text"><strong class="bold-text-5">Time Shaid</strong></p>
                        </div>
                    </div>
                    <div class="faq-answer">
                        <p class="faq-answer-text">Smuuse option<br>‍<br></p>
                    </div>
                </div>
                <div class="faq-wrapper">
                    <div class="faq-question">
                        <div class="indentification">
                            <div class="sidebar-icon">
                                <img src="{{ asset('img/baseline-brightness_2-24px2x.png') }}" alt="">
                            </div>
                            <p class="faq-q-text"><strong class="bold-text-5">Hassanates P.</strong></p>
                        </div>
                    </div>
                    <div class="faq-answer">
                        <p class="faq-answer-text">Time Sahid<br>Sadakatiya<br>Hassanates Party<br></p>
                    </div>
                </div>
                <div class="faq-wrapper">
                    <div class="faq-question">
                        <div class="indentification">
                            <div class="sidebar-icon">
                                <img src="{{ asset('img/Mu-menu-4-balls-blanc2x.png') }}" alt="">
                            </div>
                            <p class="faq-q-text"><strong class="bold-text-5">Sadakatiya</strong></p>
                        </div>
                    </div>
                    <div class="faq-answer">
                        <p class="faq-answer-text">Smuuse option<br>‍<br></p>
                    </div>
                </div>
                <div class="faq-wrapper">
                    <div class="faq-question">
                        <div class="indentification">
                            <div class="sidebar-icon">
                                <img src="{{ asset('img/Mu-menu-4-balls-blanc2x.png') }}" alt="">
                            </div>
                            <p class="faq-q-text"><strong class="bold-text-5">MON COMPTE</strong></p>
                        </div>
                    </div>
                    <div class="faq-answer">
                        <p class="faq-answer-text">Smuuse option<br>‍<br></p>
                    </div>
                </div>
            </div>

        </div>
        <div class="content-element-page">
            @yield('content-element-page')
        </div>
    </div>



</div>

<!-- jQuery 3.1.1 -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.1/moment.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
<!-- AdminLTE App -->
<script src="../js/menu.js"></script>
<script src="../js/app.js"></script>
<script src="../js/webflow.js"></script>
<script src="../js/custom-file-input.js"></script>
<script >
    $(function(){
        var container = $('.content2'), inputFile = $('#thumbnail'), img, btn, txt = 'Modifier vignette de vidéo', txtAfter = 'Modifier vignette de vidéo';

        if(!container.find('#upload').length){
            container.find('.input').append('<input type="button" value="'+txt+'" id="upload">');
            btn = $('#upload');
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
@stack('scripts')
</body>
</html>