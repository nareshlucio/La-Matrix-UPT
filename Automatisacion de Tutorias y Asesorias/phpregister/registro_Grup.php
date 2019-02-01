<?php 
	require '../Conexiones.php';
	$con = db_connect();
	$consul = "SELECT * FROM tutores;";
	$result1 = mysqli_query($con, $consul);
	$nom_tut = $_POST["Tut_nom"];
	$mot = $_POST["frm_moti"];
	$grupo = $_POST["frm_grop"];
	$descr = $_POST["frm_area"];
	$sql = "INSERT INTO tutoria_grupal (Nombre_Tutor, Motivo_Grupo, Grupo, Descripcion) VALUES ('".$nom_tut."', '".$mot."', '".$grupo."', '".$descr."')";
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<title></title>
	<meta charset="utf-8">
</head>
<body>
<div class="container-fluid" style="background-color: #FFC300;">
	<div class="row">
		<div class="col-md-4">
			<img src="../imgs/logo-uni.png" width="100px" height="100px">
		</div>
		<div class="col">
			<h1 class="col-label">Universidas Politecica de Tecamac</h1>
		</div>
	</div>
</div>
<nav class="nav">
	<a href="../index.php" class="nav-link">Inicio</a>
	<a href="../Tutoria_Grup.php" class="nav-link ">Tutoria_Grupal</a>
	<a href="../Tutoria_Ind.php" class="nav-link">Tutoria Individual</a>
	<a href="../Asesorias.php" class="nav-link ">Asesoria</a>
	<a href="../Encuestas_Sat.php" class="nav-link">Encuestas de Satisfaccion</a>
	<a class="nav-link" href="../Registro_Tut.php">Registro Tutores/Profesores/Alumnos</a>
</nav>
<br><br>
<div class="container">
	<div class="row">
		<div class="col aling-items-center">
			<?php
			if(mysqli_query($con, $sql)){
				echo "<h1>REGISTRO CON EXITO!!!</h1>
			<h4>Desea Realizar otro registro?</h4>";
				if($row = mysqli_fetch_array($result1)){
					do {
						if ($nom_tut == $row["Nombre_Tutor"]) {
						$sqlUp = "UPDATE tutores SET num_tutoriagrup = num_tutoriagrup+1 WHERE Nombre_Tutor = '$nom_tut'";
						if (mysqli_query($con,$sqlUp)){}
						}
					} while ($row = mysqli_fetch_array($result1));
				}else{
					echo "Ocurrio un error inesperado al hacer el registro";
				}
			} else{
				echo "<h1>HUBO UN ERROR INTENTELO MAS TARDE</h1>".$sql."<br>".mysqli_error($con);
				echo "<img src='../imgs/error.gif' width='100px' height='100px'>";
				echo "<img src='../imgs/ups.png' width='100px' height='100px'>";
			}
			?>
		</div>
		<div class="form-inline">
			<button class="btn-dark" value="Registrar"><a href="Tutoria_Grup"></a></button>
			<button class="btn-dark" value="Inicio"><a href="index.php"></a></button>
		</div>
	</div>
</div>
<br><br>
<div class="container-fluid" style="background-color: gray;">
	<br>
	<br>
	<br>
</div>
</body>
</html>