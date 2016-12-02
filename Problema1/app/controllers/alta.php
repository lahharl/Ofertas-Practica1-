<?php

include_once (CTRL_PATH.'functions.php');

include_once (MODEL_PATH.'funcionesbase.php');

include_once (MODEL_PATH.'classdb.php');

$registros = provincias();

if (! $_POST)
{
	include (VIEW_PATH.'altaform.php');
}

else	
{		
	
	$hayError = erroresform();
	
	if ($hayError)
	{			
		include_once (VIEW_PATH.'altaform.php');
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
		
		AñadirOferta($oferta);
		
		include_once (CTRL_PATH.'listar.php');
	}
}
	