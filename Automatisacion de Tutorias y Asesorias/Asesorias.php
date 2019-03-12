<?php require 'Conexiones.php';
	$Con = db_connect();
	$sql1 = "SELECT * FROM tutores;";
	$sql2 = "SELECT * FROM alumnos";
	$Consul3 = "SELECT * FROM motivosa";
	$result1 = mysqli_query($Con, $sql1);
	$result2 = mysqli_query($Con, $sql2);
	$result3 = mysqli_query($Con, $Consul3);
	ini_set('date.timezone', 'America/Mexico_City');
	$TiempoFecha = date('Y-m-d', time());
?>
<!DOCTYPE html>
<html>
<head>
	<!--Aparado de CSS-->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<!--Cierre de CSS-->
	<title>Generador de Asesorias</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body onload="mueveReloj()">
<div class="container-fluid" style="background-color: #FFC300;">
	<div class="row">
		<div class="col-md-5 col-sm-6">
			<img src="imgs/logo-uni.png" width="100px" height="100px" class="img-fluid">
		</div>
		<div class="col d-flex align-items-center">
			<h1>Asesorias</h1>
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
        	<a class="dropdown-item" href="Encuestas_Sat.php">Registrar Encuesta</a>
            <a class="dropdown-item" href="phpregister/MostrarEncuestas.php">Mostrar Encuestas</a>
        </div>
      </li>
      <!--Final de el Menu despegable-->
      <!--Menu despegable Asesoria-->
      <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Asesorias</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        	<a class="dropdown-item disabled" href="Asesorias.php">Registrar Asesoria</a>
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
		<div class="col-md-6 offset-md-auto col-sm-6">
			<div class="card card-body">
				<form action="phpregister/Registro_Aseso.php" method="post">
				<div class="form-group">
					<label class="form-col-label">Tutor</label>
					<select class="form-control custom-select" name="selnom_tut" >
    				<option selected name="Tutor_grup">Seleccione un Tutor </option>
					<?php
    				if($row = mysqli_fetch_array($result1)){
						do {
								echo "<option value='".$row["Nombre_Tutor"]."'>".$row["Nombre_Tutor"]."</option>"; 
						} while ($row = mysqli_fetch_array($result1));
					}else{
						echo "<option>No hay Registros </option>";
					}
					?>
					</select>
				</div>
				<br>
				<div class="form-group">
					<label class="form-col-label">Alumno</label>
					<select class="form-control custom-select" name="selnom_alum" >
    				<option selected name="default">Seleccione un Alumno </option>
					<?php
    				if($row = mysqli_fetch_array($result2)){
						do {
								echo "<option value='".$row["Nombre_Alumno"]."'>".$row["Nombre_Alumno"]."</option>"; 
							} while ($row = mysqli_fetch_array($result2));
					}else{
						echo "<option>No hay Registros </option>";
					}
					?>
					</select>
				</div>
				<br>
				<div class="form-group">
					<label class="form-col-label">Motivo de la Asesoria</label>
					<select class="form-control custom-select" name="motivosti">
    				<option selected name="defaul">Seleccione un motivo</option>
					<?php
    				if($row = mysqli_fetch_array($result3)){
							do {
									echo "<option value='".$row["motivo"]."'>".$row["motivo"]."</option>"; 
							} while ($row = mysqli_fetch_array($result3));
						}
						else{
							echo "<option value = '1'> no hay registros</option>";
						}
					?>
					</select>
				</div>
				<br>
				<div class="form-group">
					<div class="col-md">
						<label class="form-col-label">Genero</label>
						<div class="form-check">
          				<input class="form-check-input" type="radio" name="gridRadios" value="Hombre" checked>
          				<label class="form-check-label" for="gridRadios1"> Hombre</label>
          			</div>
          			<div class="form-check">
          				<input class="form-check-input" type="radio" name="gridRadios" value="Mujer">
          				<label class="form-check-label" for="gridRadios2">Mujer</label>
        			</div>
					</div>
				</div>
				<br>
				<div class="form-group">
					<div class="col">
						<label class="form-col-label">Grupo</label>
						<input type="text" class="form-control" name="Grupo" placeholder="Grupo" id="Grupo">
					</div>
				</div>
				<br>
				<div class="form-group">
					<div class="col-md">
						<label class="form-col-label">Calificacion</label>
						<input type="number" class="form-control" name="Calif" placeholder="Calificacion" id="cali">
					</div>
				</div>
				<br>
				<div class="form-group">
					<div class="col-md">
						<label class="form-col-label">Descripcion</label>
						<textarea class="form-control form-text" name="txt_areaDes"placeholder="Descripcion del Motivo" id="txtarea"></textarea>
					</div>
				</div>
				<br>
				<div class="form-group">
					<input type="submit" value="Enviar" class="btn btn-dark">
					<input type="reset" value="Limpiar" class="btn btn-dark">
				</div>
				<br>
		</form>
			</div>
		</div>
		<div class="col-md-auto">
			<h4>Tipos de Motivos de Asesorias</h4>
			<select class="form-control">
				<option selected>Seleccione una Opcion</option>
				<option>1A [Desempeño] (Materias Reprobadas Indicar cuántas y cuáles)</option>
				<option>1B [Desempeño] (Evaluacion de Competencias)</option>
				<option>1C [Desempeño] (Bajo o Nulo Desempeño Académico)</option>
				<option>1D [Desempeño] (Baja Calidad en Trabajos Académicos)</option>
				<option>1E [Desempeño] (Nula Entrega de Trabajos Académicos)</option>
				<option>1F [Desempeño] (Aclaracion de Dudas)</option>
				<option>1G [Desempeño] (Para Presentar Evaluación por Recuperación)</option>
				<option>1H [Desempeño] (Asesoría Estancia/Estadía)</option>
				<option>2 [Temática] (Diferentes temas Especificar en Observaciones)</option>
				<option>3 [Otros] (Especificar)</option>
			</select>
		</div>
	</div>
</div>
<br>
<div class="container-fluid" style="background-color: gray;">
	<br>
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
	bootstrapValidate('#Grupo', 'max:6:Introdusca minimo 6 caracteres')
	bootstrapValidate('#Grupo', 'min:6:Introdusca minimo 6 caracteres')
	bootstrapValidate('#cali', 'numeric:Solo se aceptan Caracteres Numericos')
	bootstrapValidate('#txtarea', 'min:100:Necesitamos un minimo de 40 palabras')
	bootstrapValidate('#txtarea', 'max:199:Se esta sobrepasando de el limite')
</script>
</body>
</html>