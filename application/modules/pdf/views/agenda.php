<!DOCTYPE html>
<html lang="es">
	<head>
		<style>
			div
			{
				margin: 0px;
				padding: 0px;
			}
			#roles_consejo
			{
				padding-right: 150px;
				padding-left: 0px;
				padding-top: 5px;
			}
			#comentario 
			{
				border: 1px solid black;
			}
			#consideracion
			{
				padding-bottom: 5px;
			}
			.resumen
			{
				text-align: justify;
			}
			.titulos
			{
				text-decoration: underline;
				padding-left: 5px;
				text-transform: uppercase;
			}
			.centrar
			{
				text-align: center;
			}
			.resolucion
			{
				border: 1px solid black;
				text-align: justify;
			}
			.punto
			{
				padding: 8px;
				margin: 8px;
				text-align: justify;
			}

		</style>
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
						<p>Fecha: <?php $diary['date']; ?></p>
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
			<div class="consideracion">
				<p><?php $diary_type[$'consideration']; ?></p>
				<p class="comentario"></p>
				<p id="comentario">$type_<?php  ?></p>
			</div>
			<?php $diary["ype_id] = array(
				 1 => "Asuntos Profesorales",
				 2 => "ASUNTOS ESTUDIANTILES",
				 3 => "COORDINACION DE PREPARADORES"
			);
			foreach ($categoria as $key => $cat) { ?>
				<h4 class="titulos centrar"> <?php echo $cat; ?> </h4>
				<table class="categoria">
					<tr>
						<td>
							<?php $punto = array(
						 		"irección de Asuntos Profesorales de la FaCyT.",
								"2. Comunicación S/N de fecha 14/02/2012, recibida en esta Secretaría el 14/02/2012, emitido por la <strong>Prof. Elsa Tovar</strong>, solicitando el plan de aprobación de pasantía de la Br. Gabriela Sánchez, C.I. V-20.082.517" => 
								"Aprobado el plan de trabajo de pasantía. Informar a la tutor y a la Br."
							); ?>
							<?php foreach ($punto as $res => $resol){ ?>
								<table class="punto" cellspacing="0" cellpadding="0">
									<tr>
										<tr>
											<td>
												<p> <?php echo $res; ?></p>
											</td>	
										</tr>
										<tr>
											<td>
												<p class="resolucion"><strong>Resolución:</strong> <?php echo $resol; ?> </p>
											</td>
										</tr>
									</tr>
								</table >
							<?php } ?>
						</td>	
					</tr>	
				</table>
		<?php endif; ?>
	</body>
</html>