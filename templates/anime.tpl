
<!--Esta vendria a ser la PRIMERA PAGINA donde se encuentra:
	Listado de Categorias
	Listado de animes(haciendo click veo anime), y me lleva a otra pagina, que seria la segunda pagina. !-->
  
  
  <!--SEGUNDA PAGINA, 
  Nombre de la categoria
  Nombre del anime
  Imagen 
  Descripcion
  Link

  VER DONDE PONER EL BOTON QUE MANDE AL ADMINISTRADOR  
  !-->



  <!--TERCER PAGINA (ADMINISTRADOR)
  LISTADO DE ANIMES
  -nombre
  -nombre
  AGREGAR ANIME
  -nombre
  -categoria a elegir
  -subir imagen
  -descripcion
  -link
  EDITAR ANIME (VER)
  -nombre (del anime que quiere editar)
  -nombre
  ELIMINAR ANIME
  -nombre
  -nombre 
  con un boton al lado de X



 <h1>Listado de Animes</h1>


  {if isset($animes)}
    <ul>
      {foreach from=$animes item=anime}
        <li>{$anime["nombre"]}
          <ul>
            <li>
       {foreach from=$anime['imagenes'] key=index item=imagen}
      <img src="{$imagen['path']}" alt="AnimeImagen_{$anime['nombre']}_{$imagen['id_imagen']}"  class="img-thumbnail">
      {/foreach}
      <a class="eliminarAnimes" href="#" data-idtarea="{$anime['id_anime']}"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>
      </li>
        </ul></li>
      {/foreach}
    </ul>
  {/if}
  </div>
