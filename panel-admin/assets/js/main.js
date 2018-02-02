$(document).ready(function(){
  $('.erase').click(function(){
  var id = $(this).attr("id");
  var dataString = 'id='+ id;
  var parent = $(this).parent();

  $.ajax({
    type: 'POST',
    url: 'erase.php',
    data: dataString,
    cache: false,
    success: function(){
      if (id % 2 != 0) {
        parent.parent().fadeOut('slow', function(){$(this).hide();});
      } else {
        parent.parent().fadeOut('slow', function(){$(this).hide();});
      }
    }
  });

  return false;
});
})
