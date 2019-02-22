<?php 
	require '../Conexiones.php';
	$con = db_connect();
	$consul = "SELECT * FROM tutores";
	$consul2 ="SELECT * FROM alumnos";
	$result1 = mysqli_query($con, $consul);
	$result2 = mysqli_query($con, $consul2);
	$TiempoFecha = date('Y-m-d', time());
	//------Almacenamiento de los datos sobre la Asesortia -----------------
	$nom_tuts = $_POST["selnom_tut"];
	$nom_alum = $_POST["selnom_alum"];
	$gene;
	$mot = $_POST["Motivo"];
	$grupo = $_POST["Grupo"];
	$Calif = $_POST["Calif"];
	$descr = $_POST["txt_areaDes"];
	//----------------------------------------------------------------------
	//---------chekeo sobre el genero de la Asesoria -----------------------
	if ($_POST["gridRadios"] === "Hombre") {
		$gene = $_POST["gridRadios"];
	}else
		$gene = $_POST["gridRadios"];
	//--------------------------fin de la comprobacion----------------------
	//Consulta para el registro de la Asesoria
	$sql = "INSERT INTO asesorias(Nombre_Tutor, Nombre_Alumno, Motivo_Asesoria, Genero, Grupo, Calificacion, Descripcion_Motivo, Fecha) VALUES ('".$nom_tuts."', '".$nom_alum."', '".$mot."', '".$gene."', '".$grupo."', ".$Calif.", '".$descr."','".$TiempoFecha."')";
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
#----------------Actualizacion de las asesorias para los tutores-------------
				if($row = mysqli_fetch_array($result1)){
					do {
						if ($nom_tuts == $row["Nombre_Tutor"]) {
						$sqlUp = "UPDATE tutores SET num_asesoria = num_asesoria + 1 WHERE Nombre_Tutor = '$nom_tuts'";
						$sqlUp2 = "UPDATE tutores SET num_asesosinvalid = num_asesosinvalid + 1 WHERE Nombre_Tutor ='$nom_tuts'";
						if (mysqli_query($con,$sqlUp)) {}
						if (mysqli_query($con,$sqlUp2)){}
						}
					} while ($row = mysqli_fetch_array($result1));
				}else{
					echo "Ocurrio un error inesperado al hacer el registro";
				}
#------------------------Fin de la comprobacion y Actualizacion----------------
#---------------------Actualizacion de asesorias de los Alumnos----------------
				if($row = mysqli_fetch_array($result2)){
					do {
						if ($nom_alum == $row["Nombre_Alumno"]) {
						$sqlUpAl = "UPDATE alumnos SET Asesorias_sinvalid= Asesorias_sinvalid + 1 WHERE Nombre_Alumno = '$nom_alum'";
						if (mysqli_query($con,$sqlUpAl)){}
						}
					} while ($row = mysqli_fetch_array($result2));
				}else{
					echo "Ocurrio un error inesperado al hacer el registro";
				}
#------------------------Fin de la Actualizacion de los alumnos----------------
			}else{
				echo "<h1>HUBO UN ERROR INTENTELO MAS TARDE</h1>".$sql."<br>".mysqli_error($con);
				echo "<img src='../imgs/error.gif' width='100px' height='100px'>";
				echo "<img src='../imgs/ups.png' width='100px' height='100px'>";
			}?>
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
