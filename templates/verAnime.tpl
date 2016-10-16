<div class="container">
  <h1>{$anime["nombre"]} <small> - {$anime["año"]} - {$categoria["nombre"]}</small></h1>

  <ul>
    <li>
      {foreach from=$anime['imagenes'] key=index item=imagen}
      <img src="{$imagen['path']}" alt="Anime_{$anime['nombre']}"  class="img-thumbnail">
      {/foreach}

      <p>{$anime["noticia"]}</p>
      <a href="{$anime['link']}">Link de descarga</a>

    </li>
  </ul>
</div>
