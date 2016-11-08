<?php

/*Incluimos el fichero de la clase*/

/*require 'classdb.php';*/


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

function RecogerOfertas ($tabla)
{
	$bd=Db::getInstance();
	
	$sql = "SELECT cod, fecha_comunicacion, estado FROM " . $tabla . " ORDER by cod ASC";
	
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