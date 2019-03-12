<?php 
  include '../Conexiones.php';
  $Con = db_connect();
  $sql1 = "SELECT * FROM motivosti;";
  $sql2 = "SELECT * FROM tutoria_indivudual;";
  $result1 = mysqli_query($Con, $sql1);
  $result2 = mysqli_query($Con, $sql2);
  $TiempoFecha = date('Y-m-d', time());
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!--***************LINKS BOOTSTRAP CSS**************************-->
  <title>Inicio</title>
</head>
<body onload="mueveReloj()">
  <div class="container-fluid" style="background-color: #FFC300;">
    <div class="row">
      <div class="col-md-4 col-sm-6">
      <img src="../imgs/logo-uni.png" width="100px" height="100px" class="img-fluid"></div>
    <div class="col d-flex align-items-center"><h1>Reporte Mecasup</h1></div>
    </div>
  </div>
  <!--Menu-->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="../index.php">Inicio</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    <!--Menu desplegable de Tutorias Individuales-->
      <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Tutorias Individuales</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="../Tutoria_Ind.php">Registrar Tutoria</a>
            <a class="dropdown-item" href="MostrarTutInd.php">Mostrar Tutorias</a>
        </div>
      </li>
      <!--Final de el Menu despegable-->
      <!--Menu despegable Tutorias Grupaes-->
      <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Tutorias Grupales</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="../Tutoria_Grup.php">Insertar Tutoria</a>
          <a class="dropdown-item" href="MostrarTutGrup.php">Mostrar Tutorias</a>
        </div>
      </li>
      <!--Final de el Menu despegable-->
      <!--Menu despegable Encuestas de Satisfaccion-->
      <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Encuestas de Satisfaccion</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="../Encuestas_Sat.php">Registrar Encuesta</a>
            <a class="dropdown-item" href="MostrarEncuestas.php">Mostrar Encuestas</a>
        </div>
      </li>
      <!--Final de el Menu despegable-->
      <!--Menu despegable Asesoria-->
      <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Asesorias</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="../Asesorias.php">Registrar Asesoria</a>
            <a class="dropdown-item" href="MostrarAseso.php">Mostrar Asesoriass</a>
        </div>
      </li>
      <!--Final de el Menu despegable-->
      <li class="nav-item active">
        <a class="nav-link" href="../Reportes.php">Reportes<span class="sr-only"></span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="../Registro_Alum.php">Alumnos<span class="sr-only"></span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="../Registro_Prof.php">Profesor<span class="sr-only"></span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="../Registro_Tut.php">Tutores<span class="sr-only"></span></a>
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
</div>
<br>
<div class="container">
  <div class="row">
    <div class="col-md col-sm">
      <h1>Grafica</h1>
    </div>
    <div class="col-md col-sm">
      <table border="1px" class="table table-hover table-bordered table-responsive">
        <p>Tabla de Tutorias Individuales </p>
        <thead class="thead-dark">
          <td><h6>Motivo</h6></td>
          <td><h6>Total</h6></td>
        </thead>
        <tbody>
          <?php
            if($row = mysqli_fetch_array($result1)){
              do {
                echo "<tr><td>".$row["motivo"]."</td></tr>";
              } while ($row = mysqli_fetch_array($result1));
            }else
            echo "";
          ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
<div class="container-fluid" style="background-color: gray;">
  <br>
  <br>
  <br>
</div>
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
</body>
</html>