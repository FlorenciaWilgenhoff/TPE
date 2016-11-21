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
          <h2>Registrarse</h2>
          
        </div>
      </div>

      <div class="panel panel-filled">
        <div class="panel-body">
          <form method="post" action="registrarse">

             <div class="form-group">
             <label class="control-label" for="name">Nombre</label>
              <input type="text" name="nombre" id="inputNombre" class="form-control" placeholder="Ingrese un nombre" required autofocus>
            </div>

            <div class="form-group">
             <label class="control-label" for="username">Email</label>
              <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Ingrese su email" required autofocus>
            </div>

            <div class="form-group">
              <label class="control-label" for="password">Contraseña</label>
                <input type="password" name="password"id="inputPassword" class="form-control" placeholder="Ingrese contraseña" required>
            </div>
           
            <div>
               <button type="submit"class="btn btn-lg btn-primary btn-block btn-signin">Registrarme</button> 
            </div>
          </form>
      </div>
    </div>
    <a href="index.php" class="btn btn-accent">Volver a inicio</a>
  </section>

 