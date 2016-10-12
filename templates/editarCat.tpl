{include file='header.tpl'}

	<h1> Editar Categoria   </h1>

<form method="post" action="index.php?action=editar_categoria&id_categoria={$categoria["id_categoria"]}" enctype="multipart/form-data"> 

    <div class="form-group">
      <label for="grupo">Nombre de la Categoria</label>
      <input type="text" class="imputform" name="nombre" value="{$categoria["nombre"]}" placeholder="Accion" required />
    </div>

    <input type="submit" name="Agregar" id="agregarAnimeBtn">
</form>


 {include file='footer.tpl'}