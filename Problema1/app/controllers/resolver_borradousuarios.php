<?php
include_once(MODEL_PATH.'classdb.php');

$tabla = 'usuarios';

include_once(MODEL_PATH.'funcionesusuario.php');

EliminarUsuario($tabla, $_GET['cod']);

include_once CTRL_PATH.'listarusuarios.php';
	