 <form action="" method="post">
	<p> Descripción: <input type="text" name="descripcion" value="<?=VP('descripcion')?>" /></p>
	<p> Persona de contacto: <input type="text" name="persona_contacto" value="<?=VP('persona_contacto')?>" /></p>
	<p> Teléfono de contacto: <input type="text" name="tlf_contacto" value="<?=VP('tlf_contacto')?>" /></p>
	<p> Correo electrónico: <input type="text" name="email" value="<?=VP('email')?>" /></p>
	<p> Dirección: <input type="text" name="direccion" value="<?=VP('direccion')?>" /></p>
	<p> Población: <input type="text" name="poblacion" value="<?=VP('poblacion')?>" /></p>
	<p> Código postal: <input type="text" name="codigo_postal" value="<?=VP('codigo_postal')?>" /></p>	
	<p> Estado:  <br>
	<input type="radio" name="estado" value="P"> Pendiente<br>
  	<input type="radio" name="estado" value="R"> Realizando <br>
  	<input type="radio" name="estado" value="S"> Seleccionando <br>
  	<input type="radio" name="estado" value="C"> Cancelada <br></p>
  	<p> Fecha creación: <input type="text" readonly name="fecha_creacion"/ value="<?= FechaActual()?>">
	<p> Fecha comunicación: <input type="text" name="fecha_comunicacion" value="<?=VP('fecha_comunicacion')?>" /></p>
	<p> Psicólogo encargado: <input type="text" name="psicologo" value="<?=VP('psicologo')?>" /></p>
	<p> Candidato seleccionado: <input type="text" name="candidato" value="<?=VP('candidato')?>" /></p>
	<p> Otros datos del candidato: <input type="text" name="datos_candidato" value="<?=VP('datos_candidato')?>" /></p>
	<p> Provincia: <?=CreaSelect('tbl_provincias', $registros, $valorDefecto="")?>
	<input name="enviar" TYPE="submit" VALUE="validar">
</form>