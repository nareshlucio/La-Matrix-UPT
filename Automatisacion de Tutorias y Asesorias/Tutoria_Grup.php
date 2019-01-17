<?php 
include 'conexion.php';

?>
<!DOCTYPE html>
<html>
<head>
	<!--Aparado de CSS-->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<!--Cierre de CSS-->
	<title>Generador de Tutorias Grupales</title>
	<meta charset="utf-8">
</head>
<body>
	<div class="container-fluid" style="background-color: #FFC300;">
		<div class="row">
			<div class="col-md-5"><img src="imgs/logo-uni.png" width="100px" height="100px"></div>
			<div class="col"><br><h1>Tutorias Grupales</h1></div>
		</div>
	</div>
	<nav class="nav">
		<a href="index.php" class="nav-link">Inicio</a>
		<a href="#" class="nav-link disabled">Tutoria_Grupal</a>
		<a href="Tutoria_Ind.php" class="nav-link">Tutoria Individual</a>
		<a href="Asesorias.php" class="nav-link ">Asesoria</a>
		<a href="Encuestas_Sat.php" class="nav-link">Encuestas de Satisfaccion</a>
	</nav>
	<div class="container">
		<div class="row">
			<form>
				<div class="form-row">
					<div class="col-md">
						<label>Nombre del Tutor</label>
						<input type="text" class="form-control" name="" placeholder="Nombre del Tutor">
					</div>
				</div>
				<br>
				<div class="form-row">
					<div class="col-md">
						<label>Motivo</label>
						<input type="text" class="form-control" name="" placeholder="Motivo del grupo">
					</div>
				</div>
				<br>
				<div class="form-row">
					<div class="col-md">
						<label>Grupo</label>
						<input type="text" class="form-control" name="" placeholder="Grupo">
					</div>
				</div>
				<br>
				<div class="form-row">
					<div class="col-md">
						<label class="col-form-label">Descripcion</label>
						<textarea class="form-text" placeholder="Descripcion del la Tutoria"></textarea>
					</div>
				</div>
			</form>
		</div>
	</div>
<!--Apartado de JS-->
</body>
</html>