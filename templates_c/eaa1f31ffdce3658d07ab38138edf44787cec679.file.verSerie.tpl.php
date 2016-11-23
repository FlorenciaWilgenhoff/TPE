<?php /* Smarty version Smarty-3.1.14, created on 2016-11-23 19:43:05
         compiled from ".\templates\verSerie.tpl" */ ?>
<?php /*%%SmartyHeaderCode:296175835e25893c322-60854772%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eaa1f31ffdce3658d07ab38138edf44787cec679' => 
    array (
      0 => '.\\templates\\verSerie.tpl',
      1 => 1479926553,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '296175835e25893c322-60854772',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5835e258a1d453_77475658',
  'variables' => 
  array (
    'serie' => 0,
    'categoria' => 0,
    'imagen' => 0,
    'usuario' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5835e258a1d453_77475658')) {function content_5835e258a1d453_77475658($_smarty_tpl) {?><div class="container">
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
      

    </li>
  </ul> 
  

 <h3>Comentarios</h3>
   <div class="comentarios">
    
   </div>
    <?php if (isset($_smarty_tpl->tpl_vars['usuario']->value)){?>
     <div class="row">
      <div class="col-md-12">
          <h1>Agregar Comentario</h1>

            <form method="POST" class="agregarComentario" >
                  <input type="hidden" name="id_serie" value="<?php echo $_smarty_tpl->tpl_vars['serie']->value["id_serie"];?>
" class="id_serie">
                  <input type="hidden" name="id_usuario" value="<?php echo $_smarty_tpl->tpl_vars['usuario']->value;?>
">
                  <div class="form-group form-inline">
                    <label>Puntaje</label>
                    <select class="form-control" name="puntaje" placeholder="Seleccione un numero de puntaje">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Comentario</label>
                    <textarea class="form-control" rows="3" name="comentario" placeholder="Escriba un comentario"></textarea>
                  </div>
                  <button type="submit" class="btn btn-default">Comentar</button>
                </form>
          </div>
        </div>
      <?php }?>
  </div>

<?php }} ?>