 <h3 class="bg-success">Nueva oferta</h3>
 
 <form action="" method="post">
	<div class="form-group row">
	  <label for="example-text-input" class="col-xs-2 col-form-label">Descripción:</label>
      <div class="col-xs-10"> <input type="text" name="descripcion" value="<?=VP('descripcion')?>"></input>
      </div>
     </div>
      
	<div class="form-group row">
	  <label for="example-text-input" class="col-xs-2 col-form-label">Persona de contacto:</label>
      <div class="col-xs-10"> <input type="text" name="persona_contacto" value="<?=VP('persona_contacto')?>"></input>
      </div>
    </div>
     
	<div class="form-group row">
	  <label for="example-text-input" class="col-xs-2 col-form-label">Teléfono de contacto:</label>
      <div class="col-xs-10"><input type="text" name="tlf_contacto" value="<?=VP('tlf_contacto')?>"></input>
      </div>
    </div>
     
	<div class="form-group row">
	  <label for="example-text-input" class="col-xs-2 col-form-label">Correo electrónico:</label>
      <div class="col-xs-10"> <input type="text" name="email" value="<?=VP('email')?>"></input>
      </div>
    </div>
    
    
	<div class="form-group row">
	  <label for="example-text-input" class="col-xs-2 col-form-label">Dirección:</label>
      <div class="col-xs-10"><input type="text" name="direccion" value="<?=VP('direccion')?>"></input>
      </div>
    </div>
    
	<div class="form-group row">
	  <label for="example-text-input" class="col-xs-2 col-form-label">Población:</label>
      <div class="col-xs-10"><input type="text" name="poblacion" value="<?=VP('poblacion')?>"></input>
      </div>
    </div>
     
	<div class="form-group row">
	  <label for="example-text-input" class="col-xs-2 col-form-label">Código postal:</label>
      <div class="col-xs-10"><input type="text" name="codigo_postal" value="<?=VP('codigo_postal')?>" /></input>
      </div>
    </div>    	
 
	<div class="form-group row">
	  <label for="example-text-input" class="col-xs-2 col-form-label">Estado:</label>
	   <div class="col-xs-10">
	    <input type="radio" name="estado" value="P"> Pendiente<br>
  		<input type="radio" name="estado" value="R"> Realizando <br>
  		<input type="radio" name="estado" value="S"> Seleccionando <br>
  		<input type="radio" name="estado" value="C"> Cancelada <br>
	  </div>	
	</div>	
	
	<div class="form-group row">
	  <label for="example-text-input" class="col-xs-2 col-form-label">Fecha creación:</label>
      <div class="col-xs-10"><input type="text" readonly name="codigo_postal" value="<?=FechaActual()?>" /></input>
      </div>
    </div> 
       
  	<div class="form-group row">
	  <label for="example-text-input" class="col-xs-2 col-form-label">Fecha comunicación:</label>
      <div class="col-xs-10"><input type="text" name="fecha_comunicacion" value="<?=VP('fecha_comunicacion')?>" /></input>
      </div>
    </div>     
	
	<div class="form-group row">
	  <label for="example-text-input" class="col-xs-2 col-form-label">Psicólogo encargado:</label>
      <div class="col-xs-10"><input type="text" name="psicologo" value="<?=VP('psicologo')?>" /></input>
      </div>
    </div>    
    
	<div class="form-group row">
	  <label for="example-text-input" class="col-xs-2 col-form-label">Candidato seleccionado:</label>
      <div class="col-xs-10"><input type="text" name="candidato" value="<?=VP('candidato')?>" /></input>
      </div>
    </div>    
	
	<div class="form-group row">
	  <label for="example-text-input" class="col-xs-2 col-form-label">Otros datos del candidato:</label>
      <div class="col-xs-10"><input type="text" name="datos_candidato" value="<?=VP('datos_candidato')?>" /></input>
      </div>
    </div>  
    
    <div class="form-group row">
	  <label for="example-text-input" class="col-xs-2 col-form-label">Provincia:</label>
      <div class="col-xs-10"><?=CreaSelect('tbl_provincias', $registros, $valorDefecto="")?>
      </div>
    </div>    
    
    <input class="btn btn-success"  name="enviar" TYPE="submit" VALUE="validar">
</form>