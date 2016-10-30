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

  // Ajax para ir a un anime especifico, muestra anime y edite anime
  mostrarDatos(".anime", "mostrar_anime&id_anime=");
  mostrarDatos(".editarAnime", "editar_anime&id_anime=");


  function mostrarDatos(clase, action){
    $(document).on("click", clase, function(ev){
      ev.preventDefault();
      var idAnime = $(this).attr("data-id");
      $.get("index.php?action=" + action + idAnime, function(data) {
        $(".contenido").html(data);
      });
    });
  }

  // Guardar datos del formulario de staff, agregar categoria y anime, y editar anime
  agregarDatos(".agregarCat", "agregar_categoria");
  agregarDatos(".formularios", "guardar_staff");
  agregarDatos(".agregarAnime", "agregar_anime");
  agregarDatos(".editarA", "editar_anime&id_anime=", true);
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




  $(document).on("click", ".eliminarCat", function(ev){
    ev.preventDefault();
    var id = $(this).attr("data-id");
    $.post( "index.php?action=eliminar_categoria&id_categoria=" + id, function(data){
      $(".contenido").html(data);
    });
  });

 $(document).on("click", ".eliminarAnime", function(ev){
    ev.preventDefault();
    var id = $(this).attr("data-id");
    $.post( "index.php?action=eliminar_anime&id_anime=" + id, function(data){
      $(".contenido").html(data);
    });
  });





});
