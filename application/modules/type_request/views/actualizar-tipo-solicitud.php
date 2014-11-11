<div class="container">
	<div class="col-md-6">
		<div class="panel panel-primary">
		    <div class="panel-heading">
		        <h3 class="panel-title"> Actualizar tipo de solicitud</h3>
		    </div>
		    <div class="panel-body">
		        <form role="form" action="backend/solicitudes/actualizar-tipo" method="POST">
		        	<input type="hidden" name="type_request_id" value="<?php echo $type_request['id']; ?>">
			        <div class="form-group">
			        	<label>Nombre tipo de solicitud</label>
			        	<?php if(!empty(set_value('name'))): ?>
			        		<input type="text" class="form-control" name="name" placeholder="Tipo de solicitud" value="<?php echo set_value('name'); ?>">
			        	<?php else: ?>
			        		<input type="text" class="form-control" name="name" placeholder="Tipo de solicitud" value="<?php echo $type_request['name']; ?>">
			        	<?php endif; ?>
						   	<?php echo form_error('name'); ?>
			        </div>
					<button type="submit" class="btn btn-default btn-group">Guardar</button>
		        </form>
		    </div>
		</div>
	</div>	
</div>
