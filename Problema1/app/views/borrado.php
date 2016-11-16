<h1>Confirmar eliminar</h1>
<table>
    <tr>
        <td> Cod |</td>
        <td> Fecha |</td>
        <td> Estado |</td>
        <td> Descripcion |</td>
        <td> Persona de contacto |</td>
        <td> Teléfono |</td>
        <td> Email |</td>
        <td></td>
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
     <tr>
     	<td>
     		<a href="?controllers=resolver_borrado&cod=<?=$columna['cod']?>"><input type="submit" value="Borrar"></a> 
     		<a href="?controllers=listar"><input type="submit" value="Volver"></a> 
     	</td>     	 
     </tr> 
	<?php endforeach; ?>
</table>
