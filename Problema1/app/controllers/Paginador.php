<?php
define ('PROXPAG', 10);

if (isset($_GET['pag']))
	$pag=$_GET['pag'];
else
	$pag=1;

$maxPag=((int) (NRegistros($tabla)-1)/PROXPAG)+1;

if ($pag<1 || $pag>$maxPag)
	$pag=1;

$posIni=(($pag-1)*PROXPAG)+1;

$tareas = RegistrosPagina($tabla, $posIni, PROXPAG);

include_once (VIEW_PATH.'listado.php');