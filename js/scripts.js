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

    // ## Обзор файла вакансий ###
    $('input[type=file]').change(function(e){
      $in=$(this);
      $in.next().val($in.val().substr(12));
    });

    $('#gallery img').click(function() {
        $('.ovgallery').addClass('open');
        $("#main_photo").html("<img src='"+$(this).data('big')+"' alt=''>");
    });

    $('#close_ovgallery').click(function() {
        $('.ovgallery').removeClass('open');
    });

    $('#ovgallery_mini img').click(function() {
        $('#ovgallery_mini img.active').removeClass('active');
        $(this).addClass('active');
        $("#main_photo").html("<img src='"+$(this).data('big')+"' alt=''>");
    });
    
    $("#licence-wrap .picture-wrap").mouseenter(function() {
        $(this).addClass("picture-wrap-hover");
    });
    $("#licence-wrap .picture-wrap").mouseleave(function() {
        $(this).removeClass("picture-wrap-hover");
    });



    $("#write_letter").validate({
        rules: {
            name: {
              required: true
            },
            email: {
              required: true,
              email: true
            },
            phone: {
                required: true,
                number: true
            },
            message: {
                required: true
            }
          },
        showErrors: false,
        onkeyup: function(event, validator) {
            if($("#write_letter").valid()) {
                $("#write_letter input.disable").removeClass('disable');
            }
            else {
                $("#write_letter input[type='submit']").addClass('disable');
            }
        },
        submitHandler: function(form) {
            $.post( "mail.php", $("#write_letter").serialize(), function(data) {
                console.log(data);
            });
            $("#write_letter").parent().html('<button type="button" class="overlay-close">Close</button><h3>Спасибо, Ваше сообщение отправлено!<br> Мы обязательно свяжемся с Вами.</h3>');
        }
    });
});