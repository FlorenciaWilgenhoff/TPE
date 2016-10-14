<?php /* Smarty version Smarty-3.1.14, created on 2016-10-14 16:26:27
         compiled from ".\templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:633757f18e7bbb7ba0-83436203%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '749422d4cfc3eb5677cf499730392b6accd4d1c7' => 
    array (
      0 => '.\\templates\\index.tpl',
      1 => 1476455036,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '633757f18e7bbb7ba0-83436203',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_57f18e7bc25644_16322357',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57f18e7bc25644_16322357')) {function content_57f18e7bc25644_16322357($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    
    <div class="contenido">
      <?php echo $_smarty_tpl->getSubTemplate ('home.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    </div>


<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>