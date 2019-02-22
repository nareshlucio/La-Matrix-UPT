<?php 
	require 'Conexiones.php';
	$Con = db_connect();
	$sql1 = "SELECT * FROM tutores;";
	$sql3 = "SELECT * FROM profesores;";
	$sql2 = "SELECT * FROM alumnos;";
	$result1 = mysqli_query($Con, $sql1);
	$result2 = mysqli_query($Con, $sql2);
	$result3 = mysqli_query($Con, $sql3);
	$i=0;
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<!--Aparado de CSS-->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<!--Cierre de CSS-->
	<title>Encuesta de Satisfaccion</title>
</head>
<body>
<div class="container-fluid" style="background-color: #FFC300;">
	<div class="row">
		<div class="col-md-4">
			<img src="imgs/logo-uni.png" width="100px" height="100px">
		</div>
		<div class="col">
			<br>
			<h1>Encuestas de Satisfaccion</h1>
		</div>
	</div>
</div>
	<nav class="nav">
		<a class="nav-link" href="index.php">Inicio</a>
		<a class="nav-link" href="Tutoria_Ind.php">Tutorias Individuales</a>
		<a class="nav-link" href="Tutoria_Grup.php">Tutorias Grupales</a>
		<a class="nav-link disabled" href="Encuestas_Sat.php">Encuestas de Satisfacion</a>
		<a class="nav-link" href="Asesorias.php">Asesorias</a>
		<a class="nav-link disabled" href="#">Total</a>
		<a class="nav-link" href="Registro_Tut.php">Tutores</a>
		<a class="nav-link" href="Registro_Alum.php">Alumnos</a>
		<a class="nav-link" href="Registro_Prof.php">Profesores</a>
	</nav>
	<br>
<div class="container">
	<div class="row">
		<form class="form" action="phpregister/Registro_Encuesta.php" method="post">
		<div class="col">
				<div class="form-row">
					<div class="col-md">
						<label class="form-col-label">Tutor</label>
						<select class="form-control custom-select" name="nom_tutor">
							<option selected name="default">Seleccione un Tutor</option>
							<?php
								if($row = mysqli_fetch_array($result1)){
									do {
										echo "<option value='".$row["Nombre_Tutor"]."'>".$row["Nombre_Tutor"]."</option>"; 
									} while ($row = mysqli_fetch_array($result1));
								}
								else{
									echo "<option value='default2'> no hay registros</option>";
								}
					 		?>
						</select>
					</div>
				</div>
				<br>
				<div class="form-row">
					<div class="col-md">
						<label class="form-col-label">Profesor / Maestro</label>
						<select class="form-control custom-select" name="nom_profesor">
							<option selected name="default">Seleccione Profesor</option>
						<?php
							if($row = mysqli_fetch_array($result3)){
								do {
									echo "<option value='".$row["Nombre_Profesor"]."'>".$row["Nombre_Profesor"]."</option>"; 
								} while ($row = mysqli_fetch_array($result3));
							}
							else{
								echo "<option value='default2'> no hay registros</option>";
							}
						?>
						</select>
					</div>
				</div>
				<br>
				<div class="form-row">
					<div class="col-md-auto">
						<label class="form-col-label">Pregunta 1</label>
						<input type="number" class="form-control" name="pregun1" placeholder="Calificacion">
					</div>
				</div>
				<br>
				<div class="form-row">
					<div class="col-md-auto">
						<label class="form-col-label">Pregunta 2</label>
						<input type="number" class="form-control" name="pregun2" placeholder="Calificacion">
					</div>
				</div>
				<br>
				<div class="form-row">
					<div class="col-md-auto">
						<label class="form-col-label">Pregunta 3</label>
						<input type="number" class="form-control" name="pregun3" placeholder="Calificacion">
					</div>
				</div>
				<br>
				<div class="form-row">
					<div class="col-md-auto">
						<label class="form-col-label">Pregunta 4</label>
						<input type="number" class="form-control" name="pregun4" placeholder="Calificacion">
					</div>
				</div>
				<br>
				<div class="form-row">
					<div class="col-md">
						<label class="form-col-label">Alumno</label>
						<select class="form-control custom-select" name="alumno">
							<option selected name="">Seleccione un Alumno</option>
						<?php
						if($row = mysqli_fetch_array($result2)){
							do {
								echo "<option value='".$row["Nombre_Alumno"]."'>".$row["Nombre_Alumno"]."</option>"; 
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
					<div class="col-md-auto">
						<label class="form-col-label">Promedio</label>
						<input type="number" class="form-control" name="promedio" placeholder="Calificacion Total">
					</div>
				</div>
				<br>
				<div class="form-row">
					<div class="col-md-auto">
						<input type="submit" value="Registrar" class="btn btn-dark">
					</div>
					<div class="col-md-auto">
						<input type="reset" value="Limpiar" class="btn btn-dark">
					</div>
				</div>
			</div>
			<br>
		</form>
	</div>
</div>
<div class="container-fluid" style="background-color: gray;">
	<br>
	<br>
</div>
</body>
</html>
<?php mysqli_close($Con);?>