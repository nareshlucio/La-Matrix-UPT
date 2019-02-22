<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<div class="container-fluid" style="background-color: #FFC300;">
	<div class="row">
		<div class="col-md-5">
			<img src="imgs/logo-uni.png" width="100px" height="100px" class="media">
		</div>
		<div class="col">
			<br>
			<h1 class="page-header">Tutores / Asesores</h1>
		</div>
	</div>
</div>
<nav class="nav">
	<a href="index.php" class="nav-link">Inicio</a>
	<a href="Tutoria_Grup.php" class="nav-link">Tutoria_Grupal</a>
	<a href="Tutoria_Ind.php" class="nav-link">Tutoria Individual</a>
	<a href="Asesorias.php" class="nav-link">Asesoria</a>
	<a href="Encuestas_Sat.php" class="nav-link">Encuestas de Satisfaccion</a>
	<a class="nav-link disabled" href="#">Total</a>
	<a class="nav-link" href="Registro_Tut.php">Tutores</a>
	<a class="nav-link" href="Registro_Alum.php">Alumnos</a>
	<a class="nav-link disabled" href="#">Profesores</a>
</nav>
<br><br>
<div class="container">
	<div class="row">
		<form class="form" action="phpregister/registro_Prof.php" method="post">
		<div class="col">
		<div class="form-row">
			<div class="col">
				<h6>Registro Profesor</h6>
				<input class="form-control" type="text" name="prof" placeholder="Nombre del Profesor" autocomplete="off">
			</div>
		</div>
		<br>
			<div class="form-row">
				<div class="col">
					<h6>No. de Seguro Social</h6>
					<input class="form-control" type="text" name="no_seg" placeholder="Numero de seguro social" autocomplete="off">
				</div>
			</div>
			<br>
			<div class="form-row">
				<div class="col">
					<h6>Correo Electronico</h6>
					<input class="form-control" type="text" name="corre" placeholder="Correo Electronico" autocomplete="off">
				</div>
			</div>
			<br>
			<div class="form-row">
				<div class="col">
					<h6>Telefono</h6>
					<input class="form-control" type="text" name="telef" placeholder="Telefono celular/casa" autocomplete="off">
				</div>
			</div>
			<br>
			<div class="form-row">
				<div class="col">
					<h6>Grupo</h6>
					<input class="form-control" type="text" name="grupo" placeholder="Grupo" autocomplete="off">
				</div>
			</div>
			<br>
			<div class="form-row">
				<div class="col">
					<h6>Horario</h6>
					<input class="form-control" type="text" name="hora" placeholder="Horario escolar" autocomplete="off">
				</div>
			</div>
		</div>
		<br>
		<div class="form-row">
			<div class="col">
				<input type="submit" class="btn btn-primary" value="Registrar">
			</div>
		</div>
		</div>
		</form>
	</div>
</div>
<br>
<div class="container-fluid" style="background-color: gray;">
	<br>
	<br>
	<br>
</div>
</body>
</html>