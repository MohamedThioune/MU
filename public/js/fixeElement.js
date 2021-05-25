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
        $("#monFlow").addClass('active');
        $("#mesKiffes").removeClass('active');
        $("#maChaines").removeClass('active');
        $("#timeChield").removeClass('active');
        $("#hassanates").removeClass('active');
        $("#sadaka").removeClass('active');
        $("#compte").removeClass('active');
        $("#parametre").removeClass('active');
    });
    $("#mesKiffes").click(function(){
        $("#sousBlockKiffes").toggle();
        $("#mesKiffes").addClass('active');
        $("#monFlow").removeClass('active');
        $("#maChaines").removeClass('active');
        $("#timeChield").removeClass('active');
        $("#hassanates").removeClass('active');
        $("#sadaka").removeClass('active');
        $("#compte").removeClass('active');
        $("#parametre").removeClass('active');
    });
    $("#maChaines").click(function(){
        $("#sousBlockChaines").toggle();
        $("#maChaines").addClass('active');
        $("#monFlow").removeClass('active');
        $("#mesKiffes").removeClass('active');
        $("#timeChield").removeClass('active');
        $("#hassanates").removeClass('active');
        $("#sadaka").removeClass('active');
        $("#compte").removeClass('active');
        $("#parametre").removeClass('active');
    });
    $("#timeChield").click(function(){
        $("#sousBlockTimeChield").toggle();
        $("#timeChield").addClass('active');
        $("#monFlow").removeClass('active');
        $("#mesKiffes").removeClass('active');
        $("#maChaines").removeClass('active');
        $("#hassanates").removeClass('active');
        $("#sadaka").removeClass('active');
        $("#compte").removeClass('active');
        $("#parametre").removeClass('active');
    });
    $("#hassanates").click(function(){
        $("#sousBlockHassanates").toggle();
        $("#hassanates").addClass('active');
        $("#monFlow").removeClass('active');
        $("#mesKiffes").removeClass('active');
        $("#maChaines").removeClass('active');
        $("#timeChield").removeClass('active');
        $("#sadaka").removeClass('active');
        $("#compte").removeClass('active');
        $("#parametre").removeClass('active');
    });
    $("#sadaka").click(function(){
        $("#sousBlockSadaka").toggle();
        $("#sadaka").addClass('active');
        $("#monFlow").removeClass('active');
        $("#mesKiffes").removeClass('active');
        $("#maChaines").removeClass('active');
        $("#timeChield").removeClass('active');
        $("#hassanates").removeClass('active');
        $("#compte").removeClass('active');
        $("#parametre").removeClass('active');
    });
    $("#compte").click(function(){
        $("#sousBlockCompte").toggle();
        $("#compte").addClass('active');
        $("#monFlow").removeClass('active');
        $("#mesKiffes").removeClass('active');
        $("#maChaines").removeClass('active');
        $("#timeChield").removeClass('active');
        $("#hassanates").removeClass('active');
        $("#sadaka").removeClass('active');
        $("#parametre").removeClass('active');
    });
    $("#parametre").click(function(){
        $("#sousBlockParametre").toggle();
        $("#parametre").addClass('active');
        $("#monFlow").removeClass('active');
        $("#mesKiffes").removeClass('active');
        $("#maChaines").removeClass('active');
        $("#timeChield").removeClass('active');
        $("#hassanates").removeClass('active');
        $("#sadaka").removeClass('active');
        $("#compte").removeClass('active');
    });
    $(".btnSubscripeNotif").click(function(){
        $( ".alerte7" ).show() ;
    });
});

