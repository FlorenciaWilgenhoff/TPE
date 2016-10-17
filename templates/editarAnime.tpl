
<h1>Editar Anime</h1>

<form data-id="{$anime['id_anime'] }" method="post" class="editarA" action="index.php?action=editar_anime&id_anime={$anime["id_anime"]}" enctype="multipart/form-data">
	<div class="form-group">
		<label for="grupo">Año</label>
		<input type="text" name="anio" class="form-control" value="{$anime["año"]}" placeholder="1986" required />
	</div>

	<div class="form-group">
		<label for="grupo">Nombre del Anime</label>
		<input type="text" name="nombre" class="form-control"  value="{$anime["nombre"]}" placeholder="dragonballz" required />
	</div>

	<div class="form-group">
		<label for="grupo">Link</label>
		<input type="text" name="link" class="form-control"  value="{$anime["link"]}" placeholder="link" required />
	</div>


	<div class="form-group">
		<label for="grupo">Categoria</label>
		<select class="form-control" name="categoria">
	      {foreach from=$categorias key=index item=categoria}
	      <option value="{$categoria["id_categoria"]}">{$categoria["nombre"]}</option>
	      {/foreach}
    	</select>
	</div>




	<div class="form-group">
		<label for="grupo">Descripcion del anime</label>
		<textarea name="descripcion" class="form-control" rows="3"> {$anime["noticia"]}</textarea>
	</div>

	<div class="form-group">
		<label>Subir imagenes</label>
		<input type="file" name="imagenes[]" value="" multiple>
	</div>

	<div class="form-group">
		<h4>Borrar imagenes</h4>

		{foreach from=$imagenes key=index item=imagen}

		<input type="checkbox" class="imputform" name="imagen{$imagen['id_ia']}" />
		<img class="img-thumbnail resize" src="{$imagen['path']}" alt="AnimeImagen_{$anime['nombre']}_{$imagen['id_ia']}" >
		{/foreach}
	</div>
	<input type="submit" class="btn btn-default" value="Editar">
</form>


