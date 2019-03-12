<?php 
	require '../Conexiones.php';
	$con = db_connect();
	$consul = "SELECT * FROM tutores;";
	$result1 = mysqli_query($con, $consul);
	$nom_tut = $_POST["Tut_nom"];
	$mot = $_POST["motivosti"];
	$grupo = $_POST["frm_grop"];
	$descr = $_POST["frm_area"];
	$TiempoFecha = date('Y-m-d', time());
	$sql = "INSERT INTO tutoria_grupal (Nombre_Tutor, Motivo_Grupo, Grupo, Descripcion, Fecha) VALUES ('".$nom_tut."', '".$mot."', '".$grupo."', '".$descr."', '".$TiempoFecha."')";
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
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
<br><br>
<div class="container">
	<div class="row">
		<div class="col aling-items-center col-md-12 col-sm-12">
			<?php
			if(mysqli_query($con, $sql)){
				echo "<h1>REGISTRO CON EXITO!!!</h1>
					<h4>Desea Realizar otro registro?</h4>";
				echo "<div class='form-inline'>
			<a href='../Tutoria_Grup.php'><input class='btn btn-dark' type='botton' value='Realizar otro Registro'></a>
			<a href='../index.php'><input class='btn btn-dark' type='botton' value='Regresar al Inicio'></a>
		</div>";
				if($row = mysqli_fetch_array($result1)){
					do {
						if ($nom_tut == $row["Nombre_Tutor"]) {
						$sqlUp = "UPDATE tutores SET num_tutoriagrup = num_tutoriagrup+1 WHERE Nombre_Tutor = '$nom_tut'";
						if (mysqli_query($con,$sqlUp)){}
						}
					} while ($row = mysqli_fetch_array($result1));
				}
			} else{
				echo "<h1>HUBO UN ERROR INTENTELO MAS TARDE</h1>".$sql."<br>".mysqli_error($con);
				echo "<img src='../imgs/error.gif' width='100px' height='100px'>";
				echo "<img src='../imgs/ups.png' width='100px' height='100px'>";
				echo "<div class='form-inline'>
			<a href='../Tutoria_Grup.php'><input class='btn btn-dark' type='botton' value='Realizar otro Registro'></a>
			<a href='../index.php'><input class='btn btn-dark' type='botton' value='Regresar al Inicio'></a>
		</div>";
			}
			?>
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