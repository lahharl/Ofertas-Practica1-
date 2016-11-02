<?php

/*Incluimos el fichero de la clase*/

/*require 'classdb.php';*/


function AñadirOferta ($tarea)
{
	$bd=Db::getInstance();
	
	$bd -> Insertar('ofertas', $tarea);
}