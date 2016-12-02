<?php
/* Muesta la lista de tareas */
include_once(CTRL_PATH.'functions.php');

include_once(MODEL_PATH.'classdb.php');

$tabla = 'usuarios';

include_once(MODEL_PATH.'funcionesbase.php');

include_once (CTRL_PATH.'funcionespaginacion.php');

$url = '?controllers=listarusuarios&';

define ('PROXPAG', 10);


if (isset($_GET['pag']))
	$pag=$_GET['pag'];
else
	$pag=1;

$maxpag=ceil((int) (NRegistros($tabla)-1)/PROXPAG);

if ($pag<1 || $pag>$maxpag)
	$pag=1;

$posIni=(($pag-1)*PROXPAG);

$tareas = RegistrosPagina($tabla, $posIni, PROXPAG);

include_once (VIEW_PATH.'listadousuarios.php');