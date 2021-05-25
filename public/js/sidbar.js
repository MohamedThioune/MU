//toogle des éléments du sidbar
$("#monFlow").click(function(){
    $("#sousBlockMonFlow").toggle();

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

//changer image script
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

//Modifier bandeau script
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