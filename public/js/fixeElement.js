$(document).ready(function() {
    $( ".alerte7" ).hide() ;
    $( ".group9" ).addClass('mobileVisiblite');
    $( ".sidebar-format" ).removeClass('invisible').addClass('indexElement') ;
    $(".IconeRose").click(function(){
        $( ".group9" ).addClass('mobileVisiblite');
     });
    $(".IconeBlanc").click(function(){
        $( ".group9" ).removeClass('mobileVisiblite');
     });

    //toogle des éléments du sidbar
    $("#monFlow").click(function(){
        $("#sousBlockMonFlow").toggle();
    });
    $("#mesKiffes").click(function(){
        $("#sousBlockKiffes").toggle();
    });
    $("#maChaines").click(function(){
        $("#sousBlockChaines").toggle();
    });
    $("#timeChield").click(function(){
        $("#sousBlockTimeChield").toggle();
    });
    $("#hassanates").click(function(){
        $("#sousBlockHassanates").toggle();
    });
    $("#sadaka").click(function(){
        $("#sousBlockSadaka").toggle();
    });
    $("#compte").click(function(){
        $("#sousBlockCompte").toggle();
    });
    $("#parametre").click(function(){
        $("#sousBlockParametre").toggle();
    });
    $(".btnSubscripeNotif").click(function(){
        $( ".alerte7" ).show() ;
    });
});

