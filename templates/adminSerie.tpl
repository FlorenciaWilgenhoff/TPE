
<h1>Listado de Series</h1>
<ul>
  {foreach from=$series item=serie}
  <li>{$serie["nombre"]}
  <a data-id="{$serie["id_serie"]}" href="index.php?action=editar_serie&id_serie={$serie['id_serie']}" class="editarSerie">Editar</a>

  <a data-id="{$serie["id_serie"]}" class="eliminarSerie" href="index.php?action=eliminar_serie&id_serie={$serie['id_serie']}"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>

  </li>
  {/foreach}
</ul>


<h1>Agregar Serie</h1>

<form method="POST" class="agregarSerie" action="index.php?action=agregar_serie" enctype="multipart/form-data">
  <div class="form-group">
    <label for="grupo">Año</label>
    <input type="text" class="form-control" name="anio" placeholder="1986" required />
  </div>

  <div class="form-group">
    <label for="grupo">Nombre de la Serie</label>
    <input type="text" class="form-control" name="nombre" placeholder="lost" required />
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
    <label for="descripcion">Descripción de la Serie</label>
    <textarea name="descripcion" class="form-control" rows="3"></textarea>
  </div>

  <div class="form-group">
    <label>Subir imagenes</label>
    <input type="file" name="imagenes[]" value="" multiple>
  </div>


  <input type="submit" class="btn btn-default" value="Agregar">

</form>
