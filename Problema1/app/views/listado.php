<?php
/**
 * VISTA QUE MUESTA LA LISTA DE TAREAS.
 * El controlador será el que nos proporcione en la variable $tareas
 * que contiene las tareas a mostrar
 */
?>
<h2 class="bg-success">Listado de tareas</h2>
<table class="table table-hover" border="1">
    <tr>
        <td><dt>Cod </dt></td>
        <td><dt>Fecha </dt></td>
        <td><dt>Estado </dt></td>
        <td><dt>Opciones </dt></td>
    </tr>
<?php foreach($tareas as $tarea) : ?>
    <tr>
        <td><?=$tarea['cod']?></td>
        <td><?=$tarea['fecha_comunicacion']?></td>
        <td><?=$tarea['estado']?></td>
        <td>
            <a href="?controllers=modificar&cod=<?=$tarea['cod']?>"><input type="submit" class="btn btn-success" value="Modificar"></a> 
            <a href="?controllers=delete&cod=<?=$tarea['cod']?>"><input type="submit"  class="btn btn-warning" value="Borrar"></a>
        </td>
    </tr>
<?php endforeach; ?>
</table>

<?php MuestraPaginador($pag, $maxpag, $url, $maxpag)?>






