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
		$hayError=TRUE;
		echo "<p style=\"color:red\">Error, la descripción está vacía/p>";
	}
	
	if (! preg_match($nombretrue, $_POST['persona_contacto']))
	{
		$hayError=TRUE;
		echo "<p style=\"color:red\">Error, el formato del nombre de la persona es erróneo/p>";
	}
	else
	{
		if ($_POST['persona_contacto'] == "")
		{
			$hayError=TRUE;
			echo "<p style=\"color:red\">Error, el nombre de la persona está vacío/p>";
		}
	}
	if (! preg_match ($tlftrue, $_POST['tlf_contacto']))
	{
		$hayError=TRUE;
		echo "<p style=\"color:red\">Error, el formato del número de teléfono es erróneo/p>";
	}
	else
	{
		if ($_POST['tlf_contacto'] == "")
		{
			$hayError=TRUE;
			echo "<p style=\"color:red\">Error, el número de teléfono está vacío/p>";
		}
	}
	if (! preg_match ($emailtrue, $_POST['email']))
	{
		$hayError=TRUE;
		echo "<p style=\"color:red\">Error, el formato del email es erróneo/p>";
	}
	else
	{
		if ($_POST['email'] == "")
		{
			$hayError=TRUE;
			echo "<p style=\"color:red\">Error, el email está vacío/p>";
		}
	}	
	if (! preg_match ($cptrue, $_POST['codigo_postal']))
	{
		$hayError=TRUE;
		echo "<p style=\"color:red\">Error, el formato del código postal es erróneo/p>";
	}
	else
	{
		if ($_POST['codigo_postal'] == "")
		{
			$hayError=TRUE;
			echo "<p style=\"color:red\">Error, el código postal no puede estar vacío/p>";
		}
	}	
	if ($_POST['tbl_provincias'] == "")
	{
		$hayError=TRUE;
		echo "<p style=\"color:red\">Error, el campo provincia está vacío/p>";
	}
	
	if ($_POST['estado'] == "")
	{
		$hayError=TRUE;
		echo "<p style=\"color:red\">Error, el campo estado está vacío/p>";
	}
	
	
	if (! preg_match ($nombretrue, $_POST['psicologo']))
	{
		$hayError=TRUE;
		echo "<p style=\"color:red\">Error, el campo del psicólogo encargado no tiene un formato correcto/p>";
	}
	
	if (! preg_match ($nombretrue, $_POST['candidato']))
	{
		$hayError=TRUE;
		echo "<p style=\"color:red\">Error, el campo del candidato seleccionado no tiene un formato correcto/p>";
	}	
	
	$datosfecha = explode ("/", $_POST['fecha_comunicacion']);
	
	if ($_POST['fecha_comunicacion'] == "")
	{
		$hayError=TRUE;
		echo "<p style=\"color:red\">Error, el campo fecha de comunicación está vacío/p>";
	}
		
	if ($_POST['fecha_comunicacion']< $_POST['fecha_creacion'])
	{
		$hayError=true;
		echo "<p style=\"color:red\">Error, la fecha dada es menor que la actual/p>";
	}
	
	
	if (! checkdate($datosfecha[0], $datosfecha[1], $datosfecha[2]))
	{
		$hayError=true;
		echo "<p style=\"color:red\">Error, la fecha introducida no es correcta/p>";
	}
		
}