<div class="container">
	<div class="col-md-6">
		<div class="panel panel-primary">
		   	<div class="panel-heading">
		  		<h3 class="panel-title">Nueva agenda</h3>
		   	</div>
		    <div class="panel-body">
		  		<form role="form" action="backend/agendas/crear-agenda" method="POST">
		  			<?php if(!empty($diary_activated)): ?>
		  				<div class="alert alert-info" role="alert">
					      	<strong>ATENCIÓN</strong>: Existe una agenda activa. Si crea una nueva la anterior se cerrara.
					    </div>
		  			<?php endif; ?>
	    			<div class="form-group">
				    	<label for="exampleInputEmail1">Fecha del Consejo</label>
				    	<input type="date" class="form-control" name="date" placeholder="Fecha">
				    	<?php echo form_error('date'); ?>
				  	</div>
				  	<input type="hidden" name="status_id" value="5">
				  	<div class="form-group">
				    	<label for="exampleInputEmail1">Número de Agenda</label>
				    	<input type="text" class="form-control" name="num_acta" placeholder=""></input>
				    	<?php echo form_error('num_acta'); ?>
				  	</div>
				  	<div class="form-group">
				  		<label for="exampleInputEmail1">Tipo de reunión</label>
				  		<select name="diary_type_id" id="" class="form-control">
				  			<option value="">Seleccione</option>
				  			<?php foreach($diary_type as $key => $value): ?>
				  				<option value="<?php echo $value['id']; ?>"> <?php echo $value['name']; ?></option>
				    		<?php endforeach; ?>
				    	</select>
				  	</div>
				  	<button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-send"></span> Crear Agenda</button>
				</form>
		    </div>
		</div>
	</div>	
</div>

