$( document ).ready(function() {

  // Cargo la home al entrar al index

  $.get("index.php?action=go_home", function(data) { $(".contenido").html(data); });

  partialRender("go_home", "#inicio");
  partialRender("listar_series", "#series");
  partialRender("mostrar_descargas", "#descargas");
  partialRender("mostrar_staff", "#staff");
  partialRender("admin_serie", "#aSerie");
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

  // Ajax para ir a una serie en especifica, muestra serie y edita serie
  mostrarDatos(".serie", "mostrar_serie&id_serie=");
  mostrarDatos(".editarSerie", "editar_serie&id_serie=");


  function mostrarDatos(clase, action){
    $(document).on("click", clase, function(ev){
      ev.preventDefault();
      var idSerie = $(this).attr("data-id");
      $.get("index.php?action=" + action + idSerie, function(data) {
        $(".contenido").html(data);
      });
    });
  }

  // Guardar datos del formulario de staff, agregar categoria y serie, y editar serie
  agregarDatos(".agregarCat", "agregar_categoria");
  agregarDatos(".formularios", "guardar_staff");
  agregarDatos(".agregarSerie", "agregar_serie");
  agregarDatos(".editarS", "editar_serie&id_serie=", true);
  agregarDatos(".formEditar", "editar_categoria&id_categoria=", true);

  function agregarDatos(clase, action, llevaId){
    $(document).on("submit", clase, function (ev) {
    ev.preventDefault();
    formData = new FormData(this);
    var id = "";
    if(llevaId) id = $(this).attr("data-id");
    $.ajax({
       method: "POST",
       url: "index.php?action=" + action + id,
       data: formData,
       contentType: false,
       cache: false,
       processData:false,
       success: function(data){
        $(".contenido").html(data);  
       }
    });
  });
  }

  // Al hacer click en el editar de una categoria, se crea un nuevo input para editarla
  $(document).on("click", ".editarCat", function(ev){
    var categoria = $(this).parent().attr("data-name");
    $(this).parent().parent().next().toggleClass("hidden");
    $(this).parent().html('<input type="text"  class="form-control" name="nombre" value=' + categoria + '>');

  });



 // Eliminacion de categoria
  $(document).on("click", ".eliminarCat", function(ev){
    ev.preventDefault();
    var id = $(this).attr("data-id");
    $.post( "index.php?action=eliminar_categoria&id_categoria=" + id, function(data){
      $(".contenido").html(data);
    });
  });
//eliminacion de serie
 $(document).on("click", ".eliminarSerie", function(ev){
    ev.preventDefault();
    var id = $(this).attr("data-id");
    $.post( "index.php?action=eliminar_serie&id_serie=" + id, function(data){
      $(".contenido").html(data);
    });
  });





});
