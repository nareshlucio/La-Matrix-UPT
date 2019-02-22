
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<meta charset="utf-8">
	<title>Graficas/Indicadores/Etc.</title>
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
<div class="container">
	<div class="row">
		<div class="col">
			<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>	
		</div>
		<div class="col">
			Lugar Donde Ira la Grafica
		</div>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col">
			<div id="chart_container"></div>
		</div>
	</div>
</div>
</body>
</html>