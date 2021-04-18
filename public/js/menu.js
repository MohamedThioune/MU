$(document).ready(function() {
    $( ".contentSidElement" ).addClass('v1') ;
    $( "._4-points" ).click(function() {
        $( ".sidebar-format" ).removeClass('invisible').addClass('visible') ;
        $( ".nav-up-right" ).addClass('opacityElement') ;
        $( ".griscolor" ).addClass('grisElement') ;
        $( ".contentSidElement" ).removeClass('v1') ;
    });
    $( "._4-points-closed" ).click(function() {
        $( ".sidebar-format" ).removeClass('visible').addClass('invisible') ;
        $( ".nav-up-right" ).removeClass('opacityElement') ;
        $( ".griscolor" ).removeClass('grisElement') ;
        $( ".contentSidElement" ).addClass('v1') ;

    });
});
$(document).ready(function() {
    $( ".flow" ).click(function() {
        $( ".sousCategorieFlow" ).addClass('visibleSousCategorie');
    });
    $( ".kids" ).click(function() {
        $( ".sousCategorieFlow" ).addClass('visibleSousCategorie');
    });
});
$(document).ready(function() {
    $( ".btnModalClose" ).click(function() {
        $( ".shopInModal" ).hide(0.9);
    });
    $( ".btnModalOpen" ).click(function() {
        $( ".shopInModal" ).show(0.9);
    });
});



// pour le sidbar coté client
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
$("#parametre").click(function(){
    $("#sousBlockParametre").toggle();
});
