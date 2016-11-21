<div class="container">
  <h1>{$serie["nombre"]} <small> - {$serie["año"]} - {$categoria["nombre"]}</small></h1>

  <ul>
    <li>
      {foreach from=$serie['imagenes'] key=index item=imagen}
      <img src="{$imagen['path']}" alt="Serie{$serie['nombre']}"  class="img-thumbnail">
      {/foreach}

      <p>{$serie["noticia"]}</p>
      <a href="{$serie['link']}">Link de descarga</a>
      

    </li>
  </ul> 
  

 <h3>Comentarios</h3>
   <div class="comentarios">
    
   </div>
    {if isset($usuario)}
     <div class="row">
      <div class="col-md-12">
          <h1>Agregar Comentario</h1>

            <form method="POST" class="agregarComentario" >
                  <input type="hidden" name="id_serie" value="{$serie["id_serie"]}" class="id_serie">
                  <input type="hidden" name="id_usuario" value="{$usuario["id_usuario"]}">
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
      {/if}
  </div>

