$(document).ready(function(){
  $('#btn-collapse').on('click', function(){
    $('#brand-coffefit').fadeToggle();
  });

  $(window).scroll(function(){
    if ($(this).scrollTop() > 0) {
      $('#brand-coffefit').addClass('brand-coffefit');
    } else {
      $('#brand-coffefit').removeClass('brand-coffefit');
    }
  });


});
