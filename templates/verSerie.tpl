<div class="container">
  <h1>{$serie["nombre"]} <small> - {$serie["año"]} - {$categoria["nombre"]}</small></h1>

  <ul>
    <li>
      {foreach from=$serie['imagenes'] key=index item=imagen}
      <img src="{$imagen['path']}" alt="Serie{$serie['nombre']}"  class="img-thumbnail">
      {/foreach}

      <p>{$serie["noticia"]}</p>
      <a href="{$serie['link']}">Link de descarga</a>


    </li>
  </ul> 
  <!-- PONER BOTON PARA QUE ME MANDE AL VER COMENTARIO <a data-id="{$comentario["id_comentario"]}" href="index.php?action=editar_serie&id_serie={$serie['id_serie']}" class="editarSerie">Editar</a> -->
</div>
