 <form action="" method="post">
	<p> Descripción: <input type="text" name="nombre" value="<?=$anterior_usuario[0]['username']?>" /></p>
	<p> Persona de contacto: <input type="text" name="contraseña" value="<?=$anterior_usuario[0]['contraseña']?>" /></p>	
	<input type="radio" name="tipo" value="admin" <?php if (RecuperarEstadoUsuario($anterior_usuario) == "admin"){ echo 'checked'; }?>> Admin<br>
  	<input type="radio" name="tipo" value="psicologo" <?php if (RecuperarEstadoUsuario($anterior_usuario) == "psicologo"){ echo 'checked'; }?>> Psicologo <br>
	<input name="enviar" TYPE="submit" VALUE="validar">
</form>