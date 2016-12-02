<?php
function AñadirUsuario ($tarea)
{
	$bd=Db::getInstance();
	
	$bd -> Insertar('usuarios', $tarea);
}

function ModificarUsuario ($tarea, $cod)
{
	$bd=Db::getInstance();

	$bd -> Modificar('usuarios', $tarea, $cod);
}

function EliminarUsuario ($tarea, $cod)
{
	$bd=Db::getInstance();

	$bd -> Eliminar('usuarios', $cod);
}

function RecuperarEstadoUsuario($array)
{
	if ($array[0]['tipo'] == "admin")
	{
		return "admin";
	}
	else
	{
		if ($array[0]['tipo'] == "psicologo")
		{
			return "psicologo";
		}		
	}
}

function RecogerUsuario($cod)
{
	$bd=Db::getInstance();

	$sql = "SELECT * FROM usuarios WHERE cod = ". $cod .";";

	$rs= $bd -> Consulta($sql);

	$datos=[];

	while($reg=$bd->LeeRegistro($rs)) {
		//print_r($reg);
		$datos[]=$reg;
	}

	return $datos;
}
