<?php
function paginar_ofertas($tabla, $posIni, $pag, $maxPag)
{
	$bd=Db::getInstance();
	
	// Realizar una consulta MySQL
	$query ="SELECT * FROM . $tabla . LIMIT $posIni,".PROXPAG;
	
	$rs= $bd -> Consulta($query);
	
	echo "<table>";
	while($reg=$bd->LeeRegistro($rs)){
	?>
		<tr><td><?=$line['nombre']?></td></tr>
			<?php 
	}	
	echo "</table>"
	?>
	<P>
	<?php if ($pag>1): ?>
		<a href="?pag=<?=$pag-1?>">Anterior</a>
	<?php endif; ?>
	<?php if ($pag<$maxPag-1) :?> 
		<a href="?pag=<?=$pag+1?>">Siguiente</a>
	<?php endif;?>
		</P>
</body>
</html>
<?php 
}

function Nregistros($tabla)
{
	$bd=Db::getInstance();
	
	$query = "SELECT count(cod) as total FROM ". $tabla .";";
	
	$rs= $bd -> Consulta($query);
	
	$reg=$bd->LeeRegistro($rs);	

	return $reg;
}