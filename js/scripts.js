$(document).ready(function () {

    // ####### Отмена перехода по ссылке если она активна #########
    $('a.active').click(function(){
        return false;
    });
    // ############################################################

    // ################# Смена года в копирайте ###################
    var forTime = new Date();
    var year = forTime.getFullYear();
    $('.copy .year').text(year);
    // ############################################################


    // ########### FullscreenOverlayStyles ########################

    $('#trigger-overlay-social').click(function(){
        $('.overlay.social').addClass('open');
    });
    $('.overlay-close').click(function(){
        $('.overlay.social').removeClass('open');
    });


     $('#trigger-overlay-letter').click(function(){
        $('.overlay.letter').addClass('open');
        return false;
    });
    $('.overlay-close').click(function(){
        $('.overlay.letter').removeClass('open');
        return false;
    });
    // ############################################################

});