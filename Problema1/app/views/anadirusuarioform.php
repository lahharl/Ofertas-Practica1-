 <html lang="es"> 
  <head> 
    <meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1">  
	
 </head> 
<body>

  <h3><p class="bg-success">Aquí puedes crear nuevos usuarios</p></h3>


<form action="" method="post">
	<div class="form-group row">
	  <label for="example-text-input" class="col-xs-2 col-form-label">Tipo de usuario</label>
	   <div class="col-xs-10">
	    <input type="radio" name="tipo" value="admin"> Administrador <br>
	  	<input type="radio" name="tipo" value="psicologo"> Psicologo <br>  	
	  </div>	
	</div>
	
    <div class="form-group row">
	  <label for="example-text-input" class="col-xs-1 col-form-label">Nombre:</label>
      <div class="col-xs-10">
  	     <input type="text" name="nombre"  />
  	  </div>
  	</div>
  	  
  	<div class="form-group row">
	  <label for="example-text-input" class="col-xs-1 col-form-label">Contraseña:</label>
      <div class="col-xs-10">
  	     <input type="password" name="contraseña" />
  	  </div>
  	</div>  
  	  	
  	
  	<input class="btn btn-success" name="enviar" TYPE="submit" VALUE="Validar">
</form>
</body>
</html>