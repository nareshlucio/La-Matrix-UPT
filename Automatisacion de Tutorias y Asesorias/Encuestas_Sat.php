<?php 
	require 'Conexiones.php';
	$Con = db_connect();
	$sql1 = "SELECT * FROM tutores;";
	$sql3 = "SELECT * FROM profesores;";
	$sql2 = "SELECT * FROM alumnos;";
	$result1 = mysqli_query($Con, $sql1);
	$result2 = mysqli_query($Con, $sql2);
	$result3 = mysqli_query($Con, $sql3);
	ini_set('date.timezone', 'America/Mexico_City');
	$TiempoFecha = date('Y-m-d', time());
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!--Aparado de CSS-->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<!--Cierre de CSS-->
	<title>Encuesta de Satisfaccion</title>
</head>
<body onload="mueveReloj()">
<div class="container-fluid" style="background-color: #FFC300;">
	<div class="row">
		<div class="col-md-4">
			<img src="imgs/logo-uni.png" width="100px" height="100px">
		</div>
		<div class="col">
			<br>
			<h1>Encuestas de Satisfaccion</h1>
		</div>
	</div>
</div>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php">Inicio</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    <!--Menu desplegable de Tutorias Individuales-->
      <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Tutorias Individuales</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        	<a class="dropdown-item" href="Tutoria_Ind.php">Registrar Tutoria</a>
          	<a class="dropdown-item" href="phpregister/MostrarTutInd.php">Mostrar Tutorias</a>
        </div>
      </li>
      <!--Final de el Menu despegable-->
      <!--Menu despegable Tutorias Grupaes-->
      <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Tutorias Grupales</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="Tutoria_Grup.php">Insertar Tutoria</a>
          <a class="dropdown-item" href="phpregister/MostrarTutGrup.php">Mostrar Tutorias</a>
        </div>
      </li>
      <!--Final de el Menu despegable-->
      <!--Menu despegable Encuestas de Satisfaccion-->
      <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Encuestas de Satisfaccion</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        	<a class="dropdown-item disabled" href="Encuestas_Sat.php">Registrar Encuesta</a>
            <a class="dropdown-item" href="phpregister/MostrarEncuestas.php">Mostrar Encuestas</a>
        </div>
      </li>
      <!--Final de el Menu despegable-->
      <!--Menu despegable Asesoria-->
      <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Asesorias</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        	<a class="dropdown-item" href="Asesorias.php">Registrar Asesoria</a>
          	<a class="dropdown-item" href="phpregister/MostrarAseso.php">Mostrar Asesoriass</a>
        </div>
      </li>
      <!--Final de el Menu despegable-->
      <li class="nav-item active">
        <a class="nav-link" href="Reportes.php">Reportes<span class="sr-only"></span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="Registro_Alum.php">Alumnos<span class="sr-only"></span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="Registro_Prof.php">Profesor<span class="sr-only"></span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="Registro_Tut.php">Tutores<span class="sr-only"></span></a>
      </li>
      <li class="nav-item active">
      	<a class="nav-link" href=""><?php echo $TiempoFecha;?></a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0" name="form_reloj">
      <input type="text" name="reloj" size="10" class="form-control"> 
    </form>
  </div>
</nav>
	<br>
<div class="container">
	<div class="row">
		<div class="col-md-6 offset-md-3">
			<div class="card card-body">
				<form class="form" action="phpregister/Registro_Encuesta.php" method="post">
					<div class="form-group">
						<label class="form-col-label">Tutor</label>
						<select class="form-control custom-select" name="nom_tutor">
							<option selected name="default">Seleccione un Tutor</option>
							<?php
								if($row = mysqli_fetch_array($result1)){
									do {
										echo "<option value='".$row["Nombre_Tutor"]."'>".$row["Nombre_Tutor"]."</option>"; 
									} while ($row = mysqli_fetch_array($result1));
								}
								else{
									echo "<option value='default2'> no hay registros</option>";
								}
					 		?>
						</select>
					</div>
					<br>
					<div class="form-group">
						<label class="form-col-label">Profesor / Maestro</label>
						<select class="form-control custom-select" name="nom_profesor">
							<option selected name="default">Seleccione Profesor</option>
							<?php
								if($row = mysqli_fetch_array($result3)){
									do {
										echo "<option value='".$row["Nombre_Profesor"]."'>".$row["Nombre_Profesor"]."</option>"; 
									} while ($row = mysqli_fetch_array($result3));
								}
								else{
									echo "<option value='default2'> no hay registros</option>";
								}
							?>
						</select>
					</div>
					<br>
					<div class="form-group">
						<label class="form-col-label">Pregunta 1</label>
						<input type="number" class="form-control" name="pregun1" placeholder="Calificacion" id="Prom1">
					</div>
					<br>
					<div class="form-group">
						<label class="form-col-label">Pregunta 2</label>
						<input type="number" class="form-control" name="pregun2" placeholder="Calificacion" id="Prom2">
					</div>
					<br>
					<div class="form-group">
						<label class="form-col-label">Pregunta 3</label>
						<input type="number" class="form-control" name="pregun3" placeholder="Calificacion" id="Prom3">
					</div>
					<br>
					<div class="form-group">
						<label class="form-col-label">Pregunta 4</label>
						<input type="number" class="form-control" name="pregun4" placeholder="Calificacion" id="Prom4">
					</div>
					<br>
					<div class="form-group">
						<label class="form-col-label">Alumno</label>
						<select class="form-control custom-select" name="alumno">
							<option selected name="">Seleccione un Alumno</option>
							<?php
							if($row = mysqli_fetch_array($result2)){
								do {
									echo "<option value='".$row["Nombre_Alumno"]."'>".$row["Nombre_Alumno"]."</option>"; 
								} while ($row = mysqli_fetch_array($result2));
							}
							else{
								echo "<option value='1'> no hay registros</option>";
							}
							?>
						</select>
					</div>
					<br>
<!--				Necesita Formula para poder realizar el calculo de Promedio 	-->
					<div class="form-group">
						<label class="form-col-label">Promedio</label>
						<input type="number" class="form-control" name="promedio" placeholder="Calificacion Total" id="Prom">
					</div>
<!--				Necesita Formula para poder realizar el calculo de Promedio 	-->
					<br>
					<div class="form-group">
						<input type="submit" value="Enviar" class="btn btn-dark">
						<input type="reset" value="Limpiar" class="btn btn-dark">
					</div>
					</div>
					<br>
				</form>
			</div>
		</div>
	</div>
</div>
<div class="container-fluid" style="background-color: gray;">
	<br>
	<br>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<!--SCRIPT DEL RELOJ-->
<script language="JavaScript"> 
function mueveReloj(){ 
   	momentoActual = new Date() 
   	hora = momentoActual.getHours() 
   	minuto = momentoActual.getMinutes() 
   	segundo = momentoActual.getSeconds() 

   	horaImprimible = hora + " : " + minuto + " : " + segundo 

   	document.form_reloj.reloj.value = horaImprimible 

   	setTimeout("mueveReloj()",1000) 
} 
</script>
<script type="text/javascript" src="js/bootstrap-validate.js"></script>
<script type="text/javascript">
	bootstrapValidate('#Prom1', 'numeric:Solo se aceptan caracteres numericos')
	bootstrapValidate('#Prom2', 'numeric:Solo se aceptan caracteres numericos')
	bootstrapValidate('#Prom3', 'numeric:Solo se aceptan caracteres numericos')
	bootstrapValidate('#Prom4', 'numeric:Solo se aceptan caracteres numericos')
	//Script para obligar al usuario a que no deje vacio el campo
	bootstrapValidate('#Prom', 'required:Se requiere el campo para continuar')
	bootstrapValidate('#Prom1', 'required:Se requiere el campo para continuar')
	bootstrapValidate('#Prom2', 'required:Se requiere el campo para continuar')
	bootstrapValidate('#Prom3', 'required:Se requiere el campo para continuar')
	bootstrapValidate('#Prom4', 'required:Se requiere el campo para continuar')

</script>
</body>
</html>
<?php mysqli_close($Con);?>