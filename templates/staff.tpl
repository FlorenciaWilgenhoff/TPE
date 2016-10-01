 {include file='header.tpl'}
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
    	<form method="POST" action="index.php?action=guardar_staff">

        <div class="form-group">
          <label for="name">Nombre</label>
          <input type="text" class="form-control" name="nombre" placeholder="Ingrese su Nombre">
        </div>
        <div class="form-group">
          <label for="username">Apellido</label>
          <input type="text" class="form-control" name="apellido" placeholder="Ingrese su Apellido">
        </div>
        <div class="form-group">
          <label for="number">Edad</label>
          <input type="number" class="form-control" name="edad" placeholder="Ingrese su edad">
        </div>
        <p>Email</p>
        <div class="input-group">
          <span class="input-group-addon">@</span>
          <input type="text" class="form-control" name="email" placeholder="Ingrese su Email">
        </div>
        <p>¿En que puesto esta interesado/a?</p>
        <select class="form-control" name="puesto">
          <option value="edi">Editor/a</option>
          <option value="en">Encargado/a R.S</option>
          <option value="tra">Traductor/a</option>
        </select>
        <p>¿Por que deberiamos elegirte?</p>
        <textarea class="form-control" name="motivo" rows="8"></textarea>
        <button type="submit" class="btn btn-success">Enviar</button>
      </form>
    </div>
  </div>
</div>
</section>


  {include file='footer.tpl'}
