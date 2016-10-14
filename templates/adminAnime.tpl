 <!--TERCER PAGINA (ADMINISTRADOR)
  
-->


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

  <form method="POST" action="index.php?action=agregar_anime" enctype="multipart/form-data"> 
    <div class="form-group">
      <label for="grupo">Año</label>
      <input type="text" class="form-control" name="anio" placeholder="1986" required />
    </div>

    <div class="form-group">
      <label for="grupo">Nombre del Anime</label>
      <input type="text" class="form-control" name="nombre" placeholder="dragonballz" required />
    </div>

      <div class="form-group">
      <label for="grupo">Link</label>
      <input type="text" class="form-control" name="link" placeholder="link" required />
    </div>

    <div class="form-group">
        <label for="sel1">Categoria</label>
        <select class="form-control" name="categoria">
          {foreach from=$categorias key=index item=categoria}
          <option value="{$categoria["id_categoria"]}">{$categoria["nombre"]}</option>  
          {/foreach}
        </select>
    </div>

   <div class="form-group">
      <label for="grupo">Descripcion del anime</label>
      <textarea name="descripcion"class="form-control" rows="3"></textarea> 
      
    </div>

    <input type="file" name="imagenes[]" value="" multiple>

    <input type="submit" name="Agregar" id="agregarAnimeBtn">
 
</form>




<h1>Editar Animes</h1>
 {if isset($animes)}
    <ul>
      {foreach from=$animes key=index item=anime}
        <form method="POST" action="index.php?action=editar_anime&id_anime={$anime['id_anime'] }">
        <li data-name="{$anime['nombre']}">{$anime["nombre"]} <a class="editarAnime">Editar</a> </li>
        <input type="submit" name="Agregar" value="Guardar" class="hidden">
      </form>  
<!--VER SI ESTA BIEN Y QUE HAY QUE CAMBIAR -->
        <!--<li>{$anime["nombre"]}<a class="editarAnime" href="index.php?action=editar_anime&id_anime={$anime['id_anime'] }"> Editar</a>

          </li>-->

      {/foreach}
    </ul>
  {/if}

 


<h1>Eliminar Animes</h1>
 {if isset($animes)}
    <ul>
      {foreach from=$animes key=index item=anime}
        <li>{$anime["nombre"]}<a class="eliminarAnime" href="index.php?action=eliminar_anime&id_anime={$anime['id_anime'] }"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>

          </li>
      {/foreach}
    </ul>
  {/if}
