<h1>Aquí usted puede crear nuevos usuarios</h1>

<form action="" method="post">
<br>
<br>
	<p> Tipo de usuario:  <br>
	<input type="radio" name="tipo" value="admin"> Administrador <br>
  	<input type="radio" name="tipo" value="psicologo"> Psicologo <br>  	
  	<p> Nombre: <input type="text" name="nombre" value="<?=VP('nombre')?>" /></p>  	
  	<p> Contraseña: <input type="password" name="contraseña" value="<?=VP('contraseña')?>" /></p>
  	<input name="enviar" TYPE="submit" VALUE="validar">
</form>