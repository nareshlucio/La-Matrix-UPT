<?php 
	include 'Conexiones.php';
	$Con = db_connect();
	$sql1 = "SELECT * FROM tutores;";
	$sql3 = "SELECT * FROM profesores;";
	$sql2 = "SELECT * FROM alumnos;";
	$result1 = mysqli_query($Con, $sql1);
	$result2 = mysqli_query($Con, $sql2);
	$result3 = mysqli_query($Con, $sql3);
	$i=1;
	/*if($row = mysqli_fetch_array($result1)){
	do {
		if($row["num_asesoria"] && $row["num_asesosinvalid"] && $row["num_tutoriaind"] && $row["num_tutoriagrup"] && $row["num_encu_satis"]){
			$sqlUp0 = "UPDATE tutores SET ";
		}
	} while ($row = mysqli_fetch_array($result1));
	}*/
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
	<nav class="nav">
		<a class="nav-link disabled" href="#">Inicio</a>
		<a class="nav-link" href="Tutoria_Ind.php">Tutorias Individuales</a>
		<a class="nav-link" href="Tutoria_Grup.php">Tutorias Grupales</a>
		<a class="nav-link" href="Encuestas_Sat.php">Encuestas de Satisfacion</a>
		<a class="nav-link" href="Asesorias.php">Asesorias</a>
		<a class="nav-link disabled" href="#">Total</a>
		<a class="nav-link" href="Registro_Tut.php">Registro Tutores/Profesores/Alumnos</a>
	</nav>
	<!--Cierre Menu-->
	<div class="container">
		<br>
		<form class="form-inline">
  			<div class="form-group mb-2">
    			<label for="staticEmail2" class="sr-only">Tutor</label>
    			<input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="Nombre de Tutor">
  			</div>
  			<div class="form-group mx-sm-3 mb-2">
    			<label for="inputPassword2" class="sr-only">Password</label>
    			<input type="text" class="form-control" placeholder="Nombre del Tutor">
  			</div>
  			<button type="submit" class="btn btn-primary mb-2">Buscar</button>
		</form>
		<br>
	</div>
	<div class="container-fluid">
		<div class="row-fluid">
			<div class="col-md">
	<nav class="nav">
		<a href="Tabla_Tutor" class="nav-link btn btn-dark">Tabla de Tutores</a>
		<a href="Tabla_Alumno" class="nav-link btn btn-dark">Tabla de Alumnos</a>
	</nav>
			</div>
			<br>
			<div class="col-md">
				<table border="1px" class=" table table-warning table-hover table-bordered" id="Tabla_Tutor">
				<thead class="thead-dark">
					<td><h6>Nombre del Tutor</h6></td>
					<td><h6>Numero de Telefono</h6></td>
					<td><h6>Correo Electronico</h6></td>
					<td><h6>Grupo Tutorado</h6></td>
					<td><h6>Numero de Asesorias</h6></td>
					<td><h6>Asesorias Sin Validar</h6></td><!--Numero de Asesorias sin Validar-->
					<td><h6>Numero de Tutoria individual</h6></td>
					<td><h6>Numero de Tutoria Grupal</h6></td>
					<td><h6>Calificacion de Encuestas</h6></td>
					<td><h6>Desempeño</h6></td>
					<td><h6>Entrega de Reglamento</h6></td>
				</thead>
					<?php
						if($row = mysqli_fetch_array($result1)){
							do {
								echo "<tr><td>".$row["Nombre_Tutor"]."</td><td>".$row["num_tel"]."</td><td>".$row["correo"]."</td><td>".$row["Grup_tutorado"]."</td><td>".$row["num_asesoria"]."</td><td>".$row["num_asesosinvalid"]."</td><td>".$row["num_tutoriaind"]."</td><td>".$row["num_tutoriagrup"]."</td><td>".$row["num_encu_satis"]."</td><td>".$row["desempeno"]."</td><td>".$row["Entrega_regla"]."</td></tr>"; 
							} while ($row = mysqli_fetch_array($result1));
						}else
						echo "<tr><td>No hay algun Tutor :'v</tr></td>";
					 ?>
			</table>
			</div>
		</div>
		<div class="row-fluid">
			<div class=" col-md">
				<table border="1px" class=" table table-warning table-hover table-bordered" id="Tabla_Alumno">
				<thead class="thead-dark">
					<td><h6>Nombre del Alumno</h6></td>
					<td><h6>Matricula</h6></td>
					<td><h6>Grupo</h6></td>
					<td><h6>Carrera</h6></td>
					<td><h6>Asesorias Sin Validar</h6></td>
				</thead>
				<tbody>
					<?php
						if($row = mysqli_fetch_array($result2)){
							do {
								echo "<tr><td>".$row["Nombre_Alumno"]."</td><td>".$row["Matricula"]."</td><td>".$row["Grupo"]."</td><td>".$row["Carrera"]."</td><td>".$row["Asesorias_sinvalid"]."</td></tr>"; 
							} while ($row = mysqli_fetch_array($result2));
						}else
						echo "<tr><td>No hay algun Alumno :'v</tr></td>";
					?>
				</tbody>
				</table>
			</div>
		</div>
		<div class="row-fluid">
			<div class="col-md">
				<table border="1px" class=" table table-warning table-hover table-bordered" id="Tabla_Alumno">
				<thead class="thead-dark">
					<td><h6>Nombre del Profesor</h6></td>
					<td><h6>Numero de Seguro Social</h6></td>
				</thead>
				<tbody>
					<?php
						if($row = mysqli_fetch_array($result3)){
							do {
								echo "<tr><td>".$row["Nombre_Profesor"]."</td><td>".$row["No_segu_social"]."</td></tr>"; 
							} while ($row = mysqli_fetch_array($result3));
						}else
								echo "<tr><td>No hay algun profesor :'v</td></tr>";
					?>
				</tbody>
				</table>
			</div>
		</div>
	</div>
<!--********LINKS BOOTSTRAP JAVASCRIPT**************-->
<script type="text/javascript" src="bootstrap.js"></script>
</body>
</html>