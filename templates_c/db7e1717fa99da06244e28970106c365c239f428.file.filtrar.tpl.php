<?php /* Smarty version Smarty-3.1.14, created on 2016-11-11 15:51:48
         compiled from ".\templates\filtrar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:254615825da03739808-97499712%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'db7e1717fa99da06244e28970106c365c239f428' => 
    array (
      0 => '.\\templates\\filtrar.tpl',
      1 => 1478875900,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '254615825da03739808-97499712',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5825da037d5ec2_22743689',
  'variables' => 
  array (
    'series' => 0,
    'serie' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5825da037d5ec2_22743689')) {function content_5825da037d5ec2_22743689($_smarty_tpl) {?>
        <?php  $_smarty_tpl->tpl_vars['serie'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['serie']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['series']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['serie']->key => $_smarty_tpl->tpl_vars['serie']->value){
$_smarty_tpl->tpl_vars['serie']->_loop = true;
?>
        <li><?php echo $_smarty_tpl->tpl_vars['serie']->value["nombre"];?>
</li>
        <?php } ?>

<?php }} ?>