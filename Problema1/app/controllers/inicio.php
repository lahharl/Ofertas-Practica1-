<?php

include_once (CTRL_PATH.'functions.php');

include_once (VIEW_PATH.'inicioform.php');

include_once (MODEL_PATH.'funcionesinicio.php');

include_once (MODEL_PATH.'classdb.php');

$tabla ="usuarios";

if (! $_POST)
{
	include_once (VIEW_PATH.'inicioform.php');
}

else 
{
	if (Errores())
	{	
		include_once(VIEW_PATH.'inicioform.php');
	}
	
	else
	{
		Entrada($tabla);	
	}
}
	
	

