<!DOCTYPE html>
<html lang="es">
	<head>
		<link rel="stylesheet" href="assets/back/css/agenda.css">
	</head>
	<body>
		<?php if(isset($diary)): ?>	
			<table align="center" width="100%" border="1" id="membrete">
				<tr>
					<td align="center">
						<img src="assets/back/img/logo_uc.png" alt="" width="100px">
						<h4>Reunión: <?php echo $diary['diary_type']; ?></h4>
					</td>
					<td style="text-align:center;">
						<h3>Acta Nº <?php echo $diary['num_acta']; ?></h3>
						<p>Departamento de Comuputación</p>
						<p>Reunión Nº <?php echo $diary['num_acta']; ?> del Consejo de Departamento</p>
						<p>Fecha: <?php echo $diary['date']; ?></p>
						<p>Hora: <?php echo $act['time']; ?></p>
						<p>Lugar: Sala de Reuniones Departamento de Computación</p>
					</td>
					<td>
						<img src="assets/back/img/logo_facyt.png" alt="" width="144px">
					</td>
				</tr>	
			</table>
			<br>
			<br>
			<h4 style="text-align:center;">ASISTENTES</h4>
			<?php if(!empty($counselors)): ?>
				<center>
					<table align="center"  border="0" id="membrete">
					<?php foreach($counselors as $key => $value): ?>
						<tr>
							<td><?php echo $value['name']; ?></td>
							<td><?php echo $value['counselorType']?></td>
						</tr>	
					<?php endforeach; ?>
					</table>
			</center>
			<?php else: ?>
				<p><strong>Aun no hay asistentes para esta acta.</strong></p>
			<?php endif; ?>
			<?php if(!empty($diary['points'])):  ?>
				<div class="consideracion">
					<center>
						<div>
							<p><strong>Consideración:</strong><?php echo $diary['consideration']; ?></p>
						</div>		
						<div>
							<p><strong>Comentario:</strong> <?php echo $diary['comment']; ?> </p>
						</div>
					</center>
				</div>
				<?php if(!empty($diary['points'])): ?>
					<?php foreach($diary['points'] as $key => $value): ?>
						<h4 class="titulos centrar"> <?php echo $value['type_request']; ?> </h4>
						<?php foreach($value['requests'] as $k => $v): ?>
							<p><strong>Descripción:</strong> </p>
							<?php echo $v['description']; ?>
							<center>
								<div>
									<p><strong>Resolución:</strong> </p>
									<?php echo $v['resolution']; ?>
								</div>
							</center>
							<hr>
						<?php endforeach; ?>
						
					<?php endforeach; ?>
					
				<?php else: ?>
					<h5>No hay puntos en la agenda.</h5>
				<?php endif; ?>
			<?php endif; ?>
		<?php endif; ?>
	</body>
</html>