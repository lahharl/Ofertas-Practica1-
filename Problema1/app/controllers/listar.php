<?php
/* Muesta la lista de tareas */
include_once(CTRL_PATH.'functions.php');

include_once(MODEL_PATH.'classdb.php');

$tabla = 'ofertas';

include_once(MODEL_PATH.'funcionesbase.php');

$tareas = RecogerOfertas($tabla);

include_once(VIEW_PATH.'listado.php');

include_once (MODEL_PATH.'paginacion_ofertas.php');

define ('PROXPAG', 10);

if (isset($_GET['pag']))
{
	$pag=$_GET['pag'];
}
else
{
	$pag=1;

	$tot_registros = NRegistros($tabla);	
	
	$maxPag=((int) ($tot_registros['total']-1)/PROXPAG)+1;
	
	if ($pag<1 || $pag>$maxPag)
	{
		$pag=1;
	}
	
	$posIni=(($pag-1)*PROXPAG)+1;
	
	paginar_ofertas($tabla, $posIni, $pag, $maxPag);

}