<div class="container">
	<div class="col-md-6">
		<div class="panel panel-primary">
	      	<div class="panel-heading">
	       		<h3 class="panel-title">Actualizar consejero</h3>
	      	</div>
	      	<div class="panel-body">
	        	<form role="form" action="backend/consejeros/actualizar-consejero" method="POST">
		        	<input type="hidden" name="counselor_id" value="<?php echo $counselor['id']; ?>"/>
					<div class="form-group">
				    	<label for="exampleInputEmail1">Nombre</label>
				    	<?php if(!empty(set_value('name'))): ?>
							<input type="text" class="form-control" name="name" placeholder="Nombre" value="<?php echo set_value('name'); ?>"/>
						<?php else: ?>
							<input type="text" class="form-control" name="name" placeholder="Nombre" value="<?php echo $counselor['name']; ?>"/>
				    	<?php endif; ?>
				    	<?php echo form_error('name'); ?>
				  	</div>
				  	<div class="form-group">
				    	<label for="exampleInputPassword1">Apellido</label>
				    	<?php if(!empty(set_value('lastname'))): ?>
							<input type="text" class="form-control" name="lastname" placeholder="Apellido" value="<?php echo set_value('lastname'); ?>"/>
						<?php else: ?>
							<input type="text" class="form-control" name="lastname" placeholder="Apellido" value="<?php echo $counselor['lastname']; ?>"/>
				    	<?php endif; ?>
				    	<?php echo form_error('lastname'); ?>
				  	</div>
				  	<div class="form-group">
				  		<label for="exampleInputEmail1">Tipo de consejero</label>
				  		<select name="counselor_type_id" id="" class="form-control">
				  			<option value="">Seleccione</option>
				  			<?php foreach($counselor as $key => $value): ?>
				  				<?php if($value['id'] == $counselor['counselor_type']): ?>
									<option value="<?php echo $value['id']; ?>" selected> <?php echo $value['name']; ?></option>
								<?php else: ?>
									<option value="<?php echo $value['id']; ?>"> <?php echo $value['name']; ?></option>
				  				<?php endif; ?>
				    		<?php endforeach; ?>
				    	</select>
				  	</div>
				   	<button type="submit" class="btn btn-default">Actualizar consejero</button>
				</form>
      		</div>
	    </div>
	</div>
</div>
