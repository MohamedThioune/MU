$(document).ready(function() {
    $( ".btnMenue" ).click(function() {
        $( ".menue1" ).addClass('visible');
        $( ".btnMenue" ).removeClass('visibleBtn');
        $( ".btnMenue1" ).addClass('visibleBtn');
    });

    $( ".btnMenue1" ).click(function() {
        $( ".menue1" ).removeClass('visible');
        $( ".btnMenue1" ).removeClass('visibleBtn');
        $( ".btnMenue" ).addClass('visibleBtn');
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
