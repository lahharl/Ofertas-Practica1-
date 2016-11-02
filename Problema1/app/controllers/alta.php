<?php

include_once __DIR__.'/functions.php';

include_once __DIR__.'/../models/funcionesbase.php';

include_once __DIR__.'/../models/classdb.php';

$registros = provincias();


if (! $_POST)
{
	include __DIR__.'/../views/altaform.php';
}

else	
{		
	if (erroresform())
	{
		include __DIR__.'/../views/altaform.php';
	}
	
	else 
	{
		$oferta = array (
				"descripcion" => $_POST["descripcion"],
				"contacto" => $_POST["persona_contacto"],
				"telefono" => $_POST["tlf_contacto"],
				"correo" => $_POST["email"],
				"direccion" => $_POST["direccion"],
				"poblacion" => $_POST["poblacion"],
				"cp" => $_POST["codigo_postal"],
				"provincia" => $_POST["tbl_provincias"],
				"estado" => $_POST["estado"],
				"fecha_creacion" => $_POST["fecha_creacion"],
				"fecha_comunicacion" => $_POST["fecha_comunicacion"],
				"psicologo" => $_POST["psicologo"],
				"candidato" => $_POST["candidato"],
				"otros_candidato" => $_POST["datos_candidato"],
		);
		print_r ($oferta);
		
		AñadirOferta($oferta);
	}
}
	









/*
include '../models/ofertas';*/