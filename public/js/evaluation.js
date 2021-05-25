var sheet = document.createElement('style'),
    $rangeInput = $('.range input'),
    prefs = ['webkit-slider-runnable-track', 'moz-range-track', 'ms-track'];

document.body.appendChild(sheet);

var getTrackStyle = function (el) {
    var curVal = el.value,
        val = (curVal - 1) * 8.666666667,
        style = '';

    // Set active label   $("#sousBlockParametre").toggle();
    $('.range-labels li').removeClass('active selected');

    var curLabel = $('.range-labels').find('li:nth-child(' + curVal + ')');
    curLabel.addClass('active selected');
    curLabel.prevAll().addClass('selected');

    // Change background gradient
    for (var i = 0; i++; ) {
        style += '.range {background: linear-gradient(to right, #000000  0%, #37adbf ' + val + '%, #fff ' + val + '%, #fff 100%)}';
        style += '.range input::-' + prefs[i] + '{background: linear-gradient(to right, #37adbf 0%, #37adbf ' + val + '%, #b2b2b2 ' + val + '%, #b2b2b2 100%)}';
    }

    return style;
}

$rangeInput.on('input', function () {
    sheet.textContent = getTrackStyle(this);
});

// Change input value on label click
$('.range-labels li').on('click', function () {
    var index = $(this).index();

    $rangeInput.val(index + 1).trigger('input');

});



$(function() {
    var valMap = [0, 1, 3, 5, 10, 15, 20, 30, 50];

    $("#slider").slider({
        max: valMap.length - 1,
        slide: function(event, ui) {
            $("#radiusAmount").val(valMap[ui.value]);
        }
    })
        .each(function() {

            var opt = $(this).data().uiSlider.options;

            var vals = opt.max - opt.min;


            var arrayLength = valMap.length;
            for (var i = 0; i < arrayLength; i++) {

                var el = $('<label>' + (valMap[i]) + '</label>').css('left', (i / vals * 100) + '%');

                $("#slider").append(el);

            }

        });
});

