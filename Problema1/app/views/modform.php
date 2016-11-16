 <form action="" method="post">
	<p> Descripción: <input type="text" name="descripcion" value="<?=$anterior_oferta[0]['descripcion']?>" /></p>
	<p> Persona de contacto: <input type="text" name="persona_contacto" value="<?=$anterior_oferta[0]['contacto']?>" /></p>
	<p> Teléfono de contacto: <input type="text" name="tlf_contacto" value="<?=$anterior_oferta[0]['telefono']?>" /></p>
	<p> Correo electrónico: <input type="text" name="email" value="<?=$anterior_oferta[0]['correo']?>" /></p>
	<p> Dirección: <input type="text" name="direccion" value="<?=$anterior_oferta[0]['direccion']?>" /></p>
	<p> Población: <input type="text" name="poblacion" value="<?=$anterior_oferta[0]['poblacion']?>" /></p>
	<p> Código postal: <input type="text" name="codigo_postal" value="<?=$anterior_oferta[0]['cp']?>" /></p>	
	<p> Estado:  <br>
	<input type="radio" name="estado" value="P" <?php if (RecuperarEstado($anterior_oferta) == "P"){ echo 'checked'; }?>> Pendiente<br>
  	<input type="radio" name="estado" value="R" <?php if (RecuperarEstado($anterior_oferta) == "R"){ echo 'checked'; }?>> Realizando <br>
  	<input type="radio" name="estado" value="S" <?php if (RecuperarEstado($anterior_oferta) == "S"){ echo 'checked'; }?>> Seleccionando <br>
  	<input type="radio" name="estado" value="C" <?php if (RecuperarEstado($anterior_oferta) == "C"){ echo 'checked'; }?>> Cancelada <br></p>
  	<p> Fecha creación: <input type="text" readonly name="fecha_creacion" value="<?=$anterior_oferta[0]['fecha_creacion']?>"/></p>
	<p> Fecha comunicación: <input type="text" name="fecha_comunicacion" value="<?=$anterior_oferta[0]['fecha_comunicacion']?>" /></p>
	<p> Psicólogo encargado: <input type="text" name="psicologo" value="<?=$anterior_oferta[0]['psicologo']?>" /></p>
	<p> Candidato seleccionado: <input type="text" name="candidato" value="<?=$anterior_oferta[0]['candidato']?>" /></p>
	<p> Otros datos del candidato: <input type="text" name="datos_candidato" value="<?=$anterior_oferta[0]['otros_candidato']?>" /></p>
	<p> Provincia: <?=CreaSelect('tbl_provincias', $registros, $valorDefecto=$anterior_oferta[0]['provincia'])?>
	<input name="enviar" TYPE="submit" VALUE="validar">
</form>