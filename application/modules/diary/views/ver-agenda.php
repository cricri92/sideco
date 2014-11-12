<?php $i = 1; ?>
<div class="container">
	<div class="col-md-12">
		<div class="panel panel-primary">
	      	<div class="panel-heading">
	        	<h3 class="panel-title">Agenda</h3>
	        	<button class=href="backend/agendas/ver-agenda-pdf">Ver agenda en PDF</button>
	      	</div>
	      	<div class="panel-body">
	        	<table align="center" width="100%" border="1" id="membrete">
					<tr>
						<td align="center">
							<img src="assets/back/img/logo_uc.png" alt="" width="100px">
							<h4>Reunión: Ordinaria</h4>
						</td>
						<td style="text-align:center;">
							<h3>Agenda Nº <?php echo $diary['num_acta']; ?></h3>
							<p>Departamento de Comuputación</p>
							<p>Reunión Nº 003/2012 del Consejo de Departamento</p>
							<p>Fecha: 24/02/2012</p>
							<p>Lugar: Sala de Reuniones Departamento de Computación</p>
						</td>
						<td>
							<img src="assets/back/img/logo_facyt.png" alt="" width="144px">
						</td>
					</tr>	
				</table>
				<br>
				<br>
				<div class="consideracion">
					<center>
						<div>
							<?php echo $diary['consideration']; ?>
							<p class="resolucion"><strong>Consideración:</strong> <?php echo $diary['consideration']; ?> </p>
							<p class="resolucion">- </p>
						</div>
					
						<div>
							<p class="resolucion"><strong>Comentario:</strong> <?php echo $diary['consideration']; ?> </p>
							<?php echo $diary['comment']; ?>
							<p class="resolucion">- </p>
						</div>
					</center>
				</div>
				<?php if(!empty($diary['points'])): ?>
					<?php foreach($diary['points'] as $key => $value): ?>
						<h4 class="titulos centrar"> <?php echo $value['type_request']; ?> </h4>
						<div>
							<p class="resumen"> <?php echo $i++.'.- '.$value['description']; ?></p>
						</div>
						<center>
							<div>
								<p class="resolucion"><strong>Resolución:</strong> <?php echo $value['resolution']; ?> </p>
								<p class="resolucion">- </p>
							</div>
						</center>
					<?php endforeach; ?>
					
				<?php else: ?>
					<h5>No hay puntos en la agenda.</h5>
				<?php endif; ?>
	    	</div>
	    </div>
	</div>
</div>