<?php /* Smarty version Smarty-3.1.14, created on 2016-11-20 18:12:43
         compiled from ".\templates\verSerie.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3431582cdc33b3ceb7-98220517%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eaa1f31ffdce3658d07ab38138edf44787cec679' => 
    array (
      0 => '.\\templates\\verSerie.tpl',
      1 => 1479661862,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3431582cdc33b3ceb7-98220517',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_582cdc33ea31c3_81850864',
  'variables' => 
  array (
    'serie' => 0,
    'categoria' => 0,
    'imagen' => 0,
    'comentarios' => 0,
    'comentario' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582cdc33ea31c3_81850864')) {function content_582cdc33ea31c3_81850864($_smarty_tpl) {?><div class="container">
  <h1><?php echo $_smarty_tpl->tpl_vars['serie']->value["nombre"];?>
 <small> - <?php echo $_smarty_tpl->tpl_vars['serie']->value["año"];?>
 - <?php echo $_smarty_tpl->tpl_vars['categoria']->value["nombre"];?>
</small></h1>

  <ul>
    <li>
      <?php  $_smarty_tpl->tpl_vars['imagen'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['imagen']->_loop = false;
 $_smarty_tpl->tpl_vars['index'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['serie']->value['imagenes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['imagen']->key => $_smarty_tpl->tpl_vars['imagen']->value){
$_smarty_tpl->tpl_vars['imagen']->_loop = true;
 $_smarty_tpl->tpl_vars['index']->value = $_smarty_tpl->tpl_vars['imagen']->key;
?>
      <img src="<?php echo $_smarty_tpl->tpl_vars['imagen']->value['path'];?>
" alt="Serie<?php echo $_smarty_tpl->tpl_vars['serie']->value['nombre'];?>
"  class="img-thumbnail">
      <?php } ?>

      <p><?php echo $_smarty_tpl->tpl_vars['serie']->value["noticia"];?>
</p>
      <a href="<?php echo $_smarty_tpl->tpl_vars['serie']->value['link'];?>
">Link de descarga</a>


    </li>
  </ul> 
  <ul>
  <?php  $_smarty_tpl->tpl_vars['comentario'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['comentario']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comentarios']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['comentario']->key => $_smarty_tpl->tpl_vars['comentario']->value){
$_smarty_tpl->tpl_vars['comentario']->_loop = true;
?>
  <li><?php echo $_smarty_tpl->tpl_vars['comentario']->value["nombre"];?>

  <!--REVISAR ESTO-->
  <a data-id="<?php echo $_smarty_tpl->tpl_vars['comentario']->value["id_comentario"];?>
" href="index.php?action=agregar_comentario&id_comentario=<?php echo $_smarty_tpl->tpl_vars['comentario']->value['id_comentario'];?>
" class="agregarComentario">Agregar</a> 
   </li>
  <?php } ?>
</ul>
</div>
<?php }} ?>