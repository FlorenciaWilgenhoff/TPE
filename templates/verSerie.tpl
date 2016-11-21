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
  <ul>
  {foreach from=$comentarios item=comentario}
  <li>{$comentario["nombre"]}
  <!--REVISAR ESTO-->
  <a data-id="{$comentario["id_comentario"]}" href="index.php?action=agregar_comentario&id_comentario={$comentario['id_comentario']}" class="agregarComentario">Agregar</a> 
   </li>
  {/foreach}
</ul>
</div>
