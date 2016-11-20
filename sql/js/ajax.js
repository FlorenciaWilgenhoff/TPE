$(".db").submit(function(ev) {
  ev.preventDefault();
  $.post( "index.php", $(this).serialize(), function(data) {
    $(".error").html(data).hide().show("slow");
  });

});