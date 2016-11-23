$( document ).ready(function() {

  // Cargo la home al entrar al index

  $.get("index.php?action=go_home", function(data) { $(".contenido").html(data); });

  partialRender("go_home", "#inicio");
  partialRender("listar_series", "#series");
  partialRender("mostrar_descargas", "#descargas");
  partialRender("mostrar_staff", "#staff");
  partialRender("admin_serie", "#aSerie");
  partialRender("admin_usuario", "#aUsuario");
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
        getComentarios(idSerie);
      });
    });
  }

  


  // Guardar datos del formulario de staff, agregar categoria, serie  y editar serie
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



  $(document).on("click", ".eliminarCat", function(ev){
    ev.preventDefault();
    var id = $(this).attr("data-id");
    $.post( "index.php?action=eliminar_categoria&id_categoria=" + id, function(data){
      $(".contenido").html(data);
    });
  });

 $(document).on("change", ".filtro", function(ev){
    ev.preventDefault();
    var id = $(this).val();
    $.post( "index.php?action=filtrar_categorias&id_categoria=" + id, function(data){
      $(".mostrarFiltro").html(data);
    });
  });


 $(document).on("click", ".eliminarSerie", function(ev){
    ev.preventDefault();
    var id = $(this).attr("data-id");
    $.post( "index.php?action=eliminar_serie&id_serie=" + id, function(data){
      $(".contenido").html(data);
    });
  });
 //hacer con la api eliminar, mostrar, y agregar
  var template;
function getComentarios(id_serie){

  $.ajax({ url: 'js/templates/comentarios.mst',
   success: function(templateReceived) {
     template = templateReceived;
   }
 });

 

getComments();

setInterval(getComments, 2000);

function getComments(){

    $.get( "api/comentario", function(data) {
    var datos = [];
    for (var i = 0; i < data.length; i++) {
      if (id_serie == data[i].fk_id_serie) {
        datos.push(data[i]);
      }
    }
    console.log(datos);
    var rendered = Mustache.render(template,{comentarios:datos});
    $(".comentarios").html(rendered);

  });
}

}






//ELIMINAR COMENTARIO
 $(document).on('click', '.eliminarComentario', function(ev) {
      ev.preventDefault();
      var comentario = $(this).parents(".comentario");
      var id =  $(this).attr("data-id");
      $.ajax({
          type: "DELETE",
          url: 'api/comentario/' + id,
          success: function(){
            $(comentario).html("");
          }
        });

      });
 //AGREGAR COMENTARIO
 $(document).on('submit', '.agregarComentario', function(ev) {
    ev.preventDefault();
    var comentario = $(this).serialize();
    $.post( "api/comentario", comentario, function( comentarios ) {
      var rendered = Mustache.render(template,{comentarios});
      $( ".comentarios" ).append(rendered);
    });
  });


   $(document).on("click", ".actualizarPermisos", function(ev){
    ev.preventDefault();
    var id = $(this).attr("data-id");
    $.post( "index.php?action=actualizar_permisos&id_usuario=" + id, function(data){
      $(".contenido").html(data);
    });
  });
 

});
