<!--Esta vendria a ser la PRIMERA PAGINA donde se encuentra:
	Listado de Categorias
	Listado de animes(haciendo click veo anime), y me lleva a otra pagina, que seria la segunda pagina. !-->
   {include file='header.tpl'}
  <div class="container">

<h1>Listado de Categorias</h1>
   


<h1>Listado de Animes</h1>


    <ul>
      {foreach from=$animes item=anime}
        <li>{$anime["nombre"]}
          <a href="index.php?action=mostrar_anime&id_anime={$anime['id_anime']}">Ver mas</a></li>
      {/foreach}
    </ul>

  </div>
  {include file='footer.tpl'}

