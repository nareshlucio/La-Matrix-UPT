<?php require 'Conexiones.php';
	$Con = db_connect();
	$sql2 = "SELECT * FROM alumnos;";
	$sqlCa = "SELECT * FROM carrera";
	$result2 = mysqli_query($Con, $sql2);
	$carre = mysqli_query($Con, $sqlCa);
?>
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
	<a class="nav-link disabled" href="#">Alumnos</a>
	<a class="nav-link" href="Registro_Prof.php">Profesores</a>
</nav>
<br><br>
<div class="container">
	<div class="row">
		<form class="form" action="phpregister/registro_alu.php" method="post">
		<div class="col">
		<div class="form-row">
			<div class="col-md-auto">
				<h6>Registro Alumno</h6>
				<input class="form-control" type="text" name="nom_alu" placeholder="Nombre del Alumno" autocomplete="off">
			</div>
		</div>
		<br>
		<div class="form-row">
			<div class="col-md-auto">
				<h6>Matricula</h6>
				<input class="form-control" type="text" name="matri" placeholder="No. Matricula" autocomplete="off">
			</div>
		</div>
		<br>
		<div class="form-row">
			<div class="col-md-auto">
				<h6>Grupo</h6>
				<input class="form-control" type="text" name="grupo" placeholder="Grupo" autocomplete="off">
			</div>
		</div>
		<br>
		<div class="form-row">
			<div class="col-md-auto">
				<h6>Carrera</h6>
  					<select class="form-control custom-select" name="carrera">
    					<option selected>seleccione una carrera </option>
    					<?php
    						if($row = mysqli_fetch_array($carre)){
								do {
									echo "<option value='".$row["Nombre_de_Carrera"]."'>".$row["Nombre_de_Carrera"]."</option>"; 
									} while ($row = mysqli_fetch_array($carre));
							}else{
							echo "<option>No hay Registros </option>";
							}
						?>
  					</select>
				</div>
			</div>
			<br>
			<div class="from-row">
				<input type="submit" value="Registrar" class="btn btn-primary">	
			</div>
		</div>
		<br>
		</form>
	</div>
</div>
<div class="container-fluid" style="background-color: gray;">
	<br><br><br>
</div>
</body>
</html>