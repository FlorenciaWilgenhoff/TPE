<?php /* Smarty version Smarty-3.1.14, created on 2016-11-18 16:36:02
         compiled from ".\templates\formLogin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9815582f1fe2732204-59504428%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'abab724a12058d40dc943d0a525d356ce38012cf' => 
    array (
      0 => '.\\templates\\formLogin.tpl',
      1 => 1479324118,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9815582f1fe2732204-59504428',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_582f1fe2ae9a57_57104531',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582f1fe2ae9a57_57104531')) {function content_582f1fe2ae9a57_57104531($_smarty_tpl) {?><!--
<!DOCTYPE html>
<html lang="en">
    <head> 
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">

		
		<link rel="stylesheet" type="text/css" href="assets/css/main.css">

		
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
		
		<link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>

		<title>Admin</title>
	</head>
	<body>

	-->
		<div class="container">
			<div class="row main">
				<div class="panel-heading">
	               <div class="panel-title text-center">
	               		<h1 class="title">Registrarse</h1>
	               	
	               	</div>
	            </div> 
				<div class="main-login main-center">
					<form class="form-horizontal" method="post">
						

						<div class="form-group">
							<label for="email" class="cols-sm-2 control-label">Escriba su Email</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="email" id="email"  placeholder="Enter your Email"/>
								</div>
							</div>
						</div>

						<div  class="form-group">
							<label for="password" class="cols-sm-2 control-label">Contraseña</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="password" id="password"  placeholder="Enter your Password"/>
								</div>
							</div>
						</div>

						<div class="form-group ">
							<button type="submit" class="btn btn-primary btn-lg btn-block login-button">Registrarse</button>
						</div>
						<div class="login-register">
				            <a href="index.php">Login</a>
				         </div>
					</form>
				</div>
			</div>
		</div>
		<!--

		<script type="text/javascript" src="assets/js/bootstrap.js"></script>
	</body>
</html>
--><?php }} ?>