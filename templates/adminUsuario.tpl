
<h1>Listado de Usuarios</h1>
<ul>
  {foreach from=$usuarios item=usuario}
  <li>{$usuario["nombre"]}
  	{if $usuario["administrador"]==1}(Admin){/if} <a href="index.php?action=actualizar_permisos&id_usuario={$usuario["id_usuario"]}"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a></li> 
  {/foreach}
<!--HACER BOTON PARA ASIGNAR O QUITAR PERMISO DE ADMIN-->

</ul>