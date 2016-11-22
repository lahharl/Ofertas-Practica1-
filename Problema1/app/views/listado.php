<?php
/**
 * VISTA QUE MUESTA LA LISTA DE TAREAS.
 * El controlador será el que nos proporcine en la variable $tareas
 * que contiene las tareas a mostrar
 */
?>
<h1>Listado de tareas</h1>
<table border="1">
    <tr>
        <td>Cod |</td>
        <td>Fecha |</td>
        <td>Estado |</td>
        <td></td>
    </tr>
<?php foreach($tareas as $tarea) : ?>
    <tr align="center">
        <td><?=$tarea['cod']?></td>
        <td><?=$tarea['fecha_comunicacion']?></td>
        <td><?=$tarea['estado']?></td>
        <td>
            <a href="?controllers=modificar&cod=<?=$tarea['cod']?>"><input type="submit" value="Modificar"></a> 
            <a href="?controllers=delete&cod=<?=$tarea['cod']?>"><input type="submit" value="Borrar"></a>
        </td>
    </tr>
<?php endforeach; ?>
</table>

<?php MuestraPaginador($pag, $maxpag, $url, $maxpag)?>






