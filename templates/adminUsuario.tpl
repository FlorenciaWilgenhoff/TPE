
<h1>Listado de Usuarios</h1>
<ul>
  {foreach from=$usuarios item=usuario}
  <li>{$usuario["nombre"]}
  	{if $usuario["administrador"]==1}(Admin){/if}

<a data-id="{$usuario["id_usuario"]}" class="actualizarPermisos" href="index.php?action=actualizar_permisos&id_usuario={$usuario["id_usuario"]}"><span class="glyphicon glyphicon-record" aria-hidden="true"></span></a>

  	 </li> 
  {/foreach}


</ul>