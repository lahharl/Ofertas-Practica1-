<?php

include_once (MODEL_PATH.'funcionesinicio.php');

include_once (MODEL_PATH.'funcionesusuario.php');

include_once (MODEL_PATH.'funcionesbase.php');

include_once (MODEL_PATH.'classdb.php');

$tabla = 'usuarios';

$anterior_usuario = RecuperarValores($_GET['cod'], $tabla);

if (! $_POST)
{	
	include (VIEW_PATH.'modificarusuariosform.php');
}

else	
{		
	
	if (Errores() || Repeticion())
	{			
		include (VIEW_PATH.'modificarusuariosform.php');
	}
	
	else 
	{
		$usuario = array (
				"username" => $_POST["nombre"],
				"contraseña" => $_POST["contraseña"],
				"tipo" => $_POST["tipo"]
				);
		
		
		ModificarUsuario($usuario, $_GET['cod']);
		
		include_once (CTRL_PATH.'listarusuarios.php');
	}
}