<?php 
	require '../Conexiones.php';
	$con = db_connect();
	//----------------------Seccion de registro de Profesores----------------
	$nom_prof = $_POST['prof'];
	$no_seg = $_POST['no_seg'];
	$correo = $_POST['corre'];
	$telef = $_POST['telef'];
	$grupo = $_POST['grupo'];
	$horario = $_POST['hora'];
	$sqlPro = "INSERT INTO profesores (Nombre_Profesor, No_segu_social,Correo,Telefono,Grupo,Horario) VALUES ('".$nom_prof."','".$no_seg."','".$correo."','".$telef."','".$grupo."', '".$horario."')";
	//-----------------------------------------------------------------------
 ?>
<!DOCTYPE html>
 <html>
 <head>
 	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
 	<title>Registro!!!</title>
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
	<a href="#" class="nav-link disabled">Tutoria_Grupal</a>
	<a href="../Tutoria_Ind.php" class="nav-link">Tutoria Individual</a>
	<a href="../Asesorias.php" class="nav-link ">Asesoria</a>
	<a href="../Encuestas_Sat.php" class="nav-link">Encuestas de Satisfaccion</a>
</nav>
<br><br>
<div class="container">
	<div class="row">
		<div class="col aling-items-center">
			<?php
			//Registro de Profesores
			if(mysqli_query($con, $sqlPro)){
				echo "<h1>REGISTRO CON EXITO!!!</h1>
			<h4>Desea Realizar otro registro?</h4>";
			} else{
				echo "<h1>HUBO UN ERROR INTENTELO MAS TARDE</h1>".$sqlPro."<br>".mysqli_error($con);
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