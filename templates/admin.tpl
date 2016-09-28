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

{include file='header.tpl'}


 <h1>Listado de Animes</h1>


  {if isset($animes)}
    <ul>
      {foreach from=$animes item=anime}
        <li>{$anime["nombre"]}
          </li>
      {/foreach}
    </ul>
  {/if}
 

<h1>Agregar Animes</h1>












<h1>Editar Animes</h1>






<h1>Eliminar Animes</h1>
 {if isset($animes)}
    <ul>
      {foreach from=$animes item=anime}
        <li>{$anime["nombre"]}
          </li>
      {/foreach}
    </ul>
  {/if}
  
  <a class="eliminarAnimes" href="#" data-idtarea="{$anime['id_anime']}"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>



 {include file='footer.tpl'}


      
     
     