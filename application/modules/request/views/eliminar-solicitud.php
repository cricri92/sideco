<div class="container">
	<div class="col-md-12">
		<div class="panel panel-danger">
	    	<div class="panel-heading">
	        	<h3 class="panel-title">Eliminar solicitud</h3>
	      	</div>
	      	<div class="panel-body">
	        	<p>¿Esta seguro que desea eliminar la solicitud #<strong><?php echo $request['id']; ?></strong> de <strong><?php echo $request['name']; ?></strong> ?</p>
				<a class="btn btn-default" href="backend/solicitudes">No</a>
				<a class="btn btn-default" href="backend/solicitudes/eliminar-solicitud/<?php echo $request['id']?>">Si</a>
	      	</div>
	    </div>
	</div>
</div>


<center>

	<div class="col-md-12">
	
	</div>
</center>