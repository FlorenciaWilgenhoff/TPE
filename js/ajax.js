$( document ).ready(function() {

  // Cargo la home al entrar al index
  $.get("index.php?action=go_home", function(data) { $(".contenido").html(data); });

  partialRender("go_home", "#inicio");
  partialRender("listar_animes", "#animes");
  partialRender("mostrar_descargas", "#descargas");
  partialRender("mostrar_staff", "#staff");
  partialRender("admin_anime", "#aAnime");
  partialRender("admin_categoria", "#aCategoria");

  // Creo ajax para moverme a traves de los menus
  function partialRender(action, selector) {
    $(document).on("click", selector, function(){
      $.ajax({
        url:"index.php?action=" + action,
        method:"GET",
        success: function(textoCargado, status){
          $(".contenido").html(textoCargado);
        }
      });
    });
  }
  // Ajax para ir a un anime especifico
  $(document).on("click", ".anime", function(ev){
    ev.preventDefault();
    var idAnime = $(this).attr("data-id");
    $.get("index.php?action=mostrar_anime&id_anime=" + idAnime, function(data) {
      $(".contenido").html(data);
    });
  });
  // Al hacer click en el editar de una categoria, se crea un nuevo input para editarla
  $(document).on("click", ".editarCat", function(ev){
    var categoria = $(this).parent().attr("data-name");
    $(this).parent().parent().next().toggleClass("hidden");
    $(this).parent().html('<input type="text"  class="form-control" name="nombre" value=' + categoria + '>');

  });
  // Envio de datos de la categoria por ajax
  $(document).on("submit", ".formEditar", function(ev){
    ev.preventDefault();
    var id = $(this).attr("data-id");
    var datosFormulario = $(this).serialize();
    $.post( "index.php?action=editar_categoria&id_categoria=" + id, datosFormulario, function(data){
      $(".contenido").html(data);
    });
  });
  // Eliminacion de categoria
  $(document).on("click", ".eliminarCat", function(ev){
    ev.preventDefault();
    var id = $(this).attr("data-id");
    $.post( "index.php?action=eliminar_categoria&id_categoria=" + id, function(data){
      $(".contenido").html(data);
    });
  });
  // Guardar datos del formulario de staff
  $(document).on("submit", ".formularios", function (ev) {
    ev.preventDefault();
    $.post( "index.php?action=guardar_staff", $(this).serialize());
  });

//eliminacion del anime
 $(document).on("click", ".eliminarAnime", function(ev){
    ev.preventDefault();
    var id = $(this).attr("data-id");
    $.post( "index.php?action=eliminar_anime&id_anime=" + id, function(data){
      $(".contenido").html(data);
    });
  });


//editar anime (TERMINAR)
 $(document).on("click", ".editarAnime", function(ev){
    var categoria = $(this).parent().attr("data-name");
    $(this).parent().parent().next().toggleClass("hidden");
    $(this).parent().html('<input type="text"  class="form-control" name="nombre" value=' + anime + '>');

  });
//agregar anime

//agregar categoria

});

  
 //cosas que faltan hacer:
//ver porque en anime mas vistos no se muestran todo el listado de animes, y en el admin si
//admin anime: ajax en editar, ajax en agregar, arreglar error en editar  anime (por la categoria),
//admin categoria: hacer andar el agregar, ponerle ajax