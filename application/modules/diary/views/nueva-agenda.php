<div class="container">
	<div class="col-md-6">
		<div class="panel panel-primary">
		   	<div class="panel-heading">
		  		<h3 class="panel-title">Nueva agenda</h3>
		   	</div>
		    <div class="panel-body">
		  		<form role="form" action="backend/agendas/crear-agenda" method="POST">
		  		<!--<div class="control-group">
					    <div class="controls">
					    	<label for="date-picker">Fecha del consejo</label>
		            		<div class="input-group">
			                	<input id="date-picker" type="text" class="date-picker form-control" />
			                	<label for="date-picker" class="input-group-addon btn"><span class="glyphicon glyphicon-calendar"></span>
				                </label>
	            			</div>
	        			</div>
	    			</div> -->
	    			<div class="form-group">
				    	<label for="exampleInputEmail1">Fecha del Consejo</label>
				    	<input type="date" class="form-control" name="date" placeholder="Fecha">
				    	<?php echo form_error('date'); ?>
				  	</div>
				  	<input type="hidden" name="status_id" value="5">
				  	<div class="form-group">
				    	<label for="exampleInputEmail1">Numero de Agenda</label>
				    	<input type="text" class="form-control" name="num_acta" placeholder=""></input>
				    	<?php echo form_error('num_acta'); ?>
				  	</div>
				  	<!--
					<div class="form-group">
				    	<label for="exampleInputPassword1">Fecha</label>
				    	<input type="text" name="date" value="<?php echo date('')?>"></input>
				    	<?php echo form_error('type_request_id'); ?>
				  	</div>
				  	-->
					<div class="form-group">
				    	<label for="exampleInputEmail1">Consideración</label>
				    	<textarea class="form-control" name="consideration"><?php echo set_value('consideration'); ?></textarea>
				    	<?php echo form_error('consideration'); ?>
				  	</div>
				  	<div class="form-group">
				    	<label for="exampleInputEmail1">Comentario</label>
				    	<textarea class="form-control" name="comentario"><?php echo set_value('comentario'); ?></textarea>
				    	<?php echo form_error('comentario'); ?>
				  	</div>
				  	<button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-send"></span> Crear Agenda</button>
				</form>
		    </div>
		</div>
	</div>	
</div>

