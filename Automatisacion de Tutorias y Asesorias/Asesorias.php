<!DOCTYPE html>
<html>
<head>
	<!--Aparado de CSS-->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<!--Cierre de CSS-->
	<title>Generador de Asesorias</title>
	<meta charset="utf-8">
</head>
<body>
<div class="container-fluid" style="background-color: #FFC300;">
	<div class="row">
		<div class="col">
			<img src="imgs/logo-uni.png" width="100px" height="100px">
		</div>
		<div class="col">
			<br>
			<h1>Asesorias</h1>
		</div>
	</div>
</div>
	<nav class="nav">
		<a href="index.php" class="nav-link">Inicio</a>
		<a href="Tutoria_Grup.php" class="nav-link">Tutoria_Grupal</a>
		<a href="Tutoria_Ind.php" class="nav-link">Tutoria Individual</a>
		<a href="#" class="nav-link disabled">Asesoria</a>
		<a href="Encuestas_Sat.php" class="nav-link">Encuestas de Satisfaccion</a>
	</nav>
	<br>
<div class="container">
	<div class="row">
		<form>
			<div class="col">
				<div class="form-row">
					<div class="col-md">
						<label class="form-col-label">Tutor</label>
						<input type="text" class="form-control" name="" placeholder="Nombre del Tutor">
					</div>
				</div>
				<br>
				<div class="form-row">
					<div class="col-md">
						<label class="form-col-label">Motivo</label>
						<input type="text" class="form-control" name="" placeholder="Motivo de la Asesoria">
					</div>
				</div>
				<br>
				<div class="form-row">
					<div class="col-md">
						<label class="form-col-label">Genero</label>
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
					<div class="col-md-6">
						<label class="form-col-label">Grupo</label>
						<input type="text" class="form-control" name="" placeholder="Grupo">
					</div>
				</div>
				<br>
				<div class="form-row">
					<div class="col-md">
						<label class="form-col-label">Calificacion</label>
						<input type="text" class="form-control" name="" placeholder="Calificacion">
					</div>
				</div>
				<br>
				<div class="form-row">
					<div class="col-md">
						<label class="form-col-label">Descripcion</label>
						<textarea class="form-control form-text" placeholder="Descripcion del Motivo"></textarea>
					</div>
				</div>
				<br>
			</div>
		</form>
	</div>
</div>
<div class="container-fluid" style="background-color: gray;">
	<br>
	<br>
</div>
</body>
</html>