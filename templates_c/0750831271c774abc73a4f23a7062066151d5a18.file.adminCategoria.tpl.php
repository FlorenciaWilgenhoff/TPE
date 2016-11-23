<?php /* Smarty version Smarty-3.1.14, created on 2016-11-23 22:43:55
         compiled from ".\templates\adminCategoria.tpl" */ ?>
<?php /*%%SmartyHeaderCode:286765835e93f5a56e0-61033151%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0750831271c774abc73a4f23a7062066151d5a18' => 
    array (
      0 => '.\\templates\\adminCategoria.tpl',
      1 => 1479928224,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '286765835e93f5a56e0-61033151',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5835e93f713b67_43530201',
  'variables' => 
  array (
    'categorias' => 0,
    'categoria' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5835e93f713b67_43530201')) {function content_5835e93f713b67_43530201($_smarty_tpl) {?>

<h1>Listado de categorias</h1>
<ul>
  <?php  $_smarty_tpl->tpl_vars['categoria'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['categoria']->_loop = false;
 $_smarty_tpl->tpl_vars['index'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['categorias']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->key => $_smarty_tpl->tpl_vars['categoria']->value){
$_smarty_tpl->tpl_vars['categoria']->_loop = true;
 $_smarty_tpl->tpl_vars['index']->value = $_smarty_tpl->tpl_vars['categoria']->key;
?>
  <form  data-id="<?php echo $_smarty_tpl->tpl_vars['categoria']->value["id_categoria"];?>
" class="formEditar form-inline" method="POST" action="index.php?action=editar_categoria&id_categoria=<?php echo $_smarty_tpl->tpl_vars['categoria']->value['id_categoria'];?>
">
    <div class="form-group">
      <li data-name="<?php echo $_smarty_tpl->tpl_vars['categoria']->value['nombre'];?>
"><?php echo $_smarty_tpl->tpl_vars['categoria']->value["nombre"];?>

        <!-- boton editar categoria -->
        <a class="editarCat">Editar</a>
        <!-- boton eliminar categoria -->
        <a data-id="<?php echo $_smarty_tpl->tpl_vars['categoria']->value["id_categoria"];?>
" class="eliminarCat" href="index.php?action=eliminar_categoria&id_categoria=<?php echo $_smarty_tpl->tpl_vars['categoria']->value['id_categoria'];?>
"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>
      </li>
    </div>
    <input type="submit" class="btn btn-default hidden" value="Guardar">
  </form>

  <?php } ?>
</ul>


<h1>Agregar Categoria</h1>
<form class="form-inline agregarCat" method="POST" action="index.php?action=agregar_categoria">
  <div class="form-group">
    <label for="grupo">Nombre: </label>
    <input type="text" class="form-control" name="nombre" placeholder="Accion" required />
  </div>

  <input type="submit" class="btn btn-default" value="Agregar">
</form>
<br>
<?php }} ?>