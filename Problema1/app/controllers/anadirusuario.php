<?php

include_once (CTRL_PATH.'functions.php');

include_once (MODEL_PATH.'funcionesinicio.php');

include_once (MODEL_PATH.'classdb.php');

include_once (MODEL_PATH.'funcionesusuario.php');

if (! $_POST)
{
	include_once (VIEW_PATH.'anadirusuarioform.php');
}

else
{
	if (Errores() || Repeticion())
	{			
		include_once(VIEW_PATH.'anadirusuarioform.php');		
	}
	else
	{
		$usuario = array (
				"username" => $_POST["nombre"],
				"contraseña" => $_POST["contraseña"],
				"tipo" => $_POST["tipo"]
				);
		
		AñadirUsuario($usuario);
		
		include_once (CTRL_PATH.'listarusuarios.php');
	}	
}