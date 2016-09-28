<?php /* Smarty version Smarty-3.1.14, created on 2016-09-28 20:31:27
         compiled from ".\templates\listados.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2176857e85b80d7d9d1-83548528%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '85bb3119cbc1724d07f6d70eaf887be61c66ce99' => 
    array (
      0 => '.\\templates\\listados.tpl',
      1 => 1475087486,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2176857e85b80d7d9d1-83548528',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_57e85b80db5504_52166166',
  'variables' => 
  array (
    'animes' => 0,
    'anime' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e85b80db5504_52166166')) {function content_57e85b80db5504_52166166($_smarty_tpl) {?><!--Esta vendria a ser la PRIMERA PAGINA donde se encuentra:
	Listado de Categorias
	Listado de animes(haciendo click veo anime), y me lleva a otra pagina, que seria la segunda pagina. !-->
   <?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

  <div class="container">

<h1>Listado de Categorias</h1>
   


<h1>Listado de Animes</h1>


 
    <ul>
      <?php  $_smarty_tpl->tpl_vars['anime'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['anime']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['animes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['anime']->key => $_smarty_tpl->tpl_vars['anime']->value){
$_smarty_tpl->tpl_vars['anime']->_loop = true;
?>
        <li><?php echo $_smarty_tpl->tpl_vars['anime']->value["nombre"];?>

          <a href="index.php?action=mostrar_anime&id_anime=<?php echo $_smarty_tpl->tpl_vars['anime']->value['fk_id_categoria'];?>
">Ver mas</a></li>
      <?php } ?>
    </ul>

  </div>
  <?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>





  <!--hacer boton de ver mas--><?php }} ?>