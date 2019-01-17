<!DOCTYPE html>
<html>
<head>
	<!--Apartado de CSS-->
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<title>Generador de Tutorias Individuales</title>
</head>
<body>
<div class="container-fluid" style="background-color: #FFC300;">
	<div class="row">
		<div class="col-md-5">
			<img src="imgs/logo-uni.png" width="100px" height="100px">
		</div>
		<div class="col">
			<br>
			<h1 >Tutorias Individuales</h1>
		</div>
	</div>
</div>
	<nav class="nav">
		<a href="index.php" class="nav-link">Inicio</a>
		<a href="Tutoria_Grup.php" class="nav-link">Tutoria_Grupal</a>
		<a href="#" class="nav-link disabled">Tutoria Individual</a>
		<a href="Asesorias.php" class="nav-link ">Asesoria</a>
		<a href="Encuestas_Sat.php" class="nav-link">Encuestas de Satisfaccion</a>
	</nav>	<br>
<div class="container">
	<div class="row">
		<form>
			<div class="form-row">
				<div class="col-md">
					<label>Tutor</label>
					<input type="text" class="form-control" name="" placeholder="Nombre del Tutor">
				</div>
			</div>
			<br>
			<div class="form-row">
				<div class="col-md">
					<label>Profesor/Maestro</label>
					<input type="text" class="form-control" name="" placeholder="Nombre del Tutor">
				</div>
			</div>
			<br>
						<div class="form-row">
				<div class="col-md">
					<label>Alumno</label>
					<input type="text" class="form-control" name="" placeholder="Nombre del Tutor">
				</div>
			</div>
			<br>
			<div class="form-row">
				<div class="col-md">
					<label for="FCI1">Genero</label>
					<div class="form-check">
          				<input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1">
          				<label class="form-check-label" for="gridRadios1"> Hombre</label>
          			</div>
          		<div class="form-check">
          			<input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
          			<label class="form-check-label" for="gridRadios2">Mujer</label>
        		</div>		
				</div>
			</div>
			<br>
			<div class="form-row">
				<div class="col-md">
					<label>Motivo de la Asesoria</label>
					<input type="text" class="form-control" name="" placeholder="Motivo">
				</div>
			</div>
			<br>
			<div class="form-row">
				<div class="col-md">
					<label>Grupo</label>
					<input type="text" class="form-control" name="" placeholder="Nombre del Gurpo">
				</div>
			</div>
			<br>
			<div class="form-row">
				<div class="col-md">
					<label>Descripcion</label>
					<textarea class="form-text" placeholder="Descripcion de la Tutoria"></textarea>
				</div>
			</div>
			<br>
		</form>
	</div>
</div>
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
</body>
</html>