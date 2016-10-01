<?php /* Smarty version Smarty-3.1.14, created on 2016-09-30 17:35:47
         compiled from ".\templates\admin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1956557ec20ff6f1f79-72699599%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dde4406728b78ad8acb77d025ffd08e41bf138dd' => 
    array (
      0 => '.\\templates\\admin.tpl',
      1 => 1475249691,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1956557ec20ff6f1f79-72699599',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_57ec210014e0e8_42138272',
  'variables' => 
  array (
    'animes' => 0,
    'anime' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ec210014e0e8_42138272')) {function content_57ec210014e0e8_42138272($_smarty_tpl) {?> <!--TERCER PAGINA (ADMINISTRADOR)
  LISTADO DE ANIMES
  -nombre
  -nombre
  AGREGAR ANIME
  -nombre
  -categoria a elegir
  -subir imagen
  -descripcion
  -link
  EDITAR ANIME (VER)
  -nombre (del anime que quiere editar)
  -nombre
  ELIMINAR ANIME
  -nombre
  -nombre 
  con un boton al lado de X
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
<!--hacer dropdown para elegir categoria -->
  <form method="POST" action="index.php?action=agregar_anime" enctype="multipart/form-data"> 
    <div class="form-group">
      <label for="grupo">Año</label>
      <input type="text" class="imputform" name="anio" placeholder="1986" required />
    </div>

    <div class="form-group">
      <label for="grupo">Nombre del Anime</label>
      <input type="text" class="imputform" name="nombre" placeholder="dragonballz" required />
    </div>

      <div class="form-group">
      <label for="grupo">Link</label>
      <input type="text" class="imputform" name="link" placeholder="link" required />
    </div>

   <div class="form-group">
      <label for="grupo">Descripcion del anime</label>
      <textarea name="descripcion"class="form-control" rows="3"></textarea> 
      
    </div>

    <input type="file" name="imagenes[]" required value="" multiple>

    <input type="submit" name="Agregar" id="agregarAnimeBtn">
 
</form>



<h1>Editar Animes</h1>











<h1>Eliminar Animes</h1>
 <?php if (isset($_smarty_tpl->tpl_vars['animes']->value)){?>
    <ul>
      <?php  $_smarty_tpl->tpl_vars['anime'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['anime']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['animes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['anime']->key => $_smarty_tpl->tpl_vars['anime']->value){
$_smarty_tpl->tpl_vars['anime']->_loop = true;
?>
        <li><?php echo $_smarty_tpl->tpl_vars['anime']->value["nombre"];?>
<a class="eliminarAnimes" href="#" data-idtarea="<?php echo $_smarty_tpl->tpl_vars['anime']->value['id_anime'];?>
"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>

          </li>
      <?php } ?>
    </ul>
  <?php }?>
  
  



 <?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>



      
     
     <?php }} ?>