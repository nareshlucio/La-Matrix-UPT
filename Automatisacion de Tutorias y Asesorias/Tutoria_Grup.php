<?php 
	include 'Conexiones.php';
	$Con = db_connect();
	$sql1 = "SELECT * FROM tutores;";
	$result1 = mysqli_query($Con, $sql1);
	$consul4 = "SELECT * FROM motivostg;";
	$result4 = mysqli_query($Con, $consul4);
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
		<a class="nav-link" href="index.php">Inicio</a>
		<a class="nav-link" href="Tutoria_Ind.php">Tutorias Individuales</a>
		<a class="nav-link disabled" href="Tutoria_Grup.php">Tutorias Grupales</a>
		<a class="nav-link" href="Encuestas_Sat.php">Encuestas de Satisfacion</a>
		<a class="nav-link" href="Asesorias.php">Asesorias</a>
		<a class="nav-link disabled" href="#">Total</a>
		<a class="nav-link" href="Registro_Tut.php">Tutores</a>
		<a class="nav-link" href="Registro_Alum.php">Alumnos</a>
		<a class="nav-link" href="Registro_Prof.php">Profesores</a>
	</nav>
	<br>
	<div class="container">
		<div class="row">
			<form action="phpregister/registro_Grup.php" method="post">
				<div class="form-row">
					<div class="col-md">
						<label>Nombre del Tutor</label>
						<select class="form-control custom-select" name="Tut_nom">
    					<option selected >Seleccione un Tutor </option>
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
						<input type="text" class="form-control" name="frm_grop" placeholder="Grupo" autocomplete="off">
					</div>
				</div>
				<br>
				<div class="form-row">
					<div class="col-md">
						<label class="col-form-label">Descripcion</label>
						<textarea class="form-text form-control" placeholder="Descripcion del la Tutoria" name="frm_area"></textarea>
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
				<h5>Motivos de Asesorias Tutoria Grupal</h5>
				<select class="form-control custom-select">
				<option selected>Descripcion de Motivos</option>
				<option>1A (Desempeño) [Numero Importante de Alumnos con Materias Reprobadas]</option>
				<option>1B (Desempeño) [Num. Importantes de Alumnos en situacion de Evaluacion por Competencias]</option>
				<option>1C (Desempeño) [Baja o Nula participacion en las actividades academicas]</option>
				<option>1D (Desempeño) [Baja Calidad y Entrega en Trabajos académicos]</option>
				<option>1E (Desempeño) [Nula Entrega de Trabajos Académicos]</option>
				<option>1F (Desempeño) [Bajo Nivel en Competencias básicas o clave]</option>
				<option>1G (Desempeño) [Bajo nivel en Competencias transversales o genericas]</option>
				<option>1H (Desempeño) [Bajo nivel en Competencias técnicas o especificas]</option>
				<option>1I (Desempeño) [Seguimiento del desempeño del alumno]</option>
				<option>2A (Informativa) [Reglamento Institucional, Codigo Moral,...Reglamentos de Aulas Interactivas]</option>
				<option>2B (Informativa) [Procesos Academicos, Calendario de Evaluaciones...Becas]</option>
				<option>2C (Informativa) [Eventos, Practicas, Visitas Guiadas,... Platicas Sobre La Seguridad]</option>
				<option>3A (Problemas de Conducta) [Uso De Lenguje Inadecuado, Conductas Inadecuadas]</option>
				<option>3B (Problemas de Conducta) [Conato de Agreasion Verbal y/o Físico]</option>
				<option>3C (Problemas de Conducta) [Conflicto Intragrupal]</option>
				<option>3D (Problemas de Conducta) [Conflicto Intergrupal]</option>
				<option>3E (Problemas de Conducta) [Robo]</option>
				<option>3F (Problemas de Conducta) [Conflicto con el docente]</option>
				<option>3G (Problemas de Conducta) [Limpieza, alimentos y orden en el salón]</option>
				<option>4 Charla Motivacional o Temática</option>
				<option>5 Dinamica Grupal</option>
				<option>6 Solicitud del Alumno</option>
				<option>7 Faltas</option>
				<option>8 Retardos</option>
				<option>9 Felicitacion al Grupo</option>
				<option>10 Otros</option>
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

</body>
</html>