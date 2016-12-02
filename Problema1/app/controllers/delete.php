<?php

include_once(MODEL_PATH.'classdb.php');

$tabla = 'ofertas';

include_once(MODEL_PATH.'funcionesbase.php');

$columnas = RecogerElemento($_GET['cod']);

include_once(VIEW_PATH.'borrado.php');


