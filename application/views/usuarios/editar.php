	<h2>Modúlo Usuarios</h2>
        <p class="lead">
		<?php foreach ($userdata as $value) { ?>
			Editar Usuario <b><?php  echo $value->email; ?></b>
		</p>


 

  <?php 
  //print_r($userdata);
  ?>


 
 <div class="container mx-auto  ">
 <form method="POST" action="<?php echo base_url("usuarios/update"); ?>" >
 			
			
			
			
			<input type="hidden" name="reference" value="<?php  echo $value->id; ?>"
			
			
			
			  <div class="form-group">
				<label for="exampleInputEmail1">Nombre</label>
				  
                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="" value="<?php  echo $value->nombre; ?>" required>
                <small class="text-muted">Tu nombre completo</small>
                <div class="invalid-feedback">
                  Campo requerido
                </div>
			  </div>
			
			
			<div class="row">
			
			
			
              <div class="col-md-6 mb-3">
              
              </div>
              
            </div>
			
            <!--
			<div class="row">
              <div class="col-md-6 mb-3">
                <label for="cc-name">Clave</label>
                <input type="text" class="form-control" id="clave" name="clave" placeholder="" required>
                <small class="text-muted">Tu contraseña</small>
                <div class="invalid-feedback">
                  Campo requerido
                </div>
			  </div>
			  
			  <div class="col-md-6 mb-3">
                <label for="cc-name">Repite Clave</label>
                <input type="text" class="form-control" id="clave2" name="clave2" placeholder="" required>
                <small class="text-muted">Tu contraseña</small>
                <div class="invalid-feedback">
                  Campo requerido
                </div>
			  </div>	
				-->
				
              
            </div>
			
            <?php } //End foreach ?>
			
            <hr class="mb-4">
            <button class="btn btn-primary btn-lg float-right" type="submit">Guardar</button>
          </form>  
		  
</div>		  