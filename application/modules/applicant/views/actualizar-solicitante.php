<div class="container">
	<div class="col-md-6">
		<div class="panel panel-primary">
	      <div class="panel-heading">
	        <h3 class="panel-title">Actualizar solicitante</h3>
	      </div>
	      <div class="panel-body">
	        <form role="form" action="backend/solicitantes/actualizar-solicitante" method="POST">
	        	<input type="hidden" name="applicant_id" value="<?php echo $applicant['id']; ?>">
				<div class="form-group">
			    	<label for="exampleInputEmail1">Nombre</label>
			    	<?php if(!empty(set_value('name'))): ?>
						<input type="text" class="form-control" name="name" placeholder="Nombre y apellido" value="<?php echo set_value('name'); ?>">
					<?php else: ?>
						<input type="text" class="form-control" name="name" placeholder="Nombre y apellido" value="<?php echo $applicant['name']; ?>">
			    	<?php endif; ?>
			    	<?php echo form_error('name'); ?>
			  	</div>
			  	<div class="form-group">
			    	<label for="exampleInputPassword1">Cedula</label>
			    	<?php if(!empty(set_value('cedula'))): ?>
						<input type="text" class="form-control" name="name" placeholder="Cedula" value="<?php echo set_value('cedula'); ?>">
					<?php else: ?>
						<input type="cedula" class="form-control" name="cedula" placeholder="Cedula" value="<?php echo $applicant['cedula']; ?>">
			    	<?php endif; ?>
			    	<?php echo form_error('cedula'); ?>
			  	</div>
			   	<div class="form-group">
			    	<label for="exampleInputPassword1">Correo electronico</label>
			    	<?php if(!empty(set_value('email'))): ?>
						<input type="email" class="form-control" name="email" placeholder="Correo electrónico" value="<?php echo set_value('email'); ?>">
					<?php else: ?>
						<input type="email" class="form-control" name="email" placeholder="Cedula" value="<?php echo $applicant['email']; ?>">
			    	<?php endif; ?>
			    	<?php echo form_error('email'); ?>
			  	</div>
			  	<div class="form-group">
			    	<label for="exampleInputPassword1">Contraseña</label>
			    	<input type="password" class="form-control" name="password" placeholder="Cotraseña">
			    	<?php echo form_error('password'); ?>
			  	</div>
			  	<div class="form-group">
			    	<label for="exampleInputPassword1">Repita la contraseña</label>
			    	<input type="password" class="form-control" name="repassword" placeholder="Repita la contraseña">
			  		<?php echo form_error('repassword'); ?>
			  	</div>
			  	<button type="submit" class="btn btn-default">Actualizar solicitante</button>
			</form>
	      </div>
	    </div>
	</div>
</div>
