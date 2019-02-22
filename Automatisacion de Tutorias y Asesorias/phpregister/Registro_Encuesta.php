<?php
	
	require '../Conexiones.php';
	$con = db_connect();
	$consul = "SELECT * FROM tutores;";
	$result1 = mysqli_query($con, $consul);
	//------Almacenamiento de los datos sobre la Tutoria individual--------
	$Tutor = $_POST["nom_tutor"];
	$Profesor = $_POST["nom_profesor"];
	$Alumno = $_POST["alumno"];
	$pregunta1 =$_POST["pregun1"];
	$pregunta2 =$_POST["pregun2"];
	$pregunta3 =$_POST["pregun3"];
	$pregunta4 =$_POST["pregun4"];
	$promedio =$_POST["promedio"];
	$TiempoFecha = date('Y-m-d', time());
	//----------------------------------------------------------------------
	//----------------Consulta para el registro de la tutoria---------------
	$sql = "INSERT INTO encuesta_satisfaccion(Nombre_Tutor, Nombre_Maestro, Pregunta_1, Pregunta_2, Pregunta_3, Pregunta_4, Nombre_Alumno, Promedio, Fecha) VALUES ('".$Tutor."', '".$Profesor."', ".$pregunta1.", ".$pregunta2.", ".$pregunta3.", ".$pregunta4.", '".$Alumno."', ".$promedio.",'".$TiempoFecha."')";
	//---------------------------Fin del Registro--------------------------
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
	<a class="nav-link" href="../index.php">Inicio</a>
	<a class="nav-link" href="../Tutoria_Ind.php">Tutorias Individuales</a>
	<a class="nav-link" href="../Tutoria_Grup.php">Tutorias Grupales</a>
	<a class="nav-link" href="../Encuestas_Sat.php">Encuestas de Satisfacion</a>
	<a class="nav-link" href="../Asesorias.php">Asesorias</a>
	<a class="nav-link disabled" href="#">Total</a>
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
						if ($Tutor == $row["Nombre_Tutor"]) {
						$sqlUp = "UPDATE tutores SET num_encu_satis = num_encu_satis+1 WHERE Nombre_Tutor = '$Tutor'";
						if (mysqli_query($con,$sqlUp)) {
							
							}
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