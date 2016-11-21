<?php /* Smarty version Smarty-3.1.14, created on 2016-11-20 19:37:21
         compiled from ".\templates\instalador.tpl" */ ?>
<?php /*%%SmartyHeaderCode:37275831d3be18a784-20882372%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4cd41257685957b7f9fd8b15b5d0d0705b589912' => 
    array (
      0 => '.\\templates\\instalador.tpl',
      1 => 1479667037,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '37275831d3be18a784-20882372',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5831d3be8464a9_55248297',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5831d3be8464a9_55248297')) {function content_5831d3be8464a9_55248297($_smarty_tpl) {?><html><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instalador de BBDD</title>
   <link rel="stylesheet" href="css/bootstrap.css">
  <link href="css/one-page-wonder.css" rel="stylesheet">

</head>
<body class="blank  pace-done">
<div class="wrapper">
    <section class="content">
        <div class="container-center lg animated slideInDown">
            <div class="view-header">
                <div class="header-title">
                    <h3>Instalación de la base de datos</h3>
                </div>
            </div>

            <div class="panel panel-filled">
                <div class="panel-body">
                    <form class="db" method="post">
                        <div class="row">
                            <div class="form-group col-lg-6">
                                <label>Host</label>
                                <input type="name" value="" class="form-control" name="host" required>
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Usuario</label>
                                <input type="name" value="" class="form-control" name="user" required>
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Contraseña</label>
                                <input type="password" value=""class="form-control" name="db-pw">
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Nombre base de datos</label>
                                <input type="name" value="" class="form-control" name="dbname" required>
                            </div>
                            <div class="form-group col-lg-12">
                              <div class="checkbox"><label> <input type="checkbox" name="vaciar" value=""> Vaciar base de datos</label></div>
                              <div class="checkbox"><label> <input type="checkbox" name="add" value=""> Agregar datos a la base de datos</label></div>
                            </div>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-default">Confirmar</button>
                        </div>
                    </form>
                    <div class="error"> </div>
                </div>
            </div>

        </div>
    </section>

</div>

<script src="../js/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="js/ajax.js"></script>


</body>
</html><?php }} ?>