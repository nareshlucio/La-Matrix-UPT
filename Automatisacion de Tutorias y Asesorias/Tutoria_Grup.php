<?php 
	include 'Conexiones.php';
	$Con = db_connect();
	$sql1 = "SELECT * FROM tutores;";
	$result1 = mysqli_query($Con, $sql1);
	$i=1;
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
		<a class="nav-link" href="../index.php">Inicio</a>
		<a class="nav-link" href="../Tutoria_Ind.php">Tutorias Individuales</a>
		<a class="nav-link disabled" href="../Tutoria_Grup.php">Tutorias Grupales</a>
		<a class="nav-link" href="../Encuestas_Sat.php">Encuestas de Satisfacion</a>
		<a class="nav-link" href="../Asesorias.php">Asesorias</a>
		<a class="nav-link disabled" href="#">Total</a>
		<a class="nav-link" href="../Registro_Tut.php">Registro Tutores/Profesores/Alumnos</a>
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
						<label>Motivo</label>
						<input type="text" class="form-control" name="frm_moti" placeholder="Motivo del grupo" autocomplete="off">
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