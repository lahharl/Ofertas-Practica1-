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

/** Muestra un paginador para una lista de elementos
*
* @param int $pag_actual
* @param unknown $nPags
* @param unknown $url
*/
function MuestraPaginador($pag_actual, $nPags, $url, $maxpag)
{
	// Mostramos paginador
	echo '<div style="text-align=center">';
	echo EnlaceAPagina($url, 1, 'Inicio');
	echo EnlaceAPagina($url, $pag_actual-1, 'Anterior', $pag_actual>1);	
	echo EnlaceAPagina($url, $pag_actual+1, 'Siguiente', $pag_actual<$nPags);
	echo EnlaceAPagina($url, $maxpag, 'Fin');
	echo "</div>";
}

/**
 * Devuelve el texto de un enlace (etiqueta <a>) a la página $url si el enlace está activo,
 * en otro caso solo devuelve el texto
 *
 * @param string $url		URL de la página que muestra la lista
 * @param int $pag			Nº de página al cual enlazamos
 * @param string $texto		Texto del enlace
 * @param bool $activo		Se muestra enlace (true) o no (false)
 * @return string
 */
function EnlaceAPagina($url, $pag, $texto, $activo=true)
{
	if ($activo)
		return '<a href="'.$url.'pag='.$pag.'">'.$texto.'</a> ';
	else
		return $texto;
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