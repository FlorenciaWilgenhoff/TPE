 <!--TERCER PAGINA (ADMINISTRADOR)
  LISTADO DE ANIMES
  -nombre
  -nombre
  AGREGAR ANIME
  -nombre
  -categoria a elegir
  -subir imagen
  -descripcion
  -link
  EDITAR ANIME (VER)
  -nombre (del anime que quiere editar)
  -nombre
  ELIMINAR ANIME
  -nombre
  -nombre 
  con un boton al lado de X
-->

{include file='header.tpl'}


 <h1>Listado de Animes</h1>


  {if isset($animes)}
    <ul>
      {foreach from=$animes item=anime}
        <li>{$anime["nombre"]}
          </li>
      {/foreach}
    </ul>
  {/if}
 

<h1>Agregar Animes</h1>
<!--hacer dropdown para elegir categoria -->
  <form method="POST" action="index.php?action=agregar_anime" enctype="multipart/form-data"> 
    <div class="form-group">
      <label for="grupo">Año</label>
      <input type="text" class="imputform" name="anio" placeholder="1986" required />
    </div>

    <div class="form-group">
      <label for="grupo">Nombre del Anime</label>
      <input type="text" class="imputform" name="nombre" placeholder="dragonballz" required />
    </div>

      <div class="form-group">
      <label for="grupo">Link</label>
      <input type="text" class="imputform" name="link" placeholder="link" required />
    </div>

   <div class="form-group">
      <label for="grupo">Descripcion del anime</label>
      <textarea name="descripcion"class="form-control" rows="3"></textarea> 
      
    </div>

    <input type="file" name="imagenes[]" required value="" multiple>

    <input type="submit" name="Agregar" id="agregarAnimeBtn">
 
</form>



<h1>Editar Animes</h1>












<h1>Eliminar Animes</h1>
 {if isset($animes)}
    <ul>
      {foreach from=$animes item=anime}
        <li>{$anime["nombre"]}<a class="eliminarAnimes" href="#" data-idtarea="{$anime['id_anime']}"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>

          </li>
      {/foreach}
    </ul>
  {/if}
  
  



 {include file='footer.tpl'}


      
     
     