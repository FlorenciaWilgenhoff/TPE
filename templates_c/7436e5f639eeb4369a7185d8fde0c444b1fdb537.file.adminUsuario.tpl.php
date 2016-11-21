<?php /* Smarty version Smarty-3.1.14, created on 2016-11-20 18:46:31
         compiled from ".\templates\adminUsuario.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10082582f2020acf160-75481620%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7436e5f639eeb4369a7185d8fde0c444b1fdb537' => 
    array (
      0 => '.\\templates\\adminUsuario.tpl',
      1 => 1479663898,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10082582f2020acf160-75481620',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_582f2020b43125_47136991',
  'variables' => 
  array (
    'usuarios' => 0,
    'usuario' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582f2020b43125_47136991')) {function content_582f2020b43125_47136991($_smarty_tpl) {?>
<h1>Listado de Usuarios</h1>
<ul>
  <?php  $_smarty_tpl->tpl_vars['usuario'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['usuario']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['usuarios']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['usuario']->key => $_smarty_tpl->tpl_vars['usuario']->value){
$_smarty_tpl->tpl_vars['usuario']->_loop = true;
?>
  <li><?php echo $_smarty_tpl->tpl_vars['usuario']->value["nombre"];?>

  	<?php if ($_smarty_tpl->tpl_vars['usuario']->value["administrador"]==1){?>(Admin)<?php }?> <a href="index.php?action=actualizar_permisos&id_usuario=<?php echo $_smarty_tpl->tpl_vars['usuario']->value["id_usuario"];?>
"><span class="glyphicon glyphicon-record" aria-hidden="true"></span></a></li> 
  <?php } ?>


</ul><?php }} ?>