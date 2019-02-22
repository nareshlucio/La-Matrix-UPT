<?php require 'Conexiones.php';
	$Con = db_connect();
	$sql1 = "SELECT * FROM desempeno";
	$result1 = mysqli_query($Con, $sql1);

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
	<a class="nav-link disabled" href="Registro_Tut.php">Tutores</a>
	<a class="nav-link" href="Registro_Alum.php">Alumnos</a>
	<a class="nav-link" href="Registro_Prof.php">Profesores</a>
</nav>
<br><br>
<div class="container">
	<div class="row">
	<form class="form" action="phpregister/registro_tut.php" method="post">
		<div class="col">
		<div class="form-row">
			<div class="col">
			<h6>Registro Tutor</h6>
			<input class="form-control" type="text" name="nom_tut" placeholder="Nombre del Tutor" autocomplete="off">
			</div>
		</div>
		<br>
		<div class="form-row">
			<div class="col">
			<h6>Grupo Tutorado</h6>
			<input class="form-control" type="text" name="nom_grup" placeholder="Grupo" autocomplete="off">
			</div>
		</div>
		<br>
		<div class="form-row">
			<div class="col">
			<h6>Numero de Telefono</h6>
			<input class="form-control" type="text" name="nom_tel" placeholder="Telefono celular" autocomplete="off">
			</div>
		</div>
		<br>
		<div class="form-row">
			<div class="col">
			<h6>Correo Electronico</h6>
			<input class="form-control" type="text" name="nom_corr" placeholder="Correo Electronico" autocomplete="off">	
			</div>
		</div>
		<br>
		<div class="form-row">
			<div class="col">
			<h6>Desempeño</h6>
			<select class="form-control custom-select" name="desem">
    			<option selected name="desempeño">seleccione una carrera</option>
    			<?php
    				if($row = mysqli_fetch_array($result1)){
						do {
							echo "<option value='".$row["desempenos"]."'>".$row["desempenos"]."</option>"; 
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
			<div class="col">
			<h6>Entrega de Reglamento</h6>
			<select class="form-control custom-select" name="regla">
				<option selected> Opcion</option>
				<option value="Si">Si</option>
				<option value="No">No</option>
			</select>	
			</div>
		</div>
		<br>
			<div class="form-row">
				<input type="submit" class="btn btn-primary" value="Registrar">
			</div>
		</div>
	</form>
		<br>
	</div>
</div>
<br>
<div class="container-fluid" style="background-color: gray;">
	<br><br><br>
</div>
</body>
</html>
<?php mysqli_close($Con); ?>