<!--SEGUNDA PAGINA, 
 
  VER DONDE PONER EL BOTON QUE MANDE AL ADMINISTRADOR !!!!



  
  !-->
   {include file='header.tpl'}
  <div class="container">
    <h1>Categoria</h1>
	<h1>{$anime["nombre"]} - {$anime["año"]} </h1>

	{foreach from=$anime['imagenes'] key=index item=imagen}
      <img src="{$imagen['path']}" alt="AnimeImagen_{$anime['nombre']}_{$imagen['id_ia']}"  class="img-thumbnail">
      {/foreach}
	
	<p>{$anime["noticia"]}</p>
	<a href="{$anime['link']}">Link de descarga</a>
	

  </div>
  {include file='footer.tpl'}
