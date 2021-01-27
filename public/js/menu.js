$(document).ready(function() {
    $( ".btnMenue" ).click(function() {
        $( ".menue1" ).addClass('visible');
        $( ".btnMenue" ).addClass('invisible');
        $( ".btnMenue1" ).addClass('visiblelement');
    });

    $( ".btnMenue1" ).click(function() {
        $( ".menue1" ).removeClass('visible');
        $( ".btnMenue1" ).removeClass('visiblelement');
        $( ".btnMenue" ).removeClass('invisible');
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
