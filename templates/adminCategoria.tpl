

<h1>Listado de categorias</h1>
<ul>
  {foreach from=$categorias key=index item=categoria}
  <form  data-id="{$categoria["id_categoria"]}" class="formEditar form-inline" method="POST" action="index.php?action=editar_categoria&id_categoria={$categoria['id_categoria'] }">
    <div class="form-group">
      <li data-name="{$categoria['nombre']}">{$categoria["nombre"]}
        <!-- boton editar categoria -->
        <a class="editarCat">Editar</a>
        <!-- boton eliminar categoria -->
        <a data-id="{$categoria["id_categoria"]}" class="eliminarCat" href="index.php?action=eliminar_categoria&id_categoria={$categoria['id_categoria'] }"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>
      </li>
    </div>
    <input type="submit" class="btn btn-default hidden" value="Guardar">
  </form>

  {/foreach}
</ul>


<div class="bs_example">
    <label for="grupo">Filtrado de categorias</label>

    <select class="form-control filtro" name="categoria">
        <option selected>Elija categoría</option>
        {foreach from=$categorias item=categoria}
        <option value="{$categoria["id_categoria"]}">{$categoria["nombre"]}</option>
        {/foreach}
    </select>
    <div class="mostrarFiltro"></div>
  </div>


<h1>Agregar Categoria</h1>
<form class="form-inline agregarCat" method="POST" action="index.php?action=agregar_categoria">
  <div class="form-group">
    <label for="grupo">Nombre: </label>
    <input type="text" class="form-control" name="nombre" placeholder="Accion" required />
  </div>

  <input type="submit" class="btn btn-default" value="Agregar">
</form>
<br>
