<?php /* Smarty version Smarty-3.1.14, created on 2016-11-20 18:04:25
         compiled from ".\templates\verComentarios.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13879582f0bfe3a0536-84006320%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3ecdeb90f50364b26013fab18ccda50b48d6ef84' => 
    array (
      0 => '.\\templates\\verComentarios.tpl',
      1 => 1479661408,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13879582f0bfe3a0536-84006320',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_582f0bfe43f424_61251600',
  'variables' => 
  array (
    'comentarios' => 0,
    'comentario' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582f0bfe43f424_61251600')) {function content_582f0bfe43f424_61251600($_smarty_tpl) {?><h1>Comentarios</h1>
<?php  $_smarty_tpl->tpl_vars['comentario'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['comentario']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comentarios']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['comentario']->key => $_smarty_tpl->tpl_vars['comentario']->value){
$_smarty_tpl->tpl_vars['comentario']->_loop = true;
?>
  <li><?php echo $_smarty_tpl->tpl_vars['comentario']->value["nombre"];?>
- <?php echo $_smarty_tpl->tpl_vars['comentario']->value["email"];?>
 - <?php echo $_smarty_tpl->tpl_vars['comentario']->value["puntaje"];?>

   <strong><?php echo $_smarty_tpl->tpl_vars['comentario']->value["comentario"];?>
</strong> 
 </li>
 <?php } ?>   
  
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

</form><?php }} ?>