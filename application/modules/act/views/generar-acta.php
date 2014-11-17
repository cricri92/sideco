<div class="container">
	<div class="col-md-12">
		<div class="panel panel-primary">
		   	<div class="panel-heading">
		  		<h3 class="panel-title">Generar acta</h3>
		   	</div>
		    <div class="panel-body">
		    	
		    	<div class="col-md-6">
		    		<h2 class="header-title"><small>Información del acta</small></h2>
			  		<form role="form" action="backend/actas/crear-acta" method="POST">
		    			<div class="form-group">
					    	<label for="exampleInputEmail1">Hora: </label>
					    	<input type="time" class="form-control" name="time" placeholder="Hora"/>
					    	<?php echo form_error('time'); ?>
					  	</div>
					  	
					  	
						<div class="form-group">
							<label for="exampleInputEmail1">Consideración: </label>
							<textarea class="form-control ckeditor" name="consideration" id="" cols="30" rows="10"></textarea>

						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Comentario: </label>
							<textarea class="form-control ckeditor" name="comment" id="" cols="30" rows="10"></textarea>
						</div>
					  	
				</div>
				<div class="col-md-6">
					<h2 class="header-title"><small>Consejeros</small></h2>
					<div id="consejeros">
				  		<div class="consejero" class="form-group">
					    	<label for="exampleInputEmail1">Consejero Nº 1</label>
					    	<input type="text" class="form-control" class="form-control" name="consejeros[]" placeholder=""/>
					  		<label for="exampleInputEmail1">Tipo consejero Nº 1</label>
					    	<select class="form-control" name="counselor_type_id[]">
					    		<?php foreach($counselorTypes as $key => $value): ?>
									<option value="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></option>
					    		<?php endforeach; ?>
					    	</select>
					  	</div>
					  	<div class="consejero" class="form-group">
					    	<label for="exampleInputEmail1">Consejero Nº 2</label>
					    	<input type="text" class="form-control" class="form-control" name="consejeros[]" placeholder=""/>
					  		<label for="exampleInputEmail1">Tipo consejero Nº 2</label>
					    	<select class="form-control" name="counselor_type_id[]">
					    		<?php foreach($counselorTypes as $key => $value): ?>
									<option value="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></option>
					    		<?php endforeach; ?>
					    	</select>
					  	</div>
					  	<div class="consejero" class="form-group">
					    	<label for="exampleInputEmail1">Consejero Nº 3</label>
					    	<input type="text" class="form-control" class="form-control" name="consejeros[]" placeholder=""/>
					  		<label for="exampleInputEmail1">Tipo consejero Nº 3</label>
					    	<select class="form-control" name="counselor_type_id[]">
					    		<?php foreach($counselorTypes as $key => $value): ?>
									<option value="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></option>
					    		<?php endforeach; ?>
					    	</select>
					  	</div>
					  	<div class="consejero" class="form-group">
					    	<label for="exampleInputEmail1">Consejero Nº 4</label>
					    	<input type="text" class="form-control" class="form-control" name="consejeros[]" placeholder=""/>
					  		<label for="exampleInputEmail1">Tipo consejero Nº 4</label>
					    	<select class="form-control" name="counselor_type_id[]">
					    		<?php foreach($counselorTypes as $key => $value): ?>
									<option value="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></option>
					    		<?php endforeach; ?>
					    	</select>
					  	</div>
					  	<div class="consejero" class="form-group">
					    	<label for="exampleInputEmail1">Consejero Nº 5</label>
					    	<input type="text" class="form-control" class="form-control" name="consejeros[]" placeholder=""/>
					  		<label for="exampleInputEmail1">Tipo consejero Nº 5</label>
					    	<select class="form-control" name="counselor_type_id[]">
					    		<?php foreach($counselorTypes as $key => $value): ?>
									<option value="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></option>
					    		<?php endforeach; ?>
					    	</select>
					  	</div>
				  	</div>
				  	<a id="agregarConsejero">Agregar otro consejero</a>
				</div>
			</div>
			<center><div><button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-send"></span> Generar acta</button></div></center>
		</form>
		</div>
	</div>
</div>

		

