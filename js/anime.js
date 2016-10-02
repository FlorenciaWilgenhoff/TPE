$(document).ready(function(){



$('.eliminarAnime').click(function(){
event.preventDefault();
$.get( "index.php?action=eliminar_anime",{ id_anime: $(this).attr("data-idanime") }, function(data) {
  $('#listaAnimes').html(data);
  $('#anime').val('');
});

});
});
