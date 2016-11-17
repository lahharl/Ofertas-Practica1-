<?php

function Nregistros($tabla)
{
	$bd=Db::getInstance();
	
	$query = "SELECT count(cod) as total FROM ". $tabla .";";
	
	/*echo $query;*/
	
	$rs= $bd -> Consulta($query);	
	
	$reg=$bd->LeeRegistro($rs);

	return $reg['total'];
}

function RegistrosPagina($tabla, $pagi, $numer_reg)
{
	$bd=Db::getInstance();
	
	$consulta = "SELECT * FROM ". $tabla ." ORDER BY cod ASC LIMIT ".$pagi."," . $numer_reg;
	
	$rs= $bd -> Consulta($consulta);
	
	$ofertas=[];
	while($reg=$bd->LeeRegistro($rs)) {
		//print_r($reg);
		$ofertas[]=$reg;
	}
	//print_r($ofertas);
	
	return $ofertas;
}

/* Pertenece a la primera ristra de funciones de paginacion
 * 
 * function RegistrosPagina($tabla, $inicio, $tamano)
{
	$bd=Db::getInstance();

	$consulta = "SELECT * FROM ". $tabla ." ORDER BY cod ASC LIMIT ".$inicio."," . $tamano;

	$rs= $bd -> Consulta($consulta);

	$reg=$bd->LeeRegistro($rs);

	return $reg;
}*/