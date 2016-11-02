<form action="" method="post">
	<p> Descripción: <input type="text" name="descripcion" value="" /></p>
	<p> Persona de contacto: <input type="text" name="persona_contacto" value="" /></p>
	<p> Teléfono de contacto: <input type="text" name="tlf_contacto" value="" /></p>
	<p> Correo electrónico: <input type="text" name="email" value="" /></p>
	<p> Dirección: <input type="text" name="direccion" value="" /></p>
	<p> Población: <input type="text" name="poblacion" value="" /></p>
	<p> Código postal: <input type="text" name="codigo_postal" value="" /></p>	
	<p> Estado:  <br>
	<input type="radio" name="estado" value="P"> Pendiente<br>
  	<input type="radio" name="estado" value="R"> Realizando <br>
  	<input type="radio" name="estado" value="S"> Seleccionando <br>
  	<input type="radio" name="estado" value="C"> Cancelada <br></p>
  	<p> Fecha creación: <input type="text" readonly name="fecha_creacion"/ value="<?= FechaActual()?>">
	<p> Fecha comunicación: <input type="text" name="fecha_comunicacion" value="" /></p>
	<p> Psicólogo encargado: <input type="text" name="psicologo" value="" /></p>
	<p> Candidato seleccionado: <input type="text" name="candidato" value="" /></p>
	<p> Otros datos del candidato: <input type="text" name="datos_candidato" value="" /></p>
	<p> Provincia: <?=CreaSelect('tbl_provincias', $registros, $valorDefecto="")?>
	<input name="enviar" TYPE="submit" VALUE="validar">
</form>