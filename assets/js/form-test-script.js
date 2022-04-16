// (function($) {

$(document).ready(function () {

    console.log('Фронт2');

    // submit popup form 

    $('.form-submit-popup').fadeIn(800);
      setTimeout(function(){
    $('.form-submit-popup').fadeOut(800);
      },5000);

    // submit popup error

    $('.form-submit-error').fadeIn(800);
      setTimeout(function(){
    $('.form-submit-error').fadeOut(800);
      },5000);

    // form popup

    $('.js-button-campaign').click(function () {
        console.log('Проверка работы скрипта');

        $('.js-overlay-campaign').fadeIn();
        $('.js-overlay-campaign').addClass('disabled');
      });
    
      // закрыть на крестик
      $('.js-close-campaign').click(function () {
        $('.js-overlay-campaign').fadeOut();
    
      });
    
      // закрыть по клику вне окна
      $(document).mouseup(function (e) {
        var popup = $('.js-popup-campaign');
        if (e.target != popup[0] && popup.has(e.target).length === 0) {
          $('.js-overlay-campaign').fadeOut();
    
        }
      })

    // form ajax submit

    // $('#form-test').on('submit', function(e){
    //     e.preventDefault();
    //     // alert('asd');
    //     var $form = $(this);
    //     $.post($form.attr('action'), $form.serialize(), function(data) {
          
    //     //   $(".testr-btn7").after("<p>Отправлено!</p>");
    //     }, 'json');
    
    //   });




// })(jQuery);

});


