 <h3 class="bg-success">Modificar oferta</h3>
 
 <form action="" method="post">
	<div class="form-group row">
	  <label for="example-text-input" class="col-xs-2 col-form-label">Descripción:</label>
      <div class="col-xs-10"> <input type="text" name="descripcion" value="<?=$anterior_oferta[0]['descripcion']?>" /></input>
      </div>
     </div>
      
	<div class="form-group row">
	  <label for="example-text-input" class="col-xs-2 col-form-label">Persona de contacto:</label>
      <div class="col-xs-10"> <input type="text" name="persona_contacto" value="<?=$anterior_oferta[0]['contacto']?>" /></input>
      </div>
    </div>
     
	<div class="form-group row">
	  <label for="example-text-input" class="col-xs-2 col-form-label">Teléfono de contacto:</label>
      <div class="col-xs-10"><input type="text" name="tlf_contacto" value="<?=$anterior_oferta[0]['telefono']?>" /></input>
      </div>
    </div>
     
	<div class="form-group row">
	  <label for="example-text-input" class="col-xs-2 col-form-label">Correo electrónico:</label>
      <div class="col-xs-10"> <input type="text" name="email" value="<?=$anterior_oferta[0]['correo']?>" /></input>
      </div>
    </div>
    
    
	<div class="form-group row">
	  <label for="example-text-input" class="col-xs-2 col-form-label">Dirección:</label>
      <div class="col-xs-10"><input type="text" name="direccion" value="<?=$anterior_oferta[0]['direccion']?>" /></input>
      </div>
    </div>
    
	<div class="form-group row">
	  <label for="example-text-input" class="col-xs-2 col-form-label">Población:</label>
      <div class="col-xs-10"><input type="text" name="poblacion" value="<?=$anterior_oferta[0]['poblacion']?>" /></input>
      </div>
    </div>
     
	<div class="form-group row">
	  <label for="example-text-input" class="col-xs-2 col-form-label">Código postal:</label>
      <div class="col-xs-10"><input type="text" name="codigo_postal" value="<?=$anterior_oferta[0]['cp']?>" /></input>
      </div>
    </div>    	
 
	<div class="form-group row">
	  <label for="example-text-input" class="col-xs-2 col-form-label">Estado:</label>
	   <div class="col-xs-10">
	    <input type="radio" name="estado" value="P" <?php if (RecuperarEstado($anterior_oferta) == "P"){ echo 'checked'; }?>> Pendiente<br>
  		<input type="radio" name="estado" value="R" <?php if (RecuperarEstado($anterior_oferta) == "R"){ echo 'checked'; }?>> Realizando <br>
  		<input type="radio" name="estado" value="S" <?php if (RecuperarEstado($anterior_oferta) == "S"){ echo 'checked'; }?>> Seleccionando <br>
  		<input type="radio" name="estado" value="C" <?php if (RecuperarEstado($anterior_oferta) == "C"){ echo 'checked'; }?>> Cancelada <br>
	  </div>	
	</div>	
	
	<div class="form-group row">
	  <label for="example-text-input" class="col-xs-2 col-form-label">Fecha creación:</label>
      <div class="col-xs-10"><input type="text" readonly name="fecha_creacion" value="<?=$anterior_oferta[0]['fecha_creacion']?>"/></input>
      </div>
    </div> 
       
  	<div class="form-group row">
	  <label for="example-text-input" class="col-xs-2 col-form-label">Fecha comunicación:</label>
      <div class="col-xs-10"><input type="text" name="fecha_comunicacion" value="<?=VP('fecha_comunicacion')?>" /></input>
      </div>
    </div>     
	
	<div class="form-group row">
	  <label for="example-text-input" class="col-xs-2 col-form-label">Psicólogo encargado:</label>
      <div class="col-xs-10"> <input type="text" name="fecha_comunicacion" value="<?=$anterior_oferta[0]['fecha_comunicacion']?>" /></input>
      </div>
    </div>    
    
	<div class="form-group row">
	  <label for="example-text-input" class="col-xs-2 col-form-label">Candidato seleccionado:</label>
      <div class="col-xs-10"><input type="text" name="candidato" value="<?=$anterior_oferta[0]['candidato']?>" /></input>
      </div>
    </div>    
	
	<div class="form-group row">
	  <label for="example-text-input" class="col-xs-2 col-form-label">Otros datos del candidato:</label>
      <div class="col-xs-10"><input type="text" name="datos_candidato" value="<?=$anterior_oferta[0]['otros_candidato']?>" /></input>
      </div>
    </div>  
    
    <div class="form-group row">
	  <label for="example-text-input" class="col-xs-2 col-form-label">Provincia:</label>
      <div class="col-xs-10"><?=CreaSelect('tbl_provincias', $registros, $valorDefecto=$anterior_oferta[0]['provincia'])?>
      </div>
    </div>    
    
    <input class="btn btn-success"  name="enviar" TYPE="submit" VALUE="validar">
</form>
