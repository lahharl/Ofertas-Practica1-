<h1>Utilice el botón "Borrar" si desea confirmar el borrado del usuario</h1>
<br>
<table class="table table-hover" border="1">
    <tr>
        <td><dt> Cod </dt></td>
        <td><dt> Nombre </dt></td>
        <td><dt> Contraseña </dt></td>
        <td><dt> Tipo </dt> </td>
    </tr>
<?php foreach($columnas as $columna) : ?>
    <tr>
        <td><?=$columna['cod']?></td>
        <td><?=$columna['username']?></td>
        <td><?=$columna['contraseña']?></td>
        <td><?=$columna['tipo']?></td>      
     </tr> 		     	
	<?php endforeach; ?>
</table>

<div class="pull-left">
	<a href="?controllers=resolver_borradousuarios&cod=<?=$columna['cod']?>"><input class="btn btn-danger" type="submit" value="Borrar"></a>
</div>

<div class="pull-right"> 
<a href="?controllers=listarusuarios"><input class="btn btn-info" type="submit" value="Volver"></a> 
</div>