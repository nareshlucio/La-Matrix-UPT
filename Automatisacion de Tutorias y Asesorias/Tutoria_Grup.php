<?php 
	include 'Conexiones.php';
	$Con = db_connect();
	$sql1 = "SELECT * FROM tutores;";
	$result1 = mysqli_query($Con, $sql1);
	$consul4 = "SELECT * FROM motivostg;";
	$result4 = mysqli_query($Con, $consul4);
	ini_set('date.timezone', 'America/Mexico_City');
	$TiempoFecha = date('Y-m-d', time());
?>
<!DOCTYPE html>
<html>
<head>
	<!--Aparado de CSS-->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<!--Cierre de CSS-->
	<title>Generador de Tutorias Grupales</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body onload="mueveReloj()">
	<div class="container-fluid" style="background-color: #FFC300;">
		<div class="row">
			<div class="col-md-5"><img src="imgs/logo-uni.png" width="100px" height="100px" class=""></div>
			<div class="col"><br><h1>Tutorias Grupales</h1></div>
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
          <a class="dropdown-item disabled" href="Tutoria_Grup.php">Insertar Tutoria</a>
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
</nav>
	<br>
	<div class="container">
		<div class="row">
			<div class="col-md-5 col-sm-6" >
				<div class="card card-body">
					<form action="phpregister/registro_Grup.php" method="post">
						<div class="form-group">
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
						<br>
						<div class="form-group">
							<div class="col-md">
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
						</div>
						<br>
						<div class="form-group">
							<div class="col-md">
								<label>Grupo</label>
								<input type="text" class="form-control" name="frm_grop" placeholder="Grupo" autocomplete="off">
							</div>
						</div>
						<br>
						<div class="form-group">
							<div class="col-md">
								<label class="col-form-label">Descripcion</label>
								<textarea class="form-text form-control" placeholder="Descripcion del la Tutoria" name="frm_area"></textarea>
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
			<div class="col">
				<h5>Motivos de Asesorias Tutoria Grupal</h5>
				<select class="form-control custom-select">
				<option selected>Descripcion de Motivos</option>
				<option>1A (Desempeño) [Numero Importante de Alumnos con Materias Reprobadas]</option>
				<option>1B (Desempeño) [Num. Importantes de Alumnos en situacion de Evaluacion por Competencias]</option>
				<option>1C (Desempeño) [Baja o Nula participacion en las actividades academicas]</option>
				<option>1D (Desempeño) [Baja Calidad y Entrega en Trabajos académicos]</option>
				<option>1E (Desempeño) [Nula Entrega de Trabajos Académicos]</option>
				<option>1F (Desempeño) [Bajo Nivel en Competencias básicas o clave]</option>
				<option>1G (Desempeño) [Bajo nivel en Competencias transversales o genericas]</option>
				<option>1H (Desempeño) [Bajo nivel en Competencias técnicas o especificas]</option>
				<option>1I (Desempeño) [Seguimiento del desempeño del alumno]</option>
				<option>2A (Informativa) [Reglamento Institucional, Codigo Moral,...Reglamentos de Aulas Interactivas]</option>
				<option>2B (Informativa) [Procesos Academicos, Calendario de Evaluaciones...Becas]</option>
				<option>2C (Informativa) [Eventos, Practicas, Visitas Guiadas,... Platicas Sobre La Seguridad]</option>
				<option>3A (Problemas de Conducta) [Uso De Lenguje Inadecuado, Conductas Inadecuadas]</option>
				<option>3B (Problemas de Conducta) [Conato de Agreasion Verbal y/o Físico]</option>
				<option>3C (Problemas de Conducta) [Conflicto Intragrupal]</option>
				<option>3D (Problemas de Conducta) [Conflicto Intergrupal]</option>
				<option>3E (Problemas de Conducta) [Robo]</option>
				<option>3F (Problemas de Conducta) [Conflicto con el docente]</option>
				<option>3G (Problemas de Conducta) [Limpieza, alimentos y orden en el salón]</option>
				<option>4 Charla Motivacional o Temática</option>
				<option>5 Dinamica Grupal</option>
				<option>6 Solicitud del Alumno</option>
				<option>7 Faltas</option>
				<option>8 Retardos</option>
				<option>9 Felicitacion al Grupo</option>
				<option>10 Otros</option>
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
</body>
</html>