<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  <title>Series</title>
  <link rel="stylesheet" href="css/bootstrap.css">
  <link href="css/one-page-wonder.css" rel="stylesheet">

</head>
<body class="blank  pace-done">

  <section class="content">
    <div class="back-link">
    
    </div>

    <div class="container-center">

      <div class="view-header">
        <div class="header-icon">
          <i class="pe page-header-icon pe-7s-unlock"></i>
        </div>
        <div class="header-title">
          <h2>Ingrese a su cuenta</h2>
          
        </div>
      </div>

      <div class="panel panel-filled">
        <div class="panel-body">
          <form method="post" action="login">

            <div class="form-group">
             <label class="control-label" for="username">Email</label>
             <input type="email" name="txtUser" id="inputEmail" class="form-control" placeholder="Ingrese su Email" required autofocus>
            </div>

            <div class="form-group">
              <label class="control-label" for="password">Contraseña</label>
              <input type="password" name="txtPass"id="inputPassword" class="form-control" placeholder="Ingrese su contraseña" required>
            </div>
            
            <div>
               <button type="submit"class="btn btn-lg btn-primary btn-block btn-signin">Entrar</button> 
               <a href="index.php?action=registrarse" class="btn btn-default registrarme">Registrarme</a>
            </div>
            
          </form>
      </div>
    </div>
    <a href="index.php" class="btn btn-accent">Volver a inicio</a>
  </section>
 {include file="footer.tpl"}
  