<?php

/*Incluimos el fichero de la clase*/

/*require 'classdb.php';*/

function RecuperarEstado($array)
{
	if ($array[0]['estado'] == "P")
	{
		return "P";
	}
	else 
	{
		if ($array[0]['estado'] == "R")
		{
			return "R";
		}
		else 
		{
			if ($array[0]['estado'] == "S")
			{
				return "S";
			}
			else
			{
				if ($array[0]['estado'] == "C")
				{
					return "C";
				}
			}
		}
	}
}

function RecuperarValores($cod, $tabla)
{
	$bd=Db::getInstance();
	
	$sql = "SELECT * FROM " . $tabla . " WHERE cod=" . $cod . ";";	
	
	$rs= $bd -> Consulta($sql);
	
	$tabla=[];
	
	while($reg=$bd->LeeRegistro($rs)) 
	{
		//print_r($reg);
		$tabla[]=$reg;
	}	
	return $tabla;
}

function AñadirOferta ($tarea)
{
	$bd=Db::getInstance();
	
	$bd -> Insertar('ofertas', $tarea);
}

function ModificarOferta ($tarea, $cod)
{
	$bd=Db::getInstance();
	
	$bd -> Modificar('ofertas', $tarea, $cod);
}

function EliminarOferta ($tarea, $cod)
{
	$bd=Db::getInstance();
	
	$bd -> Eliminar('ofertas', $cod);
}

function RecogerOfertas ($tabla)
{
	$bd=Db::getInstance();
	
	$sql = "SELECT * FROM " . $tabla . " ORDER by cod ASC";
	
	//echo "SQL: $sql";
	$rs= $bd -> Consulta($sql);
	
	$ofertas=[];
	while($reg=$bd->LeeRegistro($rs)) {
		//print_r($reg);
		$ofertas[]=$reg;
	}
	//print_r($ofertas);
	
	return $ofertas;	
}

function RecogerOferta($tabla, $cod)
{
	$bd=Db::getInstance();
	
	$sql = "SELECT * FROM " . $tabla . " WHERE cod = ". $cod .";";	
	
	$rs= $bd -> Consulta($sql);
	
	$datos=[];
	
	while($reg=$bd->LeeRegistro($rs)) {
		//print_r($reg);
		$datos[]=$reg;
	}
	
	return $datos;
}