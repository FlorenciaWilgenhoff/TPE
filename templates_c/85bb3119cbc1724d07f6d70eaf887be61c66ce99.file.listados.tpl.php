<?php /* Smarty version Smarty-3.1.14, created on 2016-11-23 20:10:39
         compiled from ".\templates\listados.tpl" */ ?>
<?php /*%%SmartyHeaderCode:180085835e253be1852-62679753%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '85bb3119cbc1724d07f6d70eaf887be61c66ce99' => 
    array (
      0 => '.\\templates\\listados.tpl',
      1 => 1479928221,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '180085835e253be1852-62679753',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5835e253cb5973_31466601',
  'variables' => 
  array (
    'categorias' => 0,
    'categoria' => 0,
    'series' => 0,
    'serie' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5835e253cb5973_31466601')) {function content_5835e253cb5973_31466601($_smarty_tpl) {?><div class="container">

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




<div class="bs_example">
    <label for="grupo">Filtrado de categorias</label>

    <select class="form-control filtro" name="categoria">
        <option selected>Elija categoría</option>
        <?php  $_smarty_tpl->tpl_vars['categoria'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['categoria']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categorias']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->key => $_smarty_tpl->tpl_vars['categoria']->value){
$_smarty_tpl->tpl_vars['categoria']->_loop = true;
?>
        <option value="<?php echo $_smarty_tpl->tpl_vars['categoria']->value["id_categoria"];?>
"><?php echo $_smarty_tpl->tpl_vars['categoria']->value["nombre"];?>
</option>
        <?php } ?>
    </select>
    <div class="mostrarFiltro"></div>
  </div>



  <h1>Listado de Series</h1>
  <ul> 
    <?php  $_smarty_tpl->tpl_vars['categoria'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['categoria']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categorias']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->key => $_smarty_tpl->tpl_vars['categoria']->value){
$_smarty_tpl->tpl_vars['categoria']->_loop = true;
?>
      <?php  $_smarty_tpl->tpl_vars['serie'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['serie']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['series']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['serie']->key => $_smarty_tpl->tpl_vars['serie']->value){
$_smarty_tpl->tpl_vars['serie']->_loop = true;
?>
      <?php if ($_smarty_tpl->tpl_vars['serie']->value["fk_id_categoria"]==$_smarty_tpl->tpl_vars['categoria']->value["id_categoria"]){?>
        <li><?php echo $_smarty_tpl->tpl_vars['serie']->value["nombre"];?>
 - <?php echo $_smarty_tpl->tpl_vars['categoria']->value["nombre"];?>

          <a class="serie" data-id="<?php echo $_smarty_tpl->tpl_vars['serie']->value['id_serie'];?>
" href="index.php?action=mostrar_serie&id_serie=<?php echo $_smarty_tpl->tpl_vars['serie']->value['id_serie'];?>
">Ver mas</a>
        </li>
      <?php }?>
      <?php } ?>
    <?php } ?>
  </ul>



</div>
<?php }} ?>