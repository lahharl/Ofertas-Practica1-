<?php

include_once(MODEL_PATH.'classdb.php');

$tabla = 'usuarios';

include_once(MODEL_PATH.'funcionesusuario.php');

$columnas = RecogerUsuario($_GET['cod']);

include_once(VIEW_PATH.'eliminarusuariosform.php');