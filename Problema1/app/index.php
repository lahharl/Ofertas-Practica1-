<?php
/* 
 * CONTROLADOR FRONTAL 
 */

// definimos constantes que facilitan el trabajo
define('CTRL_PATH', __DIR__.'/controllers/');
define('MODEL_PATH', __DIR__.'/models/');
define('VIEW_PATH', __DIR__.'/views/');
define('TEMPLATE_PATH', __DIR__.'/plantilla/');
define('LIB_PATH', __DIR__.'/lib/');
define('HELPERS_PATH', __DIR__.'/helpers/');
define('ASSETS_PATH', __DIR__.'/../assets/css');

?>
<html>
    <head>
        <title>Controlador frontal</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>    
<body>
<?php 
include(TEMPLATE_PATH.'encabezado.php');

include(TEMPLATE_PATH.'menu.php'); 

// Cuerpo del controlador frontal
$ctrl=isset($_GET['controllers']) ? $_GET['controllers'] : 'inicio';

// Nombre del fichero a incluir
$file=CTRL_PATH.$ctrl.'.php';
if (file_exists($file))
{
    include($file);
}
else
{   // Error 404
    include(CTRL_PATH.'error404.php');
}

include(TEMPLATE_PATH.'pie.php');
?>
</body>
</html>