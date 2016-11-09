<?php /* Smarty version Smarty-3.1.14, created on 2016-11-06 20:39:28
         compiled from ".\templates\verSerie.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12344581f86f06ea854-14681679%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eaa1f31ffdce3658d07ab38138edf44787cec679' => 
    array (
      0 => '.\\templates\\verSerie.tpl',
      1 => 1478274057,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12344581f86f06ea854-14681679',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'serie' => 0,
    'categoria' => 0,
    'imagen' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_581f86f0b12f38_38050588',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_581f86f0b12f38_38050588')) {function content_581f86f0b12f38_38050588($_smarty_tpl) {?><div class="container">
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
</div>
<?php }} ?>