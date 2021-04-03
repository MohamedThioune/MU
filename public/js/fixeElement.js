$(document).ready(function() {
    $( ".sidebar-format" ).removeClass('invisible').addClass('indexElement') ;

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
});

