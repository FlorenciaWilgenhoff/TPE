<?php /* Smarty version Smarty-3.1.14, created on 2016-11-23 22:44:20
         compiled from ".\templates\adminSerie.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3168658360db428c667-63136594%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e24dd60cff174ad97856eb3c3f664ee85e869225' => 
    array (
      0 => '.\\templates\\adminSerie.tpl',
      1 => 1478273683,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3168658360db428c667-63136594',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'series' => 0,
    'serie' => 0,
    'categorias' => 0,
    'categoria' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_58360db44064e5_93546256',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58360db44064e5_93546256')) {function content_58360db44064e5_93546256($_smarty_tpl) {?>
<h1>Listado de Series</h1>
<ul>
  <?php  $_smarty_tpl->tpl_vars['serie'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['serie']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['series']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['serie']->key => $_smarty_tpl->tpl_vars['serie']->value){
$_smarty_tpl->tpl_vars['serie']->_loop = true;
?>
  <li><?php echo $_smarty_tpl->tpl_vars['serie']->value["nombre"];?>

  <a data-id="<?php echo $_smarty_tpl->tpl_vars['serie']->value["id_serie"];?>
" href="index.php?action=editar_serie&id_serie=<?php echo $_smarty_tpl->tpl_vars['serie']->value['id_serie'];?>
" class="editarSerie">Editar</a>

  <a data-id="<?php echo $_smarty_tpl->tpl_vars['serie']->value["id_serie"];?>
" class="eliminarSerie" href="index.php?action=eliminar_serie&id_serie=<?php echo $_smarty_tpl->tpl_vars['serie']->value['id_serie'];?>
"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>

  </li>
  <?php } ?>
</ul>


<h1>Agregar Serie</h1>

<form method="POST" class="agregarSerie" action="index.php?action=agregar_serie" enctype="multipart/form-data">
  <div class="form-group">
    <label for="grupo">Año</label>
    <input type="text" class="form-control" name="anio" placeholder="1986" required />
  </div>

  <div class="form-group">
    <label for="grupo">Nombre de la Serie</label>
    <input type="text" class="form-control" name="nombre" placeholder="lost" required />
  </div>

  <div class="form-group">
    <label for="grupo">Link</label>
    <input type="text" class="form-control" name="link" placeholder="link" required />
  </div>

  <div class="form-group">
    <label>Categoria</label>
    <select class="form-control" name="categoria">
      <?php  $_smarty_tpl->tpl_vars['categoria'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['categoria']->_loop = false;
 $_smarty_tpl->tpl_vars['index'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['categorias']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->key => $_smarty_tpl->tpl_vars['categoria']->value){
$_smarty_tpl->tpl_vars['categoria']->_loop = true;
 $_smarty_tpl->tpl_vars['index']->value = $_smarty_tpl->tpl_vars['categoria']->key;
?>
      <option value="<?php echo $_smarty_tpl->tpl_vars['categoria']->value["id_categoria"];?>
"><?php echo $_smarty_tpl->tpl_vars['categoria']->value["nombre"];?>
</option>
      <?php } ?>
    </select>
  </div>

  <div class="form-group">
    <label for="descripcion">Descripción de la Serie</label>
    <textarea name="descripcion" class="form-control" rows="3"></textarea>
  </div>

  <div class="form-group">
    <label>Subir imagenes</label>
    <input type="file" name="imagenes[]" value="" multiple>
  </div>


  <input type="submit" class="btn btn-default" value="Agregar">

</form>
<?php }} ?>