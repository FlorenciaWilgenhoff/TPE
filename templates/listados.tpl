<!--Esta vendria a ser la PRIMERA PAGINA donde se encuentra:
	Listado de Categorias
	Listado de animes(haciendo click veo anime), y me lleva a otra pagina, que seria la segunda pagina. !-->
   {include file='header.tpl'}
  <div class="container">

<h1>Listado de Categorias</h1>
    <ul>
      {foreach from=$categorias item=categoria}
        <li>{$categoria["nombre"]}
        </li>
      {/foreach}
    </ul>
<!-- HACER QUE ESTO ANDE, QUE LOS DOS SE MUESTREN, O QUE SEPARARLOS -->


<h1>Listado de Animes</h1>

   
    <ul>
      {foreach from=$categorias item=categoria}
      {foreach from=$animes item=anime}

      {if $anime["fk_id_categoria"] == $categoria["id_categoria"]}

        <li>{$anime["nombre"]}- {$categoria["nombre"]}
          <a href="index.php?action=mostrar_anime&id_anime={$anime['id_anime']}">Ver mas</a>
        </li>
        
      {/if}
      {/foreach}
      {/foreach}
    </ul>

  </div>
  {include file='footer.tpl'}

