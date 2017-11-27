<?php  
$conexion=mysqli_connect("localhost","root","") or die("Problemas en la conexion");
mysqli_select_db($conexion,"bd_biblioteca") or die("Problemas en la selección de la base de datos");
//$examenes = mysqli_query($conexion,"select * from examenes");
session_start();

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title> slider</title>
	<link rel="stylesheet" type="text/css" href="slider/estilos.css">
	<link rel="stylesheet" type="text/css" href="slider/fonts.css">
  <link rel="stylesheet" href="css/consulta.css">
  <link rel="stylesheet" href="css/bootstrap.css">
  <script src="js/bootstrap.js" type="text/javascript" charset="utf-8" async defer></script>
</head>
<body>
  <!--Inicio Barra de navegación -->
  <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Colección</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
          <ul class="nav navbar-nav">
            <li><a href="consulta.php">Consulta</a></li>
            <li><a href="slider.php">Galeria</a></li>
            <li><a href="acerca.php">Acerca de</a></li>
            <li><a href="contacto.php">Contacto</a></li>
            <?php
              $b = $_SESSION["nom"];
              $val=mysqli_query($conexion,"select tipo_usuario from usuarios where nombre = \"$b\" ") or die("ERROR");
              while($reg2=mysqli_fetch_array($val))
                if($reg2['tipo_usuario'] == "1"){
                  echo "<li><a href='perfiles.php'>Perfiles</a></li>";
                  echo "<li><a href='inventario.php'>Inventario</a></li>";
                }
             ?>
          </ul>
          <form class="navbar-form navbar-left" role="search">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Buscar">
            </div>
            <button type="submit" class="btn btn-default">Buscar</button>
          </form>
        </div>
      </div>
  </nav>
  <!--Fin Barra de navegación -->
  
	<div class="main">
		<div class="slides">
			<img src="img/1.jpg" alt="">
			<img src="img/2.jpg" alt="">
			<img src="img/3.jpg" alt="">
      <img src="img/4.jpg" alt="">
      <img src="img/5.jpg" alt="">
		</div>
	</div>
	
  <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
  <script src="js/jquery.slides.js"></script>
  <script>
   $(function(){
  $(".slides").slidesjs({
    play: {
      active: true,
        // [boolean] Generate the play and stop buttons.
        // You cannot use your own buttons. Sorry.
      effect: "slide",
        // [string] Can be either "slide" or "fade".
      interval: 5000,
        // [number] Time spent on each slide in milliseconds.
      auto: false,
        // [boolean] Start playing the slideshow on load.
      swap: true,
        // [boolean] show/hide stop and play buttons
      pauseOnHover: false,
        // [boolean] pause a playing slideshow on hover
      restartDelay: 2500
        // [number] restart delay on inactive slideshow
    }
  });
});
  </script>
  
  
</body>
</html>
	
</body>
</html>