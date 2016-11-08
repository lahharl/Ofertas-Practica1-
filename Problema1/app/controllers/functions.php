<?php

function fechaActual ()
{
	$fecha = date("m/d/Y");
	return $fecha;
}

function loguearcorrecto()
{
	$hayError=false;
	if ($_POST['usuario'] == '') {
		$hayError=TRUE;
		echo "<p style=\"color:red\">Error, el usuario está vacío</p>";
	}
	else {
		if ($_POST['usuario'] != 'admin' || $_POST['usuario'] != 'psico') {
			$hayError=TRUE;
			echo "<p  style=\"color:red\">Error, el usuario elegido no existe</p>";
		}		
	}
	return $hayError;
}

function CreaSelect($name, $registros, $valorDefecto)
{
	$html="\n".'<select name="'.$name.'">';
	foreach($registros as $value=>$text)
	{
		if ($value==$valorDefecto)
			$select='selected="selected"';
		else
			$select="";
		$html.= "\n\t<option value=\"$value\" $select>$text</option>";
	}
	$html.="\n</select>";

	return $html;
}

function provincias()
{

	/*Creamos la instancia del objeto. Ya estamos conectados*/
	$bd=Db::getInstance();

	/*Creamos una query sencilla*/
	$sql='SELECT cod, nombre FROM tbl_provincias';

	/*Ejecutamos la query*/
	$bd->Consulta($sql);

	/*Creamos el array donde se guardaran los registros*/
	$registros = Array();

	/*Realizamos un bucle para ir obteniendo los resultados*/
	while ($reg=$bd->LeeRegistro())
	{
		$registros[$reg['cod']] = $reg['nombre'];
	}
	return $registros;
}

function erroresform()
{
	$error = 0;
	
	/*Comprobar si un nombre existe*/
	
	$nombretrue= "|^[a-zA-Z]+(\s*[a-zA-Z]*)*[a-zA-Z]+$|";
	
	/*Comprobar si un numero de telefono existe*/
	
	$tlftrue=  "/^[\d]{3}[-]*([\d]{2}[-]*){2}[\d]{2}$/";
	
	/*Comprobar si existe un email*/
	
	$emailtrue=  "/^[\w]+@{1}[\w]+\.[a-z]{2,3}$/";
	
	/*Comprobar si existe el código postal*/
	
	$cptrue=  "^[00-52]{2}[0-9]{3}$^";
	
	
	if ($_POST['descripcion'] == "")
	{		
		$errores["descripcion"] = "<p style=\"color:red\">Error, la descripción está vacía";
		echo $errores["descripcion"];
		$error = 1;
	}
	
	if (! preg_match($nombretrue, $_POST['persona_contacto']))
	{		
		$errores["persona_contacto"] = "<p style=\"color:red\">Error, el formato del nombre de la persona es erróneo";
		echo $errores["persona_contacto"];
		$error = 1;
	}
	else
	{
		if ($_POST['persona_contacto'] == "")
		{
			$errores["persona_contacto_vacio"] = "<p style=\"color:red\">Error, el nombre de la persona está vacío";
			echo $errores["persona_contacto_vacio"];
			$error = 1;
		}
	}
	if (! preg_match ($tlftrue, $_POST['tlf_contacto']))
	{
		$errores["tlf_contacto"] = "<p style=\"color:red\">Error, el formato del número de teléfono es erróneo";
		echo $errores["tlf_contacto"];
		$error = 1;
	}
	else
	{
		if ($_POST['tlf_contacto'] == "")
		{			
			$errores["tlf_contacto_vacio"] = "<p style=\"color:red\">Error, el número de teléfono está vacío";
			echo $errores["tlf_contacto_vacio"];
			$error = 1;
		}
	}
	if (! preg_match ($emailtrue, $_POST['email']))
	{		
		$errores["email"] = "<p style=\"color:red\">Error, el formato del email es erróneo";
		echo $errores["email"];
		$error = 1;
	}
	else
	{
		if ($_POST['email'] == "")
		{			
			$errores["email_vacio"] = "<p style=\"color:red\">Error, el email está vacío";
			echo $errores["email_vacio"];
			$error = 1;
		}
	}	
	if (! preg_match ($cptrue, $_POST['codigo_postal']))
	{			
		$errores["codigo_postal"] = "<p style=\"color:red\">Error, el formato del código postal es erróneo";
		echo $errores["codigo_postal"];
		$error = 1;
	}
	else
	{
		if ($_POST['codigo_postal'] == "")
		{			
			$errores["codigo_postal_vacio"] = "<p style=\"color:red\">Error, el código postal no puede estar vacío";
			echo $errores["codigo_postal_vacio"];
			$error = 1;
		}
	}	
	if ($_POST['tbl_provincias'] == "")
	{		
		$errores["tbl_provincias"] = "<p style=\"color:red\">Error, el campo provincia está vacío";
		echo $errores["tbl_provincias"];
		$error = 1;
	}
	
	if ($_POST['estado'] == "")
	{		
		$errores["estado"] = "<p style=\"color:red\">Error, el campo estado está vacío";
		echo $errores["estado"];
		$error = 1;
	}
	
	
	if (! preg_match ($nombretrue, $_POST['psicologo']))
	{		
		$errores["psicologo"] = "<p style=\"color:red\">Error, el campo del psicólogo encargado no tiene un formato correcto";
		echo $errores["psicologo"];
		$error = 1;
	}
	
	if (! preg_match ($nombretrue, $_POST['candidato']))
	{		
		$errores["candidato"] = "<p style=\"color:red\">Error, el campo del candidato seleccionado no tiene un formato correcto";
		echo $errores["candidato"];
		$error = 1;
	}	
	
	$datosfecha = explode ("/", $_POST['fecha_comunicacion']);
	
	if ($_POST['fecha_comunicacion'] == "")
	{		
		$errores["fecha_comunicacion_vacio"] =  "<p style=\"color:red\">Error, el campo fecha de comunicación está vacío";
		echo $errores["fecha_comunicacion_vacio"];
		$error = 1;
	}
		
	if ($_POST['fecha_comunicacion']< $_POST['fecha_creacion'])
	{		
		$errores["fecha_comunicacion_menor"] = "<p style=\"color:red\">Error, la fecha dada es menor que la actual";
		echo $errores["fecha_comunicacion_menor"];
		$error = 1;
	}
	
	
	if (! checkdate($datosfecha[0], $datosfecha[1], $datosfecha[2]))
	{		
		$errores["fecha_comunicacion"] = "<p style=\"color:red\">Error, la fecha introducida no es correcta";
		echo $errores["fecha_comunicacion"];
		$error = 1;
	}
	
	if ($error == 1)
	{
		return TRUE;
	}
		
}