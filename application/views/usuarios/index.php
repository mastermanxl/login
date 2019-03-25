	<h2>Modúlo Usuarios</h2>
        <p class="lead">
		
		</p>



<?php // print_r($qempledos); ?>



<table class="table table-hover">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Email</th>
		<th>Opciones</th>
      </tr>
    </thead>
    <tbody>
	
	<?php	
	
		foreach ($qempledos as $valor) { ?>
	
	   <tr>
			<td><?php echo $valor->id; ?> </td>
			<td><?php echo $valor->nombre; ?></td>
			<td><?php echo $valor->email; ?></td>
			
			<td><a href="<?php echo base_url('usuarios/elimina/'); ?><?php echo $valor->id; ?>"><i class="fas fa-trash"></i> </a> 
				<a href="<?php echo base_url('usuarios/editar/'); ?><?php echo $valor->id; ?>"><i class="fas fa-edit"></i> </a>
			</td>
       </tr>
	
		
	<?php
		}	
	?>
	
	  
    </tbody>
  </table>
  
  
  
  
  
  
  


 
 <div class="container mx-auto  ">
 <form method="POST" action="<?php echo base_url("usuarios/insert"); ?>" >
 			
			<div class="row">
              <div class="col-md-6 mb-3">
                <label for="cc-name">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="" required>
                <small class="text-muted">Tu nombre completo</small>
                <div class="invalid-feedback">
                  Campo requerido
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="cc-number">Email</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="" required>
                <div class="invalid-feedback">
                  Campo requerido
                </div>
              </div>
            </div>
			
            
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
				
				
              
            </div>
			
            
            <hr class="mb-4">
            <button class="btn btn-primary btn-lg float-right" type="submit">Guardar</button>
          </form>  
		  
</div>		  