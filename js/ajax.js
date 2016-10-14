$(function(){
  cargarHome();
});
//ajax para cada seccion
var cargarHome = function() {
  $.ajax({
    url:"index.php?action=go_home",
    method:"GET",
    success: function(textoCargado, status){
      $(".contenido").html(textoCargado);
    }
  });
};
var cargarAnime = function() {
  $.ajax({
    url:"index.php?action=listar_animes",
    method:"GET",
    success: function(textoCargado, status){
      $(".contenido").html(textoCargado);
    }
  });
};
var cargarDescargas = function() {
  $.ajax({
    url:"index.php?action=mostrar_descargas",
    method:"GET",
    success: function(textoCargado, status){
      $(".contenido").html(textoCargado);
    }
  });
};

var cargarStaff = function() {
  $.ajax({
    url:"index.php?action=mostrar_staff",
    method:"GET",
    success: function(textoCargado, status){
      $(".contenido").html(textoCargado);
    }
  });
};

var cargarAdminAnime = function() {
  $.ajax({
    url:"index.php?action=admin_anime",
    method:"GET",
    success: function(textoCargado, status){
      $(".contenido").html(textoCargado);
    }
  });
};

var cargarAdminCat = function() {
  $.ajax({
    url:"index.php?action=admin_categoria",
    method:"GET",
    success: function(textoCargado, status){
      $(".contenido").html(textoCargado);
    }
  });
};

$(document).on("click", "#inicio", function(){
  cargarHome();
});
$(document).on("click", "#animes", function(){
  cargarAnime();
});
$(document).on("click", "#descargas", function(){
  cargarDescargas();
});
$(document).on("click", "#staff", function(){
  cargarStaff();
});
$(document).on("click", "#aAnime", function(){
  cargarAdminAnime();
});
$(document).on("click", "#aCategoria", function(){
  cargarAdminCat();
});
$(document).on("click", ".anime", function(){
  event.preventDefault();
    var idAnime = $(this).attr("data-id");    $.ajax({
    url:"index.php?action=mostrar_anime&id_anime="+idAnime,
    method:"GET",
    success: function(textoCargado, status){
      $(".contenido").html(textoCargado);
    }
  });
});

//ajax para admin de categorias

//ajax para editar categoria
$(document).on("click", ".editarCat", function(ev){
	var categoria = $(this).parent().attr("data-name");
	$(this).parent().next().toggleClass("hidden");
	$(this).parent().html('<input type="text" name="nombre" value=' + categoria + '>');
	
});

$(document).on("submit", ".formEditar", function(ev){
  ev.preventDefault();
    var id = $(this).attr("data-id");
   $.post( "index.php?action=editar_categoria&id_categoria=" + id, $(this).serialize(), function(data){
     $(".contenido").html(data);
  });
});

$(document).on("click", ".eliminarCat", function(ev){
  ev.preventDefault();
  var id = $(this).attr("data-id");
  $.post( "index.php?action=eliminar_categoria&id_categoria=" + id, function(data){
     $(".contenido").html(data);
  });
});

//ajax para admin de anime
//ver anime
var verAnime = function(ev) {

};
//ajax para editar anime
$(".editarAnime").click(function () {
	//var anime = $(this).parent().attr("data-name");
	//$(this).parent().next().toggleClass("hidden");
	//$(this).parent().html('<input type="text" name="Agregar" value=' + anime + '>');
	
});

//ajax para el formulario
$(document).on("submit", ".formularios", function (ev) {
  ev.preventDefault();
  $.post( "index.php?action=guardar_staff", $(this).serialize());

});
