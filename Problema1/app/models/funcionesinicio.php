<?php

function ConectarAdmin ($nombre, $tabla)
{	
	$_SESSION['nombre_usuario'] = $nombre;
	$_SESSION['horaentrada'] = date("m.d.y");
	$_SESSION['tipo'] = $_POST["tipo"];
	echo "conectado";
}

function Entrada($tabla)
{	
	$bd=Db::getInstance();
	
	$sql = "SELECT contraseña AS password FROM " . $tabla . " WHERE username='" . $_POST["nombre"] . "';";	
	
	$rs= $bd -> Consulta($sql);
	
	$reg=$bd->LeeRegistro($rs);		
	
	if ($reg["password"] == $_POST["contraseña"])
	{
		ConectarAdmin($_POST["nombre"], $tabla);
	}
}

function Errores ()
{	
	$error = 0;
	
	if ($_POST["nombre"] == "")
	{
		$errores["nombre"] = "<p style=\"color:red\">Error, el nombre está vacío";
		echo $errores["nombre"];
		
		$error = 1;
	}
	
	if ($_POST["contraseña"] == "")
	{
		$errores["contraseña"] = "<p style=\"color:red\">Error, la contraseña está vacía";
		echo $errores["contraseña"];
		
		$error = 1;
	}	
	
	if ($_POST["tipo"] == "")
	{
		$errores["tipo"] = "<p style=\"color:red\">Error, el tipo está vacío";		
		echo $errores["tipo"];
		
		$error = 1;
	}
	
	if ($error == 1)
	{
		return TRUE;
	}
}