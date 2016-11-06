
<h1>Editar Series</h1>

<form data-id="{$serie['id_serie'] }" method="post" class="editarS" action="index.php?action=editar_serie&id_serie={$serie["id_serie"]}" enctype="multipart/form-data">
	<div class="form-group">
		<label for="grupo">Año</label>
		<input type="text" name="anio" class="form-control" value="{$serie["año"]}" placeholder="1986" required />
	</div>

	<div class="form-group">
		<label for="grupo">Nombre de la Serie</label>
		<input type="text" name="nombre" class="form-control"  value="{$serie["nombre"]}" placeholder="lost" required />
	</div>

	<div class="form-group">
		<label for="grupo">Link</label>
		<input type="text" name="link" class="form-control"  value="{$serie["link"]}" placeholder="link" required />
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
		<label for="grupo">Descripcion del la Serie</label>
		<textarea name="descripcion" class="form-control" rows="3"> {$serie["noticia"]}</textarea>
	</div>

	<div class="form-group">
		<label>Subir imagenes</label>
		<input type="file" name="imagenes[]" value="" multiple>
	</div>

	<div class="form-group">
		<h4>Borrar imagenes</h4>

		{foreach from=$imagenes key=index item=imagen}

		<input type="checkbox" class="imputform" name="imagen{$imagen['id_ia']}" />
		<img class="img-thumbnail resize" src="{$imagen['path']}" alt="SerieImagen_{$serie['nombre']}_{$imagen['id_is']}" >
		{/foreach}
	</div>
	<input type="submit" class="btn btn-default" value="Editar">
</form>


