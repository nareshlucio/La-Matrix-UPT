<?php require 'Conexiones.php';
	$Con = db_connect();
	$consul = "SELECT * FROM tutores;";
	$consul2 = "SELECT * FROM profesores;";
	$consul3 = "SELECT * FROM alumnos;";
	$result1 = mysqli_query($Con, $consul);
	$result2 = mysqli_query($Con, $consul2);
	$result3 = mysqli_query($Con, $consul3);
?>
<!DOCTYPE html>
<html>
<head>
	<!--Apartado de CSS-->
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<title>Generador de Tutorias Individuales</title>
</head>
<body>
<div class="container-fluid" style="background-color: #FFC300;">
	<div class="row">
		<div class="col-md-5">
			<img src="imgs/logo-uni.png" width="100px" height="100px">
		</div>
		<div class="col">
			<br>
			<h1 >Tutorias Individuales</h1>
		</div>
	</div>
</div>
<nav class="nav">
	<a class="nav-link" href="index.php">Inicio</a>
	<a class="nav-link disabled" href="Tutoria_Ind.php">Tutorias Individuales</a>
	<a class="nav-link" href="Tutoria_Grup.php">Tutorias Grupales</a>
	<a class="nav-link" href="Encuestas_Sat.php">Encuestas de Satisfacion</a>
	<a class="nav-link" href="Asesorias.php">Asesorias</a>
	<a class="nav-link disabled" href="#">Total</a>
	<a class="nav-link" href="Registro_Tut.php">Registro Tutores/Profesores/Alumnos</a>
</nav>	<br>
<div class="container">
	<div class="row">
		<form method="post" action="phpregister/registro_indi.php">
			<div class="form-row">
				<div class="col-md">
					<label class="page-header">Nombre del Tutor</label>
						<select class="form-control custom-select" name="Tutor">
    					<option selected name="defaul">Seleccione un Tutor </option>
						<?php
    					if($row = mysqli_fetch_array($result1)){
							do {
								echo "<option value='".$row["Nombre_Tutor"]."'>".$row["Nombre_Tutor"]."</option>"; 
								} while ($row = mysqli_fetch_array($result1));
						}else{
							echo "<option value='1'> No hay Registros </option>";
						}
					?>
					</select>
				</div>
			</div>
			<br>
			<div class="form-row">
				<div class="col-md">
					<label>Profesor/Maestro</label>
					<select class="form-control custom-select" name="Prof">
    					<option selected name="Default">Seleccione un Profesor </option>
						<?php
    					if($row = mysqli_fetch_array($result2)){
								do {
									echo "<option value='".$row["Nombre_Profesor"]."'>".$row["Nombre_Profesor"]."</option>"; 
								} while ($row = mysqli_fetch_array($result2));
							}
							else{
								echo "<option value='1'> no hay registros</option>";
							}
					?>
					</select>
				</div>
			</div>
			<br>
				<div class="form-row">
				<div class="col-md">
					<label>Alumno</label>
					<select class="form-control custom-select" name="Alum">
    					<option selected name="Defaulta">Seleccione un Alumno </option>
						<?php
    					if($row = mysqli_fetch_array($result3)){
							do {
								echo "<option value='".$row["Nombre_Alumno"]."'>".$row["Nombre_Alumno"]."</option>"; 
							} while ($row = mysqli_fetch_array($result3));
						}
						else{
							echo "<option value='1'> no hay registros </option>";
						}
					?>
					</select>
				</div>
			</div>
			<br>
			<div class="form-row">
				<div class="col-md">
					<div class="form-check">
  						<input class="form-check-input" type="radio" name="gridRadios" value="Hombre" checked>
  						<label class="form-check-label" for="exampleRadios1"> Hombre </label>
					</div>
					<div class="form-check">
  						<input class="form-check-input" type="radio" name="gridRadios" value="Mujer">
  						<label class="form-check-label" for="exampleRadios2"> Mujer </label>
					</div>		
				</div>
			</div>
			<br>
			<div class="form-row">
				<div class="col-md">
					<label>Motivo de la Asesoria</label>
					<input type="text" class="input-group-text" name="Mot_Aseso" placeholder="Motivo" autocomplete="off">
				</div>
			</div>
			<br>
			<div class="form-row">
				<div class="col-md">
					<label>Grupo</label>
					<input type="text" class="input-group-text" name="Grupo" placeholder="Nombre del Gurpo" autocomplete="off">
				</div>
			</div>
			<br>
			<div class="form-row">
				<div class="col-md">
					<label>Descripcion</label>
					<textarea class="form-text form-control" placeholder="Descripcion de la Tutoria" name="txt_area"></textarea>
				</div>
			</div>
			<br>
			<div class="form-row">
				<div class="col-md-auto">
					<input type="submit" value="Enviar" class="btn btn-dark">
				</div>
				<div class="col-md-auto">
					<input type="reset" value="Limpiar" class="btn btn-dark">
				</div>
			</div>
			<br>
		</form>
	</div>
</div>
<div class="container-fluid" style="background-color: gray;">
	<div class="row">
		<div class="col">
			<br>
			<br>
			<br>
		</div>
	</div>
</div>
<!--Apartado de JS-->
</body>
</html>