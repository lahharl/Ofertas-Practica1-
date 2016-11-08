<?php
/* Muesta la lista de tareas */

include_once(MODEL_PATH.'classdb.php');

$tabla = 'ofertas';

include_once(MODEL_PATH.'funcionesbase.php');

$tareas = RecogerOfertas($tabla);

include_once(VIEW_PATH.'listado.php');