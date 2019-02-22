<?php require 'Conexiones.php';
	$Con = db_connect();
	$sql1 = "SELECT * FROM tutores;";
	$sql2 = "SELECT * FROM alumnos";
	$Consul3 = "SELECT * FROM motivosa";
	$result1 = mysqli_query($Con, $sql1);
	$result2 = mysqli_query($Con, $sql2);
	$result3 = mysqli_query($Con, $Consul3);

?>
<!DOCTYPE html>
<html>
<head>
	<!--Aparado de CSS-->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<!--Cierre de CSS-->
	<title>Generador de Asesorias</title>
	<meta charset="utf-8">
</head>
<body>
<div class="container-fluid" style="background-color: #FFC300;">
	<div class="row">
		<div class="col">
			<img src="imgs/logo-uni.png" width="100px" height="100px">
		</div>
		<div class="col d-flex align-items-center">
			<h1>Asesorias</h1>
		</div>
	</div>
</div>
	<nav class="nav">
		<a class="nav-link" href="index.php">Inicio</a>
		<a class="nav-link" href="Tutoria_Ind.php">Tutorias Individuales</a>
		<a class="nav-link" href="Tutoria_Grup.php">Tutorias Grupales</a>
		<a class="nav-link" href="Encuestas_Sat.php">Encuestas de Satisfacion</a>
		<a class="nav-link disabled" href="Asesorias.php">Asesorias</a>
		<a class="nav-link disabled" href="#">Total</a>
		<a class="nav-link" href="Registro_Tut.php">Tutores</a>
		<a class="nav-link" href="Registro_Alum.php">Alumnos</a>
		<a class="nav-link" href="Registro_Prof.php">Profesores</a>
	</nav>
	<br>
<div class="container">
	<div class="row">
		<form action="phpregister/Registro_Aseso.php" method="post">
			<div class="col">
				<div class="form-row">
					<div class="col-md">
						<label class="form-col-label">Tutor</label>
						<select class="form-control custom-select" name="selnom_tut" >
    					<option selected name="Tutor_grup">Seleccione un Tutor </option>
						<?php
    					if($row = mysqli_fetch_array($result1)){
							do {
								echo "<option value='".$row["Nombre_Tutor"]."'>".$row["Nombre_Tutor"]."</option>"; 
								} while ($row = mysqli_fetch_array($result1));
						}else{
							echo "<option>No hay Registros </option>";
						}
						?>
						</select>
					</div>
				</div>
				<br>
				<div class="form-row">
					<div class="col-md">
						<label class="form-col-label">Alumno</label>
						<select class="form-control custom-select" name="selnom_alum" >
    					<option selected name="default">Seleccione un Alumno </option>
						<?php
    					if($row = mysqli_fetch_array($result2)){
							do {
								echo "<option value='".$row["Nombre_Alumno"]."'>".$row["Nombre_Alumno"]."</option>"; 
								} while ($row = mysqli_fetch_array($result2));
						}else{
							echo "<option>No hay Registros </option>";
						}
						?>
						</select>
					</div>
				</div>
				<br>
				<div class="form-row">
					<div class="col-md">
						<label class="form-col-label">Motivo de la Asesoria</label>
						<select class="form-control custom-select" name="motivosti">
    					<option selected name="defaul">Seleccione un motivo</option>
					<?php
    					if($row = mysqli_fetch_array($result3)){
								do {
									echo "<option value='".$row["motivo"]."'>".$row["motivo"]."</option>"; 
								} while ($row = mysqli_fetch_array($result3));
							}
							else{
								echo "<option value = '1'> no hay registros</option>";
							}
					?>
					</select>
					</div>
				</div>
				<br>
				<div class="form-row">
					<div class="col-md">
						<label class="form-col-label">Genero</label>
						<div class="form-check">
          				<input class="form-check-input" type="radio" name="gridRadios" value="Hombre" >
          				<label class="form-check-label" for="gridRadios1"> Hombre</label>
          			</div>
          			<div class="form-check">
          				<input class="form-check-input" type="radio" name="gridRadios" value="Mujer">
          				<label class="form-check-label" for="gridRadios2">Mujer</label>
        			</div>
					</div>
				</div>
				<br>
				<div class="form-row">
					<div class="col">
						<label class="form-col-label">Grupo</label>
						<input type="text" class="form-control" name="Grupo" placeholder="Grupo">
					</div>
				</div>
				<br>
				<div class="form-row">
					<div class="col-md">
						<label class="form-col-label">Calificacion</label>
						<input type="text" class="form-control" name="Calif" placeholder="Calificacion">
					</div>
				</div>
				<br>
				<div class="form-row">
					<div class="col-md">
						<label class="form-col-label">Descripcion</label>
						<textarea class="form-control form-text" name="txt_areaDes"placeholder="Descripcion del Motivo"></textarea>
					</div>
				</div>
				<br>
				<div class="form-row">
					<div class="col-md-auto">
						<input type="submit" name="Submit" value="Enviar" class=" btn btn-dark">
					</div>
					<div class="col-md-auto">
						<input type="reset" value="Limpiar" class="btn btn-dark">
					</div>
				</div>
				<br>
			</div>
		</form>
		<div class="col"></div>
		<div class="col-md-auto float-right align-items-right">
			<h4>Tipos de Motivos de Asesorias</h4>
			<ol>
				<li>1A [Desempeño] (Materias Reprobadas Indicar cuántas y cuáles)</li>
				<li>1B [Desempeño] (Evaluacion de Competencias)</li>
				<li>1C [Desempeño] (Bajo o Nulo Desempeño Académico)</li>
				<li>1D [Desempeño] (Baja Calidad en Trabajos Académicos)</li>
				<li>1E [Desempeño] (Nula Entrega de Trabajos Académicos)</li>
				<li>1F [Desempeño] (Aclaracion de Dudas)</li>
				<li>1G [Desempeño] (Para Presentar Evaluación por Recuperación)</li>
				<li>1H [Desempeño] (Asesoría Estancia/Estadía)</li>
				<li>2  [Temática]   (Diferentes temas Especificar en Observaciones)</li>
				<li>3  [Otros]      (Especificar)</li>
			</ol>
		</div>
	</div>
</div>
<div class="container-fluid" style="background-color: gray;">
	<br>
	<br>
</div>
</body>
</html>