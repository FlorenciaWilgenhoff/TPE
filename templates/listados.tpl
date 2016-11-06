<div class="container">

  <h1>Listado de Categorias</h1>
  <ul>
    {foreach from=$categorias item=categoria}
    <li>{$categoria["nombre"]}</li>
    {/foreach}
  </ul>

  <h1>Listado de Series</h1>
  <ul> 
    {foreach from=$categorias item=categoria}
      {foreach from=$series item=serie}
      {if $serie["fk_id_categoria"] == $categoria["id_categoria"]}
        <li>{$serie["nombre"]} - {$categoria["nombre"]}
          <a class="serie" data-id="{$serie['id_serie']}" href="index.php?action=mostrar_serie&id_serie={$serie['id_serie']}">Ver mas</a>
        </li>
      {/if}
      {/foreach}
    {/foreach}
  </ul>
</div>
