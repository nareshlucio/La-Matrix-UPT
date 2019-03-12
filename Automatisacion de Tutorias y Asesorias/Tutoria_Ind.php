<?php 
	require 'Conexiones.php';
	$Con = db_connect();
	$consul = "SELECT * FROM tutores;";
	$consul2 = "SELECT * FROM profesores;";
	$consul3 = "SELECT * FROM alumnos;";
	$consul4 = "SELECT * FROM motivosti;";
	$result1 = mysqli_query($Con, $consul);
	$result2 = mysqli_query($Con, $consul2);
	$result3 = mysqli_query($Con, $consul3);
	$result4 = mysqli_query($Con, $consul4);
	ini_set('date.timezone', 'America/Mexico_City');
	$TiempoFecha = date('Y-m-d', time());
?>
<!DOCTYPE html>
<html>
<head>
	<!--Apartado de CSS-->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<title>Generador de Tutorias Individuales</title>
</head>
<body onload="mueveReloj()">
<div class="container-fluid" style="background-color: #FFC300;">
	<div class="row">
		<div class="col-md-5 col-sm-6">
			<a href="index.php"><img src="imgs/logo-uni.png" width="100px" height="100px" class="img-fluid"></a>
		</div>
		<div class="col-md-6 col-sm-9">
			<br>
			<h1>Tutorias Individuales</h1>
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
        	<a class="dropdown-item disabled" href="Tutoria_Ind.php">Registrar Tutoria</a>
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
</nav>	<br>
<div class="container">
	<div class="row">
		<div class="col-md-5 offset-md-1 col-sm-5">
			<div class="card card-body">
				<form method="post" action="phpregister/registro_indi.php">
					<div class="form-group">
					<label class="page-header">Nombre del Tutor</label>
						<select class="form-control custom-select" name="Tutor">
    					<option selected name="defaul">Seleccione un Tutor </option>
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
					<br>
					<div class="form-row">
						<div class="col-md">
							<label>Profesor/Maestro</label>
							<select class="form-control custom-select" name="Prof">
    							<option selected name="Default">Seleccione un Profesor </option>
							<?php
    						if($row = mysqli_fetch_array($result2)){
									do {
										echo "<option value='".$row["Nombre_Profesor"]."'>".$row["Nombre_Profesor"]."</option>"; 
									} while ($row = mysqli_fetch_array($result2));
								}
								else{
									echo "<option value='1'> No hay registros</option>";
								}
							?>
							</select>
						</div>
					</div>
					<br>
					<div class="form-row">
						<div class="col-md">
							<label>Alumno</label>
							<select class="form-control custom-select" name="Alum">
    							<option selected name="Defaulta">Seleccione un Alumno </option>
								<?php
    							if($row = mysqli_fetch_array($result3)){
									do {
										echo "<option value='".$row["Nombre_Alumno"]."'>".$row["Nombre_Alumno"]."</option>"; 
									} while ($row = mysqli_fetch_array($result3));
								}
								else{
									echo "<option value='1'> no hay registros </option>";
								}
							?>
							</select>
						</div>
					</div>
					<br>
					<div class="form-group">
						<div class="form-check">
  							<input class="form-check-input" type="radio" name="gridRadios" value="Hombre" checked>
  							<label class="form-check-label" for="exampleRadios1"> Hombre </label>
						</div>
						<div class="form-check">
  							<input class="form-check-input" type="radio" name="gridRadios" value="Mujer">
  							<label class="form-check-label" for="exampleRadios2"> Mujer </label>
						</div>		
					</div>
					<br>
					<div class="form-group">
						<label>Motivo de la Asesoria</label>
						<select class="form-control custom-select" name="motivosti">
    					<option selected name="defaul">Seleccione un motivo</option>
						<?php
    					if($row = mysqli_fetch_array($result4)){
							do {
								echo "<option value='".$row["motivo"]."'>".$row["motivo"]."</option>"; 
							} while ($row = mysqli_fetch_array($result4));
						}
						else{
							echo "<option value = '1'> no hay registros</option>";
						}
						?>
						</select>
					</div>
					<br>
					<div class="form-group">
						<label>Grupo</label>
						<input type="text" class="form-control" name="Grupo" placeholder="Nombre del Gurpo" autocomplete="off" id="Grupo">
					</div>
					<br>
					<div class="form-group">
						<label>Descripcion</label>
						<textarea class="form-text form-control" placeholder="Descripcion de la Tutoria" name="txt_area" id="txtarea"></textarea>
					</div>
					<br>
					<div class="form-group">
						<input type="submit" value="Enviar" class="btn btn-dark">
						<input type="reset" value="Limpiar" class="btn btn-dark">
					</div>
				</form>	
			</div>
			<br>
		</div>
		<div class="col-md-5">
		<h5>Motivos de Asesorias Tutoria Individual</h5>
		<select class="form-control custom-select">
			<option selected>Descripcion de Motivos</option>
			<option>1 (Conocer al Alumno)</option>
			<option>2A (Desempeño) [Materias Reprobadas (Especificar En Descripcion)]</option>
			<option>2B (Desempeño) [Evaluacion por Competencias]</option>
			<option>2C (Desempeño) [Baja o nula participacion en las actividades académicas]</option>
			<option>2D (Desempeño) [Baja calidad en trabajos académicos]</option>
			<option>2E (Desempeño) [Nula Entrega de Trabajos Academicos]</option>
			<option>2F (Desempeño) [Plan de Nivelacion]</option>
			<option>2G (Desempeño Estancia/Estadia) [Asesor reporta bajo desempeño]</option>
			<option>2H (Desempeño Estancia/Estadia) [Asesor reporta Faltas y/o Retardos]</option>
			<option>2I (Desempeño Estancia/Estadia) [Asesor reporta Alumnos Conflictivos]</option>
			<option>2J (Desempeño Estancia/Estadia) [El Empresario Asesor reporta bajo desempeño]</option>
			<option>2K (Desempeño Estancia/Estadia) [El Empresario Asesor reporta Faltas y/o Retardos]</option>
			<option>2L (Desempeño Estancia/Estadia) [El Empresario Asesor reporta Alumnos Conflictivos]</option>
			<option>3A (Informativa) [Reglamento Institucional, Codigo de Moral, Lineamientos de Seguridad... Reglamento]</option>
			<option>3B (Informativa) [Procesos Academicos, Fechas de exámenes, becas,... Programas de Apoyo]</option>
			<option>3C (Informativa) [Eventos, Practicas, Visitas Guiadas... Platica sobre Seguridad]</option>
			<option>4A (Problemas de Conducta) [Uso de Lenguaje Inadecuado, Conductas Inadecuadas]</option>
			<option>4B (Problemas de Conducta) [Conato de Agrecion verba y/o Físico]</option>
			<option>4C (Problemas de Conducta) [Aislamiento]</option>
			<option>4D (Problemas de Conducta) [Conflicto Intragrupal]</option>
			<option>4E (Problemas de Conducta) [Conflicto Intergrupal]</option>
			<option>4F (Problemas de Conducta) [Robo]</option>
			<option>4G (Problemas de Conducta) [Autoestima]</option>
			<option>4H (Problemas de Conducta) [Conflicto con el docente]</option>
			<option>5 Cambio de Domicilio</option>
			<option>6 Cambio de Instutucion</option>
			<option>7 Casamiento</option>
			<option>8 Charla Motivacional o Temática</option>
			<option>9 deceso del Alumno</option>
			<option>10A Deceso de Tutores Económicos</option>
			<option>10B Deceso de Familiar</option>
			<option>11 Divorcio / Separacion</option>
			<option>12 Económicos</option>
			<option>13 Enfermedad</option>
			<option>14A Faltas</option>
			<option>14B Retardos</option>
			<option>15 Programa de tutorías Especializadas</option>
			<option>16 Justificacion de Inasistencias</option>
			<option>17 La carrera no Cubrio sus Expectativas</option>
			<option>18 Madre o Padre Soltero</option>
			<option>19 Embarazo y/o Maternidad</option>
			<option>20 Problemas Laborales</option>
			<option>21 Problemas Familiares</option>
			<option>22A Baja Temporal</option>
			<option>22B Baja Definitiva</option>
			<option>23 Servicio Militar</option>
			<option>24 Falta de Documentos</option>
			<option>25 al Código de Etica</option>
			<option>26 Otros</option>
		</select>
	</div>
	</div>
</div>
<br>
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
<!--********LINKS BOOTSTRAP JAVASCRIPT**************-->
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
<!--FIN DEL SCRIPT DEL RELOJ-->
<script type="text/javascript" src="js/bootstrap-validate.js"></script>
<script type="text/javascript">
	bootstrapValidate('#Grupo', 'max:6:Introdusca minimo 6 caracteres')
	bootstrapValidate('#Grupo', 'min:6:Introdusca minimo 6 caracteres')
	bootstrapValidate('#txtarea', 'min:100:Necesitamos un minimo de 40 palabras')
	bootstrapValidate('#txtarea', 'max:199:Se esta sobrepasando de el limite')
</script>
</body>
</html>