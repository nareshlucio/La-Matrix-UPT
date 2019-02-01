<?php require 'Conexiones.php';
	$Con = db_connect();
	$sql1 = "SELECT * FROM tutores;";
	$sql3 = "SELECT * FROM profesores;";
	$sql2 = "SELECT * FROM alumnos;";
	$sqlCa = "SELECT * FROM carrera";
	$result1 = mysqli_query($Con, $sql1);
	$result2 = mysqli_query($Con, $sql2);
	$result3 = mysqli_query($Con, $sql3);
	$carre = mysqli_query($Con, $sqlCa);
	$i=1;
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<title></title>
	<meta charset="UTF-8">
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
	<a class="nav-link disabled" href="#">Registro Tutores/Profesores/Alumnos</a>
</nav>
<br><br>
<div class="container">
	<div class="row">
	<form class="form" action="registro_tut-prof-alu.php" method="post">
		<div class="form-row">
			<div class="col">
			<h6>Registro Tutor</h6>
			<input class="input-group-text form-control" type="text" name="nom_tut" placeholder="Nombre del Tutor">
			<br>
			<input type="submit" class="btn btn-primary" value="Registrar">
		</div>
	</div>
	</form>
	<form class="form" action="registro_tut-prof-alu.php" method="post">
		<br>
		<div class="form-row">
		<div class="col">
			<h6>Registro Alumno</h6>
			<input class="input-group-text form-control" type="text" name="nom_alu" placeholder="Nombre del Alumno">
		</div>
		<div class="col">
			<h6>Matricula</h6>
			<input class="input-group-text form-control" type="text" name="matri" placeholder="No. Matricula">
		</div>
		<div class="col">
			<h6>Grupo</h6>
			<input class="input-group-text form-control" type="text" name="grupo" placeholder="Grupo">
		</div>
		<div class="col">
				<h6>Carrera</h6>
  				<select class="form-control custom-select">
    				<option selected name="carrera">seleccione una carrera </option>
    				<?php
    					if($row = mysqli_fetch_array($carre)){
							do {
								echo "<option value='".$i++."'>".$row["Nombre_de_Carrera"]."</option>"; 
								} while ($row = mysqli_fetch_array($carre));
						}else{
							echo "<option>No hay Registros </option>";
						}
					?>
  				</select>
			</div>
		</div>
		<br>
		<input type="submit" value="Registrar" class="btn btn-primary">
	</form>
		<br>
		<form class="form" action="registro_tut-prof-alu.php" method="post">
			<br>
		<div class="form-row">
			<div class="col-md-6">
				<h6>Registro Profesor</h6>
				<input class="input-group-text form-control" type="text" name="prof" placeholder="Nombre del Profesor">
			</div>
			<div class="col-md">
				<h6>No. de Seguro Social</h6>
				<input class="input-group-text form-control" type="text" name="no_seg" placeholder="Numero de seguro social">
			</div>
		</div>
		<br>
		<div class="form-row">
			<div class="col">
				<input type="submit" class="btn btn-primary" value="Registrar">
			</div>
		</div>
	</form>
</div>
</div>
<br>
<div class="container-fluid">
	<div class="row">
		<div class="col">
			<table  border="1px" class=" table table-dark table-hover table-bordered">
				<thead class="thead-dark">
					<td><h6>Nombre del Tutor</h6></td>
				</thead>
					<?php
						if($row = mysqli_fetch_array($result1)){
							do {
								echo "<tr><td>".$row["Nombre_Tutor"]."</td></tr>"; 
							} while ($row = mysqli_fetch_array($result1));
						}else
						echo "<tr><td>No hay algun Tutor :'v</tr></td>";
					 ?>
			</table>
		</div>
		<div class="col">
			<table border="1px" class=" table table-dark table-hover table-bordered">
					<thead class="thead-dark">
						<td><h6>Nombre del Profesor</h6></td>
						<td><h6>Numero de seguro social</h6></td>
					</thead>
						<tr rowspan="2">
						<?php
							if($row = mysqli_fetch_array($result3)){
								do {
									echo "<td>".$row["Nombre_Profesor"]."</td><td>".$row["No_segu_social"]."</td>"; 
								} while ($row = mysqli_fetch_array($result3));
							}else
								echo "<tr><td>No hay algun profesor :'v</tr></td>";
						?>
						</tr>
				</table>
			</div>
	</div>
	<div class="row">
		<div class="col">
			<table border="1px" class=" table table-dark table-hover table-bordered">
				<thead class="thead-dark">
					<td><h6>Nombre del Alumno</h6></td>
					<td><h6>Matricula</h6></td>
					<td><h6>Grupo</h6></td>
					<td><h6>Carrera</h6></td>
				</thead>
				<tbody>
					<?php
						if($row = mysqli_fetch_array($result2)){
							do {
								echo "<tr><td>".$row["Nombre_Alumno"]."</td><td>".$row["Matricula"]."</td><td>".$row["Grupo"]."</td><td>".$row["Carrera"]."</td></tr>"; 
							} while ($row = mysqli_fetch_array($result2));
						}else
						echo "<tr><td>No hay algun Alumno :'v</tr></td>";
					?>
				</tbody>
			</table>
		</div>
	</div>
</div>
<br>
<div class="container-fluid" style="background-color: gray;">
	<br><br><br>
</div>
</body>
</html>
<?php mysqli_close($Con); ?>