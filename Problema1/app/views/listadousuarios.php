<?php
/**
 * VISTA QUE MUESTA LA LISTA DE USUARIOS.
 * El controlador será el que nos proporcione en la variable $tareas
 * que contiene las tareas a mostrar
 */
?>
<h2 class="bg-success">Listado de usuarios</h2>
<table class="table table-hover" border="1">
    <tr>
        <td><dt>Nombre </dt></td>
        <td><dt>Contraseña </dt></td>
        <td><dt>Tipo </dt></td>
        <td><dt>Cod </dt></td>
        <td><dt>Opciones </dt></td>
    </tr>
<?php foreach($tareas as $tarea) : ?>
    <tr>
        <td><?=$tarea['username']?></td>
        <td><?=$tarea['contraseña']?></td>
        <td><?=$tarea['tipo']?></td>
        <td><?=$tarea['cod']?></td>
        <td>
            <a href="?controllers=modificarusuarios&cod=<?=$tarea['cod']?>"><input type="submit" class="btn btn-success" value="Modificar"></a> 
            <a href="?controllers=deleteusuarios&cod=<?=$tarea['cod']?>"><input type="submit" class="btn btn-warning" value="Borrar"></a>
        </td>
    </tr>
<?php endforeach; ?>
</table>

<?php MuestraPaginador($pag, $maxpag, $url, $maxpag)?>