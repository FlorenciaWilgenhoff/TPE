<?php /* Smarty version Smarty-3.1.14, created on 2016-10-13 22:13:27
         compiled from ".\templates\adminAnime.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1882757fe8276d86b77-23777802%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cf7d8def3f22215919e19a93f5899018b625a0f6' => 
    array (
      0 => '.\\templates\\adminAnime.tpl',
      1 => 1476389442,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1882757fe8276d86b77-23777802',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_57fe8276e71d71_69251725',
  'variables' => 
  array (
    'animes' => 0,
    'anime' => 0,
    'categorias' => 0,
    'categoria' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57fe8276e71d71_69251725')) {function content_57fe8276e71d71_69251725($_smarty_tpl) {?> <!--TERCER PAGINA (ADMINISTRADOR)
  
-->

<?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>



 <h1>Listado de Animes</h1>


  <?php if (isset($_smarty_tpl->tpl_vars['animes']->value)){?>
    <ul>
      <?php  $_smarty_tpl->tpl_vars['anime'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['anime']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['animes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['anime']->key => $_smarty_tpl->tpl_vars['anime']->value){
$_smarty_tpl->tpl_vars['anime']->_loop = true;
?>
        <li><?php echo $_smarty_tpl->tpl_vars['anime']->value["nombre"];?>

          </li>
      <?php } ?>
    </ul>
  <?php }?>
 

<h1>Agregar Animes</h1>

  <form method="POST" action="index.php?action=agregar_anime" enctype="multipart/form-data"> 
    <div class="form-group">
      <label for="grupo">Año</label>
      <input type="text" class="form-control" name="anio" placeholder="1986" required />
    </div>

    <div class="form-group">
      <label for="grupo">Nombre del Anime</label>
      <input type="text" class="form-control" name="nombre" placeholder="dragonballz" required />
    </div>

      <div class="form-group">
      <label for="grupo">Link</label>
      <input type="text" class="form-control" name="link" placeholder="link" required />
    </div>

    <div class="form-group">
        <label for="sel1">Categoria</label>
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
      <label for="grupo">Descripcion del anime</label>
      <textarea name="descripcion"class="form-control" rows="3"></textarea> 
      
    </div>

    <input type="file" name="imagenes[]" value="" multiple>

    <input type="submit" name="Agregar" id="agregarAnimeBtn">
 
</form>




<h1>Editar Animes</h1>
 <?php if (isset($_smarty_tpl->tpl_vars['animes']->value)){?>
    <ul>
      <?php  $_smarty_tpl->tpl_vars['anime'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['anime']->_loop = false;
 $_smarty_tpl->tpl_vars['index'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['animes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['anime']->key => $_smarty_tpl->tpl_vars['anime']->value){
$_smarty_tpl->tpl_vars['anime']->_loop = true;
 $_smarty_tpl->tpl_vars['index']->value = $_smarty_tpl->tpl_vars['anime']->key;
?>
        <li><?php echo $_smarty_tpl->tpl_vars['anime']->value["nombre"];?>
<a class="editarAnime" href="index.php?action=editar_anime&id_anime=<?php echo $_smarty_tpl->tpl_vars['anime']->value['id_anime'];?>
"> Editar</a>

          </li>
      <?php } ?>
    </ul>
  <?php }?>




<h1>Eliminar Animes</h1>
 <?php if (isset($_smarty_tpl->tpl_vars['animes']->value)){?>
    <ul>
      <?php  $_smarty_tpl->tpl_vars['anime'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['anime']->_loop = false;
 $_smarty_tpl->tpl_vars['index'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['animes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['anime']->key => $_smarty_tpl->tpl_vars['anime']->value){
$_smarty_tpl->tpl_vars['anime']->_loop = true;
 $_smarty_tpl->tpl_vars['index']->value = $_smarty_tpl->tpl_vars['anime']->key;
?>
        <li><?php echo $_smarty_tpl->tpl_vars['anime']->value["nombre"];?>
<a class="eliminarAnime" href="index.php?action=eliminar_anime&id_anime=<?php echo $_smarty_tpl->tpl_vars['anime']->value['id_anime'];?>
"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>

          </li>
      <?php } ?>
    </ul>
  <?php }?>

 <?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>



      
     
     <?php }} ?>