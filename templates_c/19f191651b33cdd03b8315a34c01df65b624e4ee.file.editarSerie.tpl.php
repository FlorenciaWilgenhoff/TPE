<?php /* Smarty version Smarty-3.1.14, created on 2016-11-20 16:31:40
         compiled from ".\templates\editarSerie.tpl" */ ?>
<?php /*%%SmartyHeaderCode:274235831c1dcd1f408-30663958%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '19f191651b33cdd03b8315a34c01df65b624e4ee' => 
    array (
      0 => '.\\templates\\editarSerie.tpl',
      1 => 1478273887,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '274235831c1dcd1f408-30663958',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'serie' => 0,
    'categorias' => 0,
    'categoria' => 0,
    'imagenes' => 0,
    'imagen' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5831c1dd00c1d8_89627895',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5831c1dd00c1d8_89627895')) {function content_5831c1dd00c1d8_89627895($_smarty_tpl) {?>
<h1>Editar Series</h1>

<form data-id="<?php echo $_smarty_tpl->tpl_vars['serie']->value['id_serie'];?>
" method="post" class="editarS" action="index.php?action=editar_serie&id_serie=<?php echo $_smarty_tpl->tpl_vars['serie']->value["id_serie"];?>
" enctype="multipart/form-data">
	<div class="form-group">
		<label for="grupo">Año</label>
		<input type="text" name="anio" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['serie']->value["año"];?>
" placeholder="1986" required />
	</div>

	<div class="form-group">
		<label for="grupo">Nombre de la Serie</label>
		<input type="text" name="nombre" class="form-control"  value="<?php echo $_smarty_tpl->tpl_vars['serie']->value["nombre"];?>
" placeholder="lost" required />
	</div>

	<div class="form-group">
		<label for="grupo">Link</label>
		<input type="text" name="link" class="form-control"  value="<?php echo $_smarty_tpl->tpl_vars['serie']->value["link"];?>
" placeholder="link" required />
	</div>


	<div class="form-group">
		<label for="grupo">Categoria</label>
		<select class="form-control" name="categoria">
	      <?php  $_smarty_tpl->tpl_vars['categoria'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['categoria']->_loop = false;
 $_smarty_tpl->tpl_vars['index'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['categorias']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->key => $_smarty_tpl->tpl_vars['categoria']->value){
$_smarty_tpl->tpl_vars['categoria']->_loop = true;
 $_smarty_tpl->tpl_vars['index']->value = $_smarty_tpl->tpl_vars['categoria']->key;
?>
	      <option value="<?php echo $_smarty_tpl->tpl_vars['categoria']->value["id_categoria"];?>
"><?php echo $_smarty_tpl->tpl_vars['categoria']->value["nombre"];?>
</option>
	      <?php } ?>
    	</select>
	</div>




	<div class="form-group">
		<label for="grupo">Descripcion del la Serie</label>
		<textarea name="descripcion" class="form-control" rows="3"> <?php echo $_smarty_tpl->tpl_vars['serie']->value["noticia"];?>
</textarea>
	</div>

	<div class="form-group">
		<label>Subir imagenes</label>
		<input type="file" name="imagenes[]" value="" multiple>
	</div>

	<div class="form-group">
		<h4>Borrar imagenes</h4>

		<?php  $_smarty_tpl->tpl_vars['imagen'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['imagen']->_loop = false;
 $_smarty_tpl->tpl_vars['index'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['imagenes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['imagen']->key => $_smarty_tpl->tpl_vars['imagen']->value){
$_smarty_tpl->tpl_vars['imagen']->_loop = true;
 $_smarty_tpl->tpl_vars['index']->value = $_smarty_tpl->tpl_vars['imagen']->key;
?>

		<input type="checkbox" class="imputform" name="imagen<?php echo $_smarty_tpl->tpl_vars['imagen']->value['id_ia'];?>
" />
		<img class="img-thumbnail resize" src="<?php echo $_smarty_tpl->tpl_vars['imagen']->value['path'];?>
" alt="SerieImagen_<?php echo $_smarty_tpl->tpl_vars['serie']->value['nombre'];?>
_<?php echo $_smarty_tpl->tpl_vars['imagen']->value['id_is'];?>
" >
		<?php } ?>
	</div>
	<input type="submit" class="btn btn-default" value="Editar">
</form>


<?php }} ?>