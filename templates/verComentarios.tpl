<h1>Comentarios</h1>
{foreach from=$comentarios item=comentario}
  <li>{$comentario["nombre"]}- {$comentario["email"]} - {$comentario["puntaje"]}
   <strong>{$comentario["comentario"]}</strong> 
 </li>
 {/foreach}   
  
<h1>Agregar Comentario</h1>

<form method="POST" class="agregarComentario" action="index.php?action=agregar_comentario" enctype="multipart/form-data">

  <div class="form-group">
    <label for="grupo">Ingrese su nombre</label>
    <input type="text" class="form-control" name="nombre" placeholder="juan" required />
  </div>

  <div class="form-group">
    <label for="grupo">Ingrese su email</label>
    <input type="text" class="form-control" name="email" placeholder="juanperez@gmail.com" required />
  </div>
  <div class="form-group">
    <label for="sel1">Indique puntaje:</label>
    <select class="form-control" name="puntaje">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
  </div>
  <div class="form-group">
    <label for="comentario">Escriba comentario</label>
    <textarea name="comentario" class="form-control" rows="3"></textarea>
  </div>


  <input type="submit" class="btn btn-default" value="Agregar">

</form>