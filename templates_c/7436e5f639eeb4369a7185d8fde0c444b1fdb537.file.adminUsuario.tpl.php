<?php /* Smarty version Smarty-3.1.14, created on 2016-11-23 22:42:58
         compiled from ".\templates\adminUsuario.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1690458360d625ea1d0-30865108%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7436e5f639eeb4369a7185d8fde0c444b1fdb537' => 
    array (
      0 => '.\\templates\\adminUsuario.tpl',
      1 => 1479923881,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1690458360d625ea1d0-30865108',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'usuarios' => 0,
    'usuario' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_58360d62ac0305_86375262',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58360d62ac0305_86375262')) {function content_58360d62ac0305_86375262($_smarty_tpl) {?>
<h1>Listado de Usuarios</h1>
<ul>
  <?php  $_smarty_tpl->tpl_vars['usuario'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['usuario']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['usuarios']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['usuario']->key => $_smarty_tpl->tpl_vars['usuario']->value){
$_smarty_tpl->tpl_vars['usuario']->_loop = true;
?>
  <li><?php echo $_smarty_tpl->tpl_vars['usuario']->value["nombre"];?>

  	<?php if ($_smarty_tpl->tpl_vars['usuario']->value["administrador"]==1){?>(Admin)<?php }?>

<a data-id="<?php echo $_smarty_tpl->tpl_vars['usuario']->value["id_usuario"];?>
" class="actualizarPermisos" href="index.php?action=actualizar_permisos&id_usuario=<?php echo $_smarty_tpl->tpl_vars['usuario']->value["id_usuario"];?>
"><span class="glyphicon glyphicon-record" aria-hidden="true"></span></a>

  	 </li> 
  <?php } ?>


</ul><?php }} ?>