<?php /* Smarty version Smarty-3.1.14, created on 2016-09-19 21:40:56
         compiled from ".\templates\anime.tpl" */ ?>
<?php /*%%SmartyHeaderCode:585457dc12e3770127-45691379%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b1177291f6d6655e2835d12e3bca8ba0f4a515f9' => 
    array (
      0 => '.\\templates\\anime.tpl',
      1 => 1474244455,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '585457dc12e3770127-45691379',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_57dc12e37f3f92_12028125',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57dc12e37f3f92_12028125')) {function content_57dc12e37f3f92_12028125($_smarty_tpl) {?> <?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<!--Esta vendria a ser la PRIMERA PAGINA donde se encuentra:
	Listado de Categorias
	Listado de animes(haciendo click veo anime), y me lleva a otra pagina, que seria la segunda pagina. !-->


  <?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>




  <!--SEGUNDA PAGINA, 
  Nombre de la categoria
  Nombre del anime
  Imagen 
  Descripcion
  Link

  VER DONDE PONER EL BOTON QUE MANDE AL ADMINISTRADOR  
  !-->



  <!--TERCER PAGINA (ADMINISTRADOR)
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
 <?php }} ?>