<?php /* Smarty version Smarty-3.1.14, created on 2016-11-23 21:36:59
         compiled from ".\templates\error.tpl" */ ?>
<?php /*%%SmartyHeaderCode:280925835fdebd049a6-76751939%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dd206b131138557fc135d01cb3f9c30ca11fcf92' => 
    array (
      0 => '.\\templates\\error.tpl',
      1 => 1479657879,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '280925835fdebd049a6-76751939',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'asignados' => 0,
    'db_correcto' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5835fdec0928c5_77838681',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5835fdec0928c5_77838681')) {function content_5835fdec0928c5_77838681($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['asignados']->value){?>
<div class="panel panel-filled panel-c-info">
    <div class="panel-heading">
        La conexion fue establecida correctamente.
    </div>
</div>
<?php }elseif(!$_smarty_tpl->tpl_vars['asignados']->value){?>
<div class="panel panel-filled panel-c-danger">
    <div class="panel-heading">
        Hubo un error al conectarse.
    </div>
</div>
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['db_correcto']->value)){?>
<?php if ($_smarty_tpl->tpl_vars['db_correcto']->value>0){?>
<div class="panel panel-filled panel-c-info">
    <div class="panel-heading">
        Se agregaron datos a la base de datos correctamente.
    </div>
</div>
<?php }else{ ?>
<div class="panel panel-filled panel-c-danger">
    <div class="panel-heading">
        Hubo un problema al agregar los datos (<?php echo $_smarty_tpl->tpl_vars['db_correcto']->value;?>
)
    </div>
</div>
<?php }?>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['asignados']->value){?><a href="../index.php" class="btn btn-w-md btn-success btn-block">Ir al inicio</a><?php }?><?php }} ?>