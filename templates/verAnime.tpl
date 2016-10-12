<!--SEGUNDA PAGINA, 
  
  !-->
   {include file='header.tpl'}
  <div class="container">
    <h1>Categoria</h1>
<!--PONER A QUE CATEGORIA PERTENECE -->
    <ul>
      {foreach from=$categorias item=categoria}
      {foreach from=$animes item=anime}

      {if $anime["fk_id_categoria"] == $categoria["id_categoria"]}

        <li>{$anime["nombre"]}- {$anime["año"]}- {$categoria["nombre"]}
          {foreach from=$anime['imagenes'] key=index item=imagen}
      <img src="{$imagen['path']}" alt="AnimeImagen_{$anime['nombre']}_{$imagen['id_ia']}"  class="img-thumbnail">
      {/foreach}
  
  <p>{$anime["noticia"]}</p>
  <a href="{$anime['link']}">Link de descarga</a>
  
        </li>
        
      {/if}
      {/foreach}
      {/foreach}
    </ul>


	

  </div>
  {include file='footer.tpl'}
