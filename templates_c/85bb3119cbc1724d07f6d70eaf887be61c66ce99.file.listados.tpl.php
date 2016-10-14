<?php /* Smarty version Smarty-3.1.14, created on 2016-10-14 17:26:07
         compiled from ".\templates\listados.tpl" */ ?>
<?php /*%%SmartyHeaderCode:412257f144c91b5383-41016036%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '85bb3119cbc1724d07f6d70eaf887be61c66ce99' => 
    array (
      0 => '.\\templates\\listados.tpl',
      1 => 1476458685,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '412257f144c91b5383-41016036',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_57f144c9261971_62568241',
  'variables' => 
  array (
    'categorias' => 0,
    'categoria' => 0,
    'animes' => 0,
    'anime' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57f144c9261971_62568241')) {function content_57f144c9261971_62568241($_smarty_tpl) {?><!--Esta vendria a ser la PRIMERA PAGINA donde se encuentra:
	Listado de Categorias
	Listado de animes(haciendo click veo anime), y me lleva a otra pagina, que seria la segunda pagina. !-->

  <div class="container">

<h1>Listado de Categorias</h1>
    <ul>
      <?php  $_smarty_tpl->tpl_vars['categoria'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['categoria']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categorias']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->key => $_smarty_tpl->tpl_vars['categoria']->value){
$_smarty_tpl->tpl_vars['categoria']->_loop = true;
?>
        <li><?php echo $_smarty_tpl->tpl_vars['categoria']->value["nombre"];?>

        </li>
      <?php } ?>
    </ul>
<!-- HACER QUE ESTO ANDE, QUE LOS DOS SE MUESTREN, O QUE SEPARARLOS -->


<h1>Listado de Animes</h1>

   
    <ul>
      <?php  $_smarty_tpl->tpl_vars['categoria'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['categoria']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categorias']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->key => $_smarty_tpl->tpl_vars['categoria']->value){
$_smarty_tpl->tpl_vars['categoria']->_loop = true;
?>
      <?php  $_smarty_tpl->tpl_vars['anime'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['anime']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['animes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['anime']->key => $_smarty_tpl->tpl_vars['anime']->value){
$_smarty_tpl->tpl_vars['anime']->_loop = true;
?>

      <?php if ($_smarty_tpl->tpl_vars['anime']->value["fk_id_categoria"]==$_smarty_tpl->tpl_vars['categoria']->value["id_categoria"]){?>

        <li><?php echo $_smarty_tpl->tpl_vars['anime']->value["nombre"];?>
- <?php echo $_smarty_tpl->tpl_vars['categoria']->value["nombre"];?>

          <a class="anime" data-id="<?php echo $_smarty_tpl->tpl_vars['anime']->value['id_anime'];?>
" href="index.php?action=mostrar_anime&id_anime=<?php echo $_smarty_tpl->tpl_vars['anime']->value['id_anime'];?>
">Ver mas</a>
        </li>
        
      <?php }?>
      <?php } ?>
      <?php } ?>
    </ul>

  </div><?php }} ?>