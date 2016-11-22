<?php
function AñadirUsuario ($tarea)
{
	$bd=Db::getInstance();
	
	$bd -> Insertar('usuarios', $tarea);
}
