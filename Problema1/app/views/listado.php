<?php
/**
 * VISTA QUE MUESTA LA LISTA DE TAREAS.
 * El controlador será el que nos proporcine en la variable $tareas
 * que contiene las tareas a mostrar
 */
?>
<h1>Listado de tareas</h1>
<table>
    <tr>
        <td>Cod |</td>
        <td>Fecha |</td>
        <td>Estado |</td>
        <td></td>
    </tr>
<?php foreach($tareas as $tarea) : ?>
    <tr>
        <td><?=$tarea['cod']?></td>
        <td><?=$tarea['fecha_comunicacion']?></td>
        <td><?=$tarea['estado']?></td>
        <td>
            <a href="?controllers=modificar&cod=<?=$tarea['cod']?>">[Modificar]</a> 
            <a href="?controllers=del&cod=<?=$tarea['cod']?>">[Borrar]</a>
        </td>
    </tr>
<?php endforeach; ?>
</table>