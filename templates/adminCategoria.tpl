

 <h1>Listado de categorias</h1>


  {if isset($categorias)}
    <ul>
      {foreach from=$categorias item=categoria}
        <li>{$categoria["nombre"]}
          </li>
      {/foreach}
    </ul>
  {/if}
 

<h1>Agregar Categoria</h1>
  <form id="agregarCat" method="POST" > 
    <div class="form-group">
      <label for="grupo">Nombre</label>
      <input type="text" class="imputform" name="nombre" placeholder="Accion" required />
    </div>

    <input type="submit" name="Agregar" id="agregarAnimeBtn">
 
</form>




<h1>Editar Categoria</h1>
 {if isset($categoria)}
    <ul>
      {foreach from=$categorias key=index item=categoria}
      <form data-id="{$categoria['id_categoria'] }" class="formEditar" method="POST" action="index.php?action=editar_categoria&id_categoria={$categoria['id_categoria'] }"> 
        <li data-name="{$categoria['nombre']}">{$categoria["nombre"]} <a class="editarCat">Editar</a> </li>
        <input type="submit" name="Agregar" value="Guardar" class="hidden">
      </form>   
          
      {/foreach}
    </ul>
  {/if}




<h1>Eliminar Categorias</h1>
 {if isset($categorias)}
    <ul>
      {foreach from=$categorias key=index item=categoria}
        <li>{$categoria["nombre"]}<a data-id="{$categoria["id_categoria"]}" class="eliminarCat" href="index.php?action=eliminar_categoria&id_categoria={$categoria['id_categoria'] }"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>

          </li>
      {/foreach}
    </ul>
  {/if}


