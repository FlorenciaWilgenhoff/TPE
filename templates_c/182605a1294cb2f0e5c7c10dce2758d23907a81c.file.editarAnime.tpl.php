<?php /* Smarty version Smarty-3.1.14, created on 2016-10-03 01:02:59
         compiled from ".\templates\editarAnime.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1264957f180c1afde30-31126792%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '182605a1294cb2f0e5c7c10dce2758d23907a81c' => 
    array (
      0 => '.\\templates\\editarAnime.tpl',
      1 => 1475449373,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1264957f180c1afde30-31126792',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_57f180c1b6b438_93479349',
  'variables' => 
  array (
    'anime' => 0,
    'imagenes' => 0,
    'imagen' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57f180c1b6b438_93479349')) {function content_57f180c1b6b438_93479349($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


	<h1> Editar Anime   </h1>

<form method="post" action="index.php?action=editar_anime&id_anime=<?php echo $_smarty_tpl->tpl_vars['anime']->value["id_anime"];?>
" enctype="multipart/form-data"> 
    <div class="form-group">
      <label for="grupo">Año</label>
      <input type="text" class="imputform" name="anio" value="<?php echo $_smarty_tpl->tpl_vars['anime']->value["año"];?>
" placeholder="1986" required />
    </div>

    <div class="form-group">
      <label for="grupo">Nombre del Anime</label>
      <input type="text" class="imputform" name="nombre" value="<?php echo $_smarty_tpl->tpl_vars['anime']->value["nombre"];?>
" placeholder="dragonballz" required />
    </div>

      <div class="form-group">
      <label for="grupo">Link</label>
      <input type="text" class="imputform" name="link" value="<?php echo $_smarty_tpl->tpl_vars['anime']->value["link"];?>
" placeholder="link" required />
    </div>

   <div class="form-group">
      <label for="grupo">Descripcion del anime</label>
      <textarea name="descripcion"class="form-control"  rows="3"> <?php echo $_smarty_tpl->tpl_vars['anime']->value["noticia"];?>
</textarea> 
      
    </div>


    <input type="file" name="imagenes[]" value="" multiple>

          <div class="form-group">
      <h4>Borrar imagenes</h4>

	<?php  $_smarty_tpl->tpl_vars['imagen'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['imagen']->_loop = false;
 $_smarty_tpl->tpl_vars['index'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['imagenes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['imagen']->key => $_smarty_tpl->tpl_vars['imagen']->value){
$_smarty_tpl->tpl_vars['imagen']->_loop = true;
 $_smarty_tpl->tpl_vars['index']->value = $_smarty_tpl->tpl_vars['imagen']->key;
?>

      <input type="checkbox" class="imputform" name="imagen<?php echo $_smarty_tpl->tpl_vars['imagen']->value['id_ia'];?>
" />
      <img src="<?php echo $_smarty_tpl->tpl_vars['imagen']->value['path'];?>
" alt="AnimeImagen_<?php echo $_smarty_tpl->tpl_vars['anime']->value['nombre'];?>
_<?php echo $_smarty_tpl->tpl_vars['imagen']->value['id_ia'];?>
"  class="img-thumbnail">
      <?php } ?>
    </div>
    <input type="submit" name="Agregar" id="agregarAnimeBtn">
</form>


 <?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>