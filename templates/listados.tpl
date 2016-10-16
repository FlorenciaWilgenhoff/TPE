<div class="container">

  <h1>Listado de Categorias</h1>
  <ul>
    {foreach from=$categorias item=categoria}
    <li>{$categoria["nombre"]}</li>
    {/foreach}
  </ul>

  <h1>Listado de Animes</h1>
  <ul> <!--VER PORQUE NO MUESTRA EL LISTADO -->
    {foreach from=$categorias item=categoria}
      {foreach from=$animes item=anime}
      {if $anime["fk_id_categoria"] == $categoria["id_categoria"]}
        <li>{$anime["nombre"]} - {$categoria["nombre"]}
          <a class="anime" data-id="{$anime['id_anime']}" href="index.php?action=mostrar_anime&id_anime={$anime['id_anime']}">Ver mas</a>
        </li>
      {/if}
      {/foreach}
    {/foreach}
  </ul>
</div>
