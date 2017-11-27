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
  <title>Consultas</title>
  <link rel="stylesheet" href="css/consulta.css">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/inventario.css">
  <link rel="stylesheet" type="text/css" href="footer.css">
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

  <!--Fin de la Barra de Navegación-->




<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <fieldset class="form-horizontal col-sm-4">
    <legend>Agragar libros</legend>
    <div class="form-group">
      <label class="col-lg-2 control-label">ISBN</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="nombre" name="ISBN" placeholder="ISBN">
      </div>
    </div>

    <div class="form-group">
      <label class="col-lg-2 control-label">Titulo</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="matricula" name="Titulo" placeholder="Titulo">
      </div>
    </div>

    <div class="form-group">
      <label class="col-lg-2 control-label">Editorial</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="password" name="Editorial" placeholder="Editorial">
      </div>
    </div>

    <div class="form-group">
      <label class="col-lg-2 control-label">Genero</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="password" name="Genero" placeholder="Genero">
      </div>
    </div>

    <div class="form-group">
      <label class="col-lg-2 control-label">Autor</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="password" name="Autor" placeholder="Autor">
      </div>
    </div>

    <div class="form-group">
      <label class="col-lg-2 control-label">Copias</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="password" name="Copias" placeholder="Rentados">
      </div>
    </div>
    
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <button type="submit" class="btn btn-primary">Agregar</button><br><br>
      </div>
    </div>
  </fieldset>
</form>

<?php
  //if(isset($_POST['submit'])){
  if(isset($_POST['ISBN']) && isset($_POST['Titulo']) && isset($_POST['Editorial']) && isset($_POST['Genero']) && isset($_POST['Autor']) && isset($_POST['Copias'])){

    $isbn = $_POST['ISBN'];
    $titulo = $_POST['Titulo'];
    $editorial = $_POST['Editorial'];
    $genero = $_POST['Genero'];
    $autor = $_POST['Autor'];
    $copias = $_POST['Copias'];
    $estado = 'Disponible';

mysqli_query($conexion, "INSERT INTO `libros` (`ISBN`, `Titulo`, `Editorial`, `ID_Genero`, `ID_Autor`, `Estado`, `NumCopias`) VALUES (\"$isbn\", \"$titulo\", \"$editorial\", \"$genero\", \"$autor\", \"$estado\", \"$copias\")") or die ('Error Aquí');

//mysqli_query($conexion, "INSERT INTO `libros` (`ISBN`, `Titulo`, `Editorial`, `ID_Genero`, `ID_Autor`, `Estado`, `NumCopias`) VALUES ('400', '4', '4', '4', '4', '4', '4')") or die ('Error Aquí');

//mysqli_query($conexion, "INSERT INTO 'libros' ('ISBN', 'Titulo', 'Editorial', 'ID_Genero', 'ID_Autor', 'Estado', 'NumCopias') VALUES ( '4','4','4','4','4','4','4' ) ") or die('Muy muy mal');
  }
?>


<div class="jumbotron">
  <table class="table table-striped table-hover table-bordered">
  <thead class="thead-dark">
    <tr class="tabla">
      <th>ISBN</th>
      <th>Titulo</th>
      <th>Editorial</th>
      <th>Genero</th>
      <th>Autor</th>
      <th>Estado</th>
      <th>Numero de Copias</th>
    </tr>

      <?php
      $reg=mysqli_query($conexion,"select * from libros") or die("ERROR");

      while($reg2=mysqli_fetch_array($reg)){
            $isbn = $reg2['ISBN'];
            $titulo = $reg2['Titulo'];
            $editorial = $reg2['Editorial'];
            $id_genero = $reg2['ID_Genero'];
            $id_autor = $reg2['ID_Autor'];
            $estado = $reg2['Estado'];
            $numcopias = $reg2['NumCopias'];
            

            echo '<tr>
              <td>'.$reg2['ISBN'].'</td>
              <td>'.$reg2['Titulo'].'</td>
              <td>'.$reg2['Editorial'].'</td>
              <td>'.$reg2['ID_Genero'].'</td>
              <td>'.$reg2['ID_Autor'].'</td>
              <td>'.$reg2['Estado'].'</td>
              <td>'.$reg2['NumCopias'].'</td>';
          }
  ?>
  </thead>
</table>
</div>





<!--Inicio Footer -->
  <div class="col-md-4 footer">
    <legend>Autoría</legend>
    <br><p>José Salvador Espericueta Barrón</p>
    <br><p>151020</p>
    <br><p>Samuel Auces Martinez</p>
    <br><p>123456</p>  
  </div>

  <div class="col-md-4 footer">
    <legend>Redes Sociales</legend>
    <a href="https://www.facebook.com" class="img" ><img src="imagenes/icons/facebook.png">Facebook</a>
    <a href="https://www.twitter.com" class="img" ><img class="img" src="imagenes/icons/twitter.png">Twitter</a><br>
    <a href="https://www.whatsapp.com" class="img" ><img class="img" src="imagenes/icons/whatsapp.png">Whatsapp</a>
    <a href="https://www.instagram.com" class="img" ><img class="img" src="imagenes/icons/instagram.png">Instagram</a><br>
    <a href="https://www.youtube.com" class="img" ><img class="img" src="imagenes/icons/youtube.png">Youtube</a>
    <a href="https://www.pinterest.com" class="img" ><img class="img" src="imagenes/icons/pinterest.png">Pinterest</a><br>
    <a href="https://www.snapchat.com" class="img" ><img class="img" src="imagenes/icons/snapchat.png">Snapchat</a>
    <a href="https://www.worpress.com" class="img" ><img class="img" src="imagenes/icons/wordpress.png">Worpress</a><br>
    <a href="https://www.googleplus.com" class="img" ><img class="img" src="imagenes/icons/google-plus.png">Google Plus</a>

  </div>

  <div class="col-md-4 footer">
    <legend>Datos de Materia</legend>
    <br><p>Programación Web II</p>
    <br><p>Mtra. Roxana Herrera</p>
    <br><p>Proyecto Final</p>
    <br><p>Coleccion Bibliotecas</p>
  </div>
<!--Fin Footer -->
</body>
</html>