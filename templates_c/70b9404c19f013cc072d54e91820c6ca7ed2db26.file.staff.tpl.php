<?php /* Smarty version Smarty-3.1.14, created on 2016-09-19 22:00:58
         compiled from ".\templates\staff.tpl" */ ?>
<?php /*%%SmartyHeaderCode:873557e043fa80aed8-01602927%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '70b9404c19f013cc072d54e91820c6ca7ed2db26' => 
    array (
      0 => '.\\templates\\staff.tpl',
      1 => 1474313549,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '873557e043fa80aed8-01602927',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_57e043fab9a5a2_18714849',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e043fab9a5a2_18714849')) {function content_57e043fab9a5a2_18714849($_smarty_tpl) {?> <?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<section>
<div class="cuerpotexto">
  <h1>¿Te gustaria formar parte de nuestro staff?</h1>
  <h2>¿Quienes somos?</h2>
  <p>Fans del Anime News nació a principios del 2016 con la idea de informar sobre las novedades en el  mundo del manga/anime, poco a poco este blog ha crecido y sigue creciendo gracias a las visitas de todas las personas de distintos países de Latinoamérica, Europa y otras partes del mundo.</p>
  <p>El staff de F.A.N actualmente solo está compuesto por 2 personas</p>
  <h2>¿Que buscamos?</h2>
  <p>Buscamos Fans del anime, que sean creativos y les guste trabajar en equipo, escribir, investigar y debatir</p>
  <p>Si crees que cumplís con estas cualidades te proponemos ser parte de alguno de estos puestos:</p>
  <ul class="listaStaff">
    <li>Editores</li>
    <li>Encargados para las redes sociales</li>
    <li>Traductores</li>
  </ul>
</div>
<div class="formularios">
  <div class="panel panel-primary">

    <div class="panel-heading">
      <h3 class="panel-title">Llena este formulario para ser parte del Staff:</h3>
    </div>
    <div class="panel-body">
    	<form method="POST" action="index.php?action=consulta"> 
   
        <div class="form-group">
          <label for="name">Nombre</label>
          <input type="text" class="form-control" id="name" placeholder="Ingrese su Nombre">
        </div>
        <div class="form-group">
          <label for="username">Apellido</label>
          <input type="text" class="form-control" id="username" placeholder="Ingrese su Apellido">
        </div>
        <div class="form-group">
          <label for="number">Edad</label>
          <input type="number" class="form-control" id="number" placeholder="Ingrese su edad">
        </div>
        <p>Email</p>
        <div class="input-group">
          <span class="input-group-addon">@</span>
          <input type="text" class="form-control" placeholder="Ingrese su Email">
        </div>
        <p>¿En que puesto esta interesado/a?</p>
        <select class="form-control">
          <option>Editor/a</option>
          <option>Encargado/a R.S</option>
          <option>Traductor/a</option>
        </select>
        <p>¿Por que deberiamos elegirte?</p>
        <textarea class="form-control" rows="8"></textarea>
        <button type="button" class="btn btn-success">Enviar</button>
      </form>
    </div>
  </div>
</div>
</section>


  <?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

 <?php }} ?>