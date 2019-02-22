<?php 
	require 'Conexiones.php';
	$Con = db_connect();
	$consul = "SELECT * FROM tutores;";
	$consul2 = "SELECT * FROM profesores;";
	$consul3 = "SELECT * FROM alumnos;";
	$consul4 = "SELECT * FROM motivosti;";
	$result1 = mysqli_query($Con, $consul);
	$result2 = mysqli_query($Con, $consul2);
	$result3 = mysqli_query($Con, $consul3);
	$result4 = mysqli_query($Con, $consul4);
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
		<a class="nav-link" href="Registro_Tut.php">Tutores</a>
		<a class="nav-link" href="Registro_Alum.php">Alumnos</a>
		<a class="nav-link" href="Registro_Prof.php">Profesores</a>
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
								echo "<option value='1'> No hay registros</option>";
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
						<select class="form-control custom-select" name="motivosti">
    					<option selected name="defaul">Seleccione un motivo</option>
					<?php
    					if($row = mysqli_fetch_array($result4)){
								do {
									echo "<option value='".$row["motivo"]."'>".$row["motivo"]."</option>"; 
								} while ($row = mysqli_fetch_array($result4));
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
					<label>Grupo</label>
					<input type="text" class="form-control" name="Grupo" placeholder="Nombre del Gurpo" autocomplete="off">
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
		<div class="col"></div>
		<div class="col">
			<h5>Motivos de Asesorias Tutoria Individual</h5>
			<select class="form-control custom-select">
				<option selected>Descripcion de Motivos</option>
				<option>1 (Conocer al Alumno)</option>
				<option>2A (Desempeño) [Materias Reprobadas (Especificar En Descripcion)]</option>
				<option>2B (Desempeño) [Evaluacion por Competencias]</option>
				<option>2C (Desempeño) [Baja o nula participacion en las actividades académicas]</option>
				<option>2D (Desempeño) [Baja calidad en trabajos académicos]</option>
				<option>2E (Desempeño) [Nula Entrega de Trabajos Academicos]</option>
				<option>2F (Desempeño) [Plan de Nivelacion]</option>
				<option>2G (Desempeño Estancia/Estadia) [Asesor reporta bajo desempeño]</option>
				<option>2H (Desempeño Estancia/Estadia) [Asesor reporta Faltas y/o Retardos]</option>
				<option>2I (Desempeño Estancia/Estadia) [Asesor reporta Alumnos Conflictivos]</option>
				<option>2J (Desempeño Estancia/Estadia) [El Empresario Asesor reporta bajo desempeño]</option>
				<option>2K (Desempeño Estancia/Estadia) [El Empresario Asesor reporta Faltas y/o Retardos]</option>
				<option>2L (Desempeño Estancia/Estadia) [El Empresario Asesor reporta Alumnos Conflictivos]</option>
				<option>3A (Informativa) [Reglamento Institucional, Codigo de Moral, Lineamientos de Seguridad... Reglamento]</option>
				<option>3B (Informativa) [Procesos Academicos, Fechas de exámenes, becas,... Programas de Apoyo]</option>
				<option>3C (Informativa) [Eventos, Practicas, Visitas Guiadas... Platica sobre Seguridad]</option>
				<option>4A (Problemas de Conducta) [Uso de Lenguaje Inadecuado, Conductas Inadecuadas]</option>
				<option>4B (Problemas de Conducta) [Conato de Agrecion verba y/o Físico]</option>
				<option>4C (Problemas de Conducta) [Aislamiento]</option>
				<option>4D (Problemas de Conducta) [Conflicto Intragrupal]</option>
				<option>4E (Problemas de Conducta) [Conflicto Intergrupal]</option>
				<option>4F (Problemas de Conducta) [Robo]</option>
				<option>4G (Problemas de Conducta) [Autoestima]</option>
				<option>4H (Problemas de Conducta) [Conflicto con el docente]</option>
				<option>5 Cambio de Domicilio</option>
				<option>6 Cambio de Instutucion</option>
				<option>7 Casamiento</option>
				<option>8 Charla Motivacional o Temática</option>
				<option>9 deceso del Alumno</option>
				<option>10A Deceso de Tutores Económicos</option>
				<option>10B Deceso de Familiar</option>
				<option>11 Divorcio / Separacion</option>
				<option>12 Económicos</option>
				<option>13 Enfermedad</option>
				<option>14A Faltas</option>
				<option>14B Retardos</option>
				<option>15 Programa de tutorías Especializadas</option>
				<option>16 Justificacion de Inasistencias</option>
				<option>17 La carrera no Cubrio sus Expectativas</option>
				<option>18 Madre o Padre Soltero</option>
				<option>19 Embarazo y/o Maternidad</option>
				<option>20 Problemas Laborales</option>
				<option>21 Problemas Familiares</option>
				<option>22A Baja Temporal</option>
				<option>22B Baja Definitiva</option>
				<option>23 Servicio Militar</option>
				<option>24 Falta de Documentos</option>
				<option>25 al Código de Etica</option>
				<option>26 Otros</option>
			</select>
		</div>
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
<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>