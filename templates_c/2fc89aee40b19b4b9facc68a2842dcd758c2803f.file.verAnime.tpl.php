<?php /* Smarty version Smarty-3.1.14, created on 2016-10-02 19:33:16
         compiled from ".\templates\verAnime.tpl" */ ?>
<?php /*%%SmartyHeaderCode:876957f144dcc71777-62648304%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2fc89aee40b19b4b9facc68a2842dcd758c2803f' => 
    array (
      0 => '.\\templates\\verAnime.tpl',
      1 => 1475245526,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '876957f144dcc71777-62648304',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'anime' => 0,
    'imagen' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_57f144dcda7939_08632262',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57f144dcda7939_08632262')) {function content_57f144dcda7939_08632262($_smarty_tpl) {?><!--SEGUNDA PAGINA, 
 
  VER DONDE PONER EL BOTON QUE MANDE AL ADMINISTRADOR !!!!



  
  !-->
   <?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

  <div class="container">
    <h1>Categoria</h1>
	<h1><?php echo $_smarty_tpl->tpl_vars['anime']->value["nombre"];?>
 - <?php echo $_smarty_tpl->tpl_vars['anime']->value["año"];?>
 </h1>

	<?php  $_smarty_tpl->tpl_vars['imagen'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['imagen']->_loop = false;
 $_smarty_tpl->tpl_vars['index'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['anime']->value['imagenes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['imagen']->key => $_smarty_tpl->tpl_vars['imagen']->value){
$_smarty_tpl->tpl_vars['imagen']->_loop = true;
 $_smarty_tpl->tpl_vars['index']->value = $_smarty_tpl->tpl_vars['imagen']->key;
?>
      <img src="<?php echo $_smarty_tpl->tpl_vars['imagen']->value['path'];?>
" alt="AnimeImagen_<?php echo $_smarty_tpl->tpl_vars['anime']->value['nombre'];?>
_<?php echo $_smarty_tpl->tpl_vars['imagen']->value['id_ia'];?>
"  class="img-thumbnail">
      <?php } ?>
	
	<p><?php echo $_smarty_tpl->tpl_vars['anime']->value["noticia"];?>
</p>
	<a href="<?php echo $_smarty_tpl->tpl_vars['anime']->value['link'];?>
">Link de descarga</a>
	

  </div>
  <?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>