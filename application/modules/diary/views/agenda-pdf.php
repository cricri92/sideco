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
						<h3>Agenda Nº <?php echo $diary['num_acta']; ?></h3>
						<p>Departamento de Comuputación</p>
						<p>Reunión Nº <?php echo $diary['num_acta']; ?> del Consejo de Departamento</p>
						<p>Fecha: <?php echo $diary['date']; ?></p>
						<p>Hora: _________</p>
						<p>Lugar: Sala de Reuniones Departamento de Computación</p>
					</td>
					<td>
						<img src="assets/back/img/logo_facyt.png" alt="" width="144px">
					</td>
				</tr>	
			</table>
			<br>
			<br>
			<?php if(!empty($diary['points'])):  ?>
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
						<?php foreach($value['requests'] as $k => $v): ?>
							<?php echo $v['description']; ?>
							<center>
								<div>
									<p class="resolucion"><strong>Resolución:</strong> <?php echo $v['resolution']; ?> </p>
									<p class="resolucion">- </p>
								</div>
							</center>
						<?php endforeach; ?>
						
					<?php endforeach; ?>
					
				<?php else: ?>
					<h5>No hay puntos en la agenda.</h5>
				<?php endif; ?>
			<?php endif; ?>
		<?php endif; ?>
	</body>
</html>