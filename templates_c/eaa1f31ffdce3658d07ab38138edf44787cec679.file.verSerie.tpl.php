<?php /* Smarty version Smarty-3.1.14, created on 2016-11-16 23:22:43
         compiled from ".\templates\verSerie.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3431582cdc33b3ceb7-98220517%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eaa1f31ffdce3658d07ab38138edf44787cec679' => 
    array (
      0 => '.\\templates\\verSerie.tpl',
      1 => 1479334470,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3431582cdc33b3ceb7-98220517',
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
  'unifunc' => 'content_582cdc33ea31c3_81850864',
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

<!--PONER COMENTARIOS ACA.-->
<h1>Agregar Comentario</h1>

<form method="POST" class="agregarComentario" action="index.php?action=agregar_comentario" enctype="multipart/form-data">

  <div class="form-group">
    <label for="grupo">Ingrese su nombre</label>
    <input type="text" class="form-control" name="nombre" placeholder="juan" required />
  </div>

  <div class="form-group">
    <label for="grupo">Ingrese su email</label>
    <input type="text" class="form-control" name="email" placeholder="juanperez@gmail.com" required />
  </div>
  <div class="form-group">
    <label for="sel1">Indique puntaje:</label>
    <select class="form-control" name="puntaje">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
  </div>
  <div class="form-group">
    <label for="comentario">Escriba comentario</label>
    <textarea name="comentario" class="form-control" rows="3"></textarea>
  </div>


  <input type="submit" class="btn btn-default" value="Agregar">

</form>
    </li>
  </ul>
</div>
<?php }} ?>