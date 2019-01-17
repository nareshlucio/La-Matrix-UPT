<?php 
include 'conexion.php';

?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1, shrink-to-fit=no">
	<!--***************LINKS BOOTSTRAP CSS**************************-->
	<title>Inicio</title>
</head>
<body>
	<div class="container-fluid" style="background-color: #FFC300;">
		<div class="row">
			<div class="col-md-4">
			<img src="imgs/logo-uni.png" width="100px" height="100px"></div>
		<div class="col-md-6"></br><h1>Universidad Politecnica de Tecamac</h1></div>
		</div>
	</div>
	<!--Menu-->
	<nav class="nav nav-pills flex-column flex-sm-row">
		<a class="nav-link disabled" href="#">Inicio</a>
		<a class="nav-link" href="Tutoria_Ind.php">Tutorias Individuales</a>
		<a class="nav-link" href="Tutoria_Grup.php">Tutorias Grupales</a>
		<a class="nav-link" href="Encuestas_Sat.php">Encuestas de Satisfacion</a>
		<a class="nav-link" href="Asesorias.php">Asesorias</a>
		<a class="nav-link disabled" href="#">Total</a>
	</nav>
	<!--Cierre Menu-->
	<div class="container">
		<form>
			<div class="row">
				<div class="form-row">
					<div class="col">
					<label class="col-form-label">Nombre del Tutor</label>	
					<input type="text" class="form-control" name="txttut" placeholder="Nombre del Tutor">
					<br>
					<input type="submit" class="btn-primary" name="btnbus" >
					</div>
				</div>
			</div>
		</form>
		<br>
		<div class="row-fluid">
			<div class="col">
				
			</div>
		</div>
	</div>
<!--********LINKS BOOTSTRAP JAVASCRIPT**************-->
<script type="text/javascript" src="bootstrap.js"></script>
</body>
</html>