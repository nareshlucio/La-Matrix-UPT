<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<div class="container-fluid" style="background-color: #FFC300;">
		<div class="row">
			<div class="col-md-4">
			<img src="imgs/logo-uni.png" width="100px" height="100px"></div>
		<div class="col d-flex align-items-center"><h1>Universidad Politecnica de Tecámac</h1></div>
		</div>
	</div>
	<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #CACFD2;">
		<div class="collapse navbar-collapse">
			<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
				<li class="nav-item">
					<a class="nav-link" href="index.php">Inicio</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="Tutoria_Ind.php">Tutorias Individuales</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="Tutoria_Grup.php">Tutorias Grupales</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="Encuestas_Sat.php">Encuestas de Satisfacion</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="Asesorias.php">Asesorias</a>
				</li>
				<li class="nav-item">
					<a class="nav-link active" href="#">Total</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="Registro_Tut.php">Tutores</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="Registro_Alum.php">Alumnos</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="Registro_Prof.php">Profesores</a>
				</li>
			</ul>
			<form class="form-inline my-2 my-lg-0">
      			<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      			<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    		</form>
		</div>
	</nav>
</div>
<br>
<div class="container border">
	<div class="row">
		<div class="col">
			<form>
				<div class="form-row">
				<h4 class="text-center">Indique que tipo de etapa esta cursando el alumno</h4>
				<div class="form-check form-check-inline">
					<input class="form-check-input" type="radio" name="Radios" value="Estancia1"><label class="form-check-label">Estancia 1</label>
				</div>
				<div class="form-check form-check-inline">
					<input class="form-check-input" type="radio" name="Radios" value="Estancia1"><label class="form-check-label">Estancia 2</label>
				</div>
				<div class="form-check form-check-inline">
					<input class="form-check-input" type="radio" name="Radios" value="Estancia1"><label class="form-check-label">Estadia</label>
				</div>
				</div>
			</form>
		</div>
	</div>
</div>
</body>
</html>