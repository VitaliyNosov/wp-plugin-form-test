console.log('Здесь ведем разработку плагина!');

jQuery(document).ready(function($){


    $('.text__copy_link').click(function() {
        var $text_copy = $(this);
        var $temp = $("<input>");
    $("body").append($temp);
        $temp.val($text_copy.text()).select();
        document.execCommand("copy");
        $temp.remove();
    $('.copy__link_mess').fadeIn(400);
        setTimeout(function(){$('.copy__link_mess').fadeOut(400);},5000);
    });


    // form ajax submit

    // $('#form-test').on('submitbtm', function(e){
    //     e.preventDefault();
    //     alert('asd');
    //     var $form = $(this);
    //     $.post($form.attr('action'), $form.serialize(), function(data) {
          
    //       $(".testr-btn7").after("<p>Отправлено!</p>");
    //     }, 'json');
    
    //   });


});

