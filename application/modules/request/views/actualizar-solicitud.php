<div class="container">
	<div class="col-md-8">
		<div class="panel panel-primary">
		   	<div class="panel-heading">
		  		<h3 class="panel-title">Actualizar solicitud</h3>
		   	</div>
		    <div class="panel-body">
		    	<form role="form" action="backend/solicitudes/actualizar-solicitud" method="POST" enctype="multipart/form-data">
					<input type="hidden" name="request_id" value="<?php echo $request['id']; ?>">
					<div class="form-group">
				    	<label for="exampleInputPassword1">Rol</label>
				    	<select class="form-control" id="type_applicant_id" name="type_applicant_id">
				    		<option value="">Seleccione</option>
				    		<?php foreach($typeApplicant as $key => $value):  ?>
				    			<?php if($value['id'] == $request['type_applicant_id']): ?>
				    				<option value="<?php echo $value['id']; ?>" selected> <?php echo $value['name']; ?> </option>
				    			<?php else: ?>
									<option value="<?php echo $value['id']; ?>"> <?php echo $value['name']; ?> </option>
				    			<?php endif; ?>
				    		<?php endforeach; ?>
				    	</select>
						    <?php echo form_error('type_applicant_id'); ?>
				  	</div>
				  	<div class="form-group" >
				    	<label for="exampleInputPassword1">Dependencia</label>
				    	<select class="form-control" name="dependence_id" id="dependence_id">
				    		<option value="">Seleccione</option>
				    		<?php foreach($dependences as $key => $value):  ?>
				    			<?php if($value['id'] == $request['dependence_id']): ?>
				    				<option value="<?php echo $value['id']; ?>" selected> <?php echo $value['name']; ?> </option>
				    			<?php else: ?>
									<option value="<?php echo $value['id']; ?>"> <?php echo $value['name']; ?> </option>
				    			<?php endif; ?>
				    		<?php endforeach; ?>
				    	</select>
			    		<?php echo form_error('dependence_id'); ?>
			  		</div>
					<input type="hidden" name="status_id" value="5">
					<div class="form-group">
				    	<label class="control-label" for="exampleInputEmail1">Cedula</label>
				    	<?php if(!empty(set_value('cedula'))): ?>
				    		<input id="cedula" class="form-control" name="cedula" value="<?php echo set_value('cedula'); ?>">
				    	<?php else: ?>
							<input id="cedula" class="form-control" name="cedula" value="<?php echo $request['cedula']; ?>">
				    	<?php endif; ?>
				    	<p id="error_cedula" style="display:none" class="text-danger"></p>
				    	<?php echo form_error('cedula'); ?>
				  	</div>
					<div class="form-group">
						<label for="exampleInputEmail1" class="control-label">Nombre</label>
						<input id="nombre" type="text" class="form-control" name="nombre" value="<?php echo $request['name']; ?>" disabled>
						<?php echo form_error('nombre') ?>
					</div>
					<div class="form-group">
				    	<label for="exampleInputPassword1">Tipo de solicitud</label>
			    		<select class="form-control" name="type_request_id">
				    		<option value="">Seleccione</option>
				    		<?php foreach($typeRequest as $key => $value):  ?>
				    			<?php if($value['id'] == $request['type_request_id']): ?>
				    				<option value="<?php echo $value['id']; ?>" selected> <?php echo $value['name']; ?> </option>
				    			<?php else: ?>
									<option value="<?php echo $value['id']; ?>"> <?php echo $value['name']; ?> </option>
				    			<?php endif; ?>
				    		<?php endforeach; ?>
				    	</select>
					    <?php echo form_error('type_request_id'); ?>
				    </div>
					<div class="form-group">
				    	<label for="exampleInputEmail1">Descripción</label>
				    	<br>
				    	<?php if(!empty(set_value('description'))): ?>
				    		<textarea class="ckeditor" name="description"><?php echo set_value('description'); ?></textarea>
				    	<?php else: ?>
				    		<textarea class="ckeditor" name="description"><?php echo $request['description']; ?></textarea>
				    	<?php endif; ?>
				    	<?php echo form_error('description'); ?>
				  	</div>
				  	<?php if($request['status_id'] == 6): ?>
				  		<div class="form-group" >
					    	<label for="exampleInputPassword1">Estatus</label>
					    	<select class="form-control" name="status_id">
					    		<option value="">Seleccione</option>
					    		<?php foreach($status as $key => $value):  ?>
					    			<?php if($value['id'] == $request['status_id']): ?>
					    				<option value="<?php echo $value['id']; ?>" selected> <?php echo $value['name']; ?> </option>
					    			<?php else: ?>
										<option value="<?php echo $value['id']; ?>"> <?php echo $value['name']; ?> </option>
					    			<?php endif; ?>
					    		<?php endforeach; ?>
					    	</select>
				    		<?php echo form_error('status_id'); ?>
			    		</div>
			    		<div class="form-group">
					    	<label for="exampleInputEmail1">Resolucion</label>
					    	<br>
					    	<?php if(!empty(set_value('resolution'))): ?>
					    		<textarea class="ckeditor" name="resolution"><?php echo set_value('resolution'); ?></textarea>
					    	<?php else: ?>
					    		<textarea class="ckeditor" name="resolution"><?php echo $request['resolution']; ?></textarea>
					    	<?php endif; ?>
					    	<?php echo form_error('resolution'); ?>
					  	</div>
			    	<?php else: ?>
			    		<input type="hidden" name="status_id" value="5">
				  	<?php endif; ?>
				  	<div class="form-group">
	                    <label class="">Adjuntos</label>
	                    <input id="adjuntos" type="file" class="form-control" name="attachment[]" value="<?php echo set_value('attachment'); ?>" multiple/>
                        <?php echo form_error('attachment'); ?>
	                    <?php if(!empty($attachments)): ?>
							<div class="form-group">
						  		<?php foreach($attachments as $key => $value): ?>
									<ul class="list-group">
										<li class="list-group-item">
									    	<span class="badge"><?php echo $value['type']; ?></span>
									    	<a href="assets/back/upload/file/<?php echo $value['name']; ?>"><?php echo $value['name']; ?></a>
									  	</li>
									</ul>
						  		<?php endforeach; ?>
						  	</div>
					  	<?php endif; ?>
	                </div>
				  	<button type="submit" class="btn btn-default">Actualizar solicitud</button>
				</form>
		    </div>
		</div>
	</div>
</div>