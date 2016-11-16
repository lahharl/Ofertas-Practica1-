<?php
include_once(MODEL_PATH.'classdb.php');

$tabla = 'ofertas';

include_once(MODEL_PATH.'funcionesbase.php');

EliminarOferta($tabla, $_GET['cod']);

include_once CTRL_PATH.'listar.php';
	
