{include file='header.tpl'}

	<h1> Editar Anime   </h1>

<form method="post" action="index.php?action=editar_anime&id_anime={$anime["id_anime"]}" enctype="multipart/form-data"> 
    <div class="form-group">
      <label for="grupo">Año</label>
      <input type="text" class="imputform" name="anio" value="{$anime["año"]}" placeholder="1986" required />
    </div>

    <div class="form-group">
      <label for="grupo">Nombre del Anime</label>
      <input type="text" class="imputform" name="nombre" value="{$anime["nombre"]}" placeholder="dragonballz" required />
    </div>

      <div class="form-group">
      <label for="grupo">Link</label>
      <input type="text" class="imputform" name="link" value="{$anime["link"]}" placeholder="link" required />
    </div>

   <div class="form-group">
      <label for="grupo">Descripcion del anime</label>
      <textarea name="descripcion"class="form-control"  rows="3"> {$anime["noticia"]}</textarea> 
      
    </div>


    <input type="file" name="imagenes[]" value="" multiple>

          <div class="form-group">
      <h4>Borrar imagenes</h4>

	{foreach from=$imagenes key=index item=imagen}

      <input type="checkbox" class="imputform" name="imagen{$imagen['id_ia']}" />
      <img src="{$imagen['path']}" alt="AnimeImagen_{$anime['nombre']}_{$imagen['id_ia']}"  class="img-thumbnail">
      {/foreach}
    </div>
    <input type="submit" name="Agregar" id="agregarAnimeBtn">
</form>


 {include file='footer.tpl'}