<?php /* Smarty version Smarty-3.1.14, created on 2016-10-14 18:01:03
         compiled from ".\templates\editarCat.tpl" */ ?>
<?php /*%%SmartyHeaderCode:213675801014000c122-39725806%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b5e854354cedca98ec250850ce5a252c2c1a6211' => 
    array (
      0 => '.\\templates\\editarCat.tpl',
      1 => 1476310412,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '213675801014000c122-39725806',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'categoria' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_580101400b0ba4_34909690',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_580101400b0ba4_34909690')) {function content_580101400b0ba4_34909690($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


	<h1> Editar Categoria   </h1>

<form method="post" action="index.php?action=editar_categoria&id_categoria=<?php echo $_smarty_tpl->tpl_vars['categoria']->value["id_categoria"];?>
" enctype="multipart/form-data"> 

    <div class="form-group">
      <label for="grupo">Nombre de la Categoria</label>
      <input type="text" class="imputform" name="nombre" value="<?php echo $_smarty_tpl->tpl_vars['categoria']->value["nombre"];?>
" placeholder="Accion" required />
    </div>

    <input type="submit" name="Agregar" id="agregarAnimeBtn">
</form>


 <?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>