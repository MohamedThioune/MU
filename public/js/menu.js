$(document).ready(function() {
    $( "._4-points" ).click(function() {
        $( ".sidebar-format" ).removeClass('invisible').addClass('visible') ;
        $( ".content-section-sibBar" ).removeClass('invisible').addClass('visible') ;
        $( ".nav-up-right" ).addClass('opacityElement') ;
        $( ".griscolor" ).addClass('grisElement') ;
        $( ".contentSidElement" ).removeClass('v1') ;
    });
    $( "._4-points-closed" ).click(function() {
        $( ".sidebar-format" ).removeClass('visible').addClass('invisible') ;
        $( ".content-section-sibBar" ).removeClass('visible').addClass('invisible') ;
        $( ".nav-up-right" ).removeClass('opacityElement') ;
        $( ".griscolor" ).removeClass('grisElement') ;
        $( ".contentSidElement" ).addClass('v1') ;

    });
    $(".IconeRose").click(function(){
        $( ".group9" ).addClass('mobileVisiblite');
    });
    $(".IconeBlanc").click(function(){
        $( ".group9" ).removeClass('mobileVisiblite');
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

// pour le button read more pour le block commentaire
$(document).ready(function(){
    //length in characters
    var maxLength = 30;
    var ellipsestext = "...";
    var moretext = "Read more";
    var lesstext = "Read less";
    $(".showReadMore1").each(function(){
        //get the text of paragraph or div
        var myStr = $(this).text();

        // check if it exceeds the maxLength limit
        if($.trim(myStr).length > maxLength){
            //get only limited string firts to show text on page load
            var newStr = myStr.substring(0, maxLength);

            //get remaining string
            var removedStr = myStr.substr(maxLength, $.trim(myStr).length - maxLength);
            // now append the newStr + "..."+ hidden remaining string
            var Newhtml = newStr + '<span class="moreellipses">' + ellipsestext+ '</span><span class="morecontent"><span>' + removedStr + '</span>&nbsp;&nbsp;<button class="ReadMore btn btnTous" data-toggle="modal" data-target="#exampleModal">' + moretext + '</button></span>';

            $(this).html(Newhtml);

        }
    });

    /*   $(".ReadMore").click(function(){

           if($(this).hasClass("less")) {
               $(this).removeClass("less");
               $(this).html(moretext);
           }
           else {
               $(this).addClass("less");
               $(this).html(lesstext);
           }

           $(this).parent().prev().toggle();
           $(this).prev().toggle();
           return false;
       });*/
});