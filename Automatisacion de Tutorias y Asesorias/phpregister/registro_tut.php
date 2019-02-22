<?php 
	require '../Conexiones.php';
	$con = db_connect();
	//----------------------Seccion de registro de Tutores------------------
	$nom_Tut = $_POST['nom_tut'];
	$nom_Grup = $_POST['nom_grup'];
	$num_Tel = $_POST['nom_tel'];
	$corr = $_POST['nom_corr'];
	$dem = $_POST['desem'];
	$regl = $_POST['regla'];
	$sqlTu = "INSERT INTO tutores (Nombre_Tutor, Grup_tutorado,num_tel,correo,num_asesoria,num_asesosinvalid,num_tutoriaind,num_tutoriagrup,num_encu_satis,desempeno,Entrega_regla) VALUES ('".$nom_Tut."', '".$nom_Grup."','".$num_Tel."','".$corr."',0,0,0,0,0,'".$dem."','".$regl."')";
	//----------------------------------------------------------------------
 ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<meta charset="utf-8">
	<title></title>
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
				//Registro de Tutores
				if(mysqli_query($con, $sqlTu)){
					echo "<h1>REGISTRO CON EXITO!!!</h1>
			<h4>Desea Realizar otro registro?</h4>";
				} else{
					echo "<h1>HUBO UN ERROR INTENTELO MAS TARDE</h1>".$sqlTu."<br>".mysqli_error($con);
				}?>
				<button value="SI" class="btn btn-success"><a href="registro_tut-prof-alu.php" value="Si"></a></button>
				<button value="NO" class="btn btn-warning" value="No"><a href="index.php"></a></button>
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