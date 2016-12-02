<h1>Utilice el botón "Borrar" si desea confirmar el cierre definitivo de la oferta</h1>
<br>
<table class="table table-hover" border="1">
    <tr>
        <td><dt> Cod </dt></td>
        <td><dt> Fecha </dt></td>
        <td><dt> Estado </dt></td>
        <td><dt> Descripcion </dt></td>
        <td><dt> Persona de contacto </dt></td>
        <td><dt> Teléfono </dt></td>
        <td><dt> Email </dt></td>
    </tr>
<?php foreach($columnas as $columna) : ?>
    <tr>
        <td><?=$columna['cod']?></td>
        <td><?=$columna['fecha_comunicacion']?></td>
        <td><?=$columna['estado']?></td>
        <td><?=$columna['descripcion']?></td>
        <td><?=$columna['contacto']?></td>
        <td><?=$columna['telefono']?></td>
        <td><?=$columna['correo']?></td>        
     </tr>
     	
     
	<?php endforeach; ?>
</table>
<div class="pull-left">
<a href="?controllers=resolver_borrado&cod=<?=$columna['cod']?>"><input class="btn btn-danger" type="submit" value="Borrar"></a>
</div>

<div class="pull-right">
<a href="?controllers=listar"><input class="btn btn-info" type="submit" value="Volver"></a>
</div>