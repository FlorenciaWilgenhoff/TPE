
<h1>Listado de Animes</h1>
<ul>
  {foreach from=$animes item=anime}
  <li>{$anime["nombre"]}
  <a href="index.php?action=editar_anime&id_anime={$anime['id_anime']}" class="editarAnime">Editar</a>

  <a data-id="{$anime["id_anime"]}" class="eliminarAnime" href="index.php?action=eliminar_anime&id_anime={$anime['id_anime']}"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>

  </li>
  {/foreach}
</ul>


<h1>Agregar Anime</h1>

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
    <label>Categoria</label>
    <select class="form-control" name="categoria">
      {foreach from=$categorias key=index item=categoria}
      <option value="{$categoria["id_categoria"]}">{$categoria["nombre"]}</option>
      {/foreach}
    </select>
  </div>

  <div class="form-group">
    <label for="descripcion">Descripción del anime</label>
    <textarea name="descripcion" class="form-control" rows="3"></textarea>
  </div>

  <div class="form-group">
    <label>Subir imagenes</label>
    <input type="file" name="imagenes[]" value="" multiple>
  </div>


  <input type="submit" class="btn btn-default" value="Agregar">

</form>
