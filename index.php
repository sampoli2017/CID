<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
  <!--Inicio Barra de navegación -->
  <form class="form-horizontal ubica" action="sessions.php" method="post">
    <fieldset class="align acomoda">
      <div class="form-group acomoda">
        <label for="inputEmail" class="col-lg-2 control-label">Usuario</label>
        <div class="col-lg-5">
          <input type="text" class="form-control" id="username" name="username" placeholder="Usuario">
        </div>
      </div>
      <div class="form-group">
        <label for="inputPassword" class="col-lg-2 control-label">Contraseña</label>
        <div class="col-lg-5">
          <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña">
          </div>
        </div>
      <div class="form-group">
        <div class="col-lg-5 col-lg-offset-2 btn-link">
          <!-- <a href="consulta.html" title=""><div class="btn-success btn btn-primary">Ingresar</div></a>
          <a href="consulta.html" title=""><div class="btn btn-primary">Ingresar</div></a> -->
          <!--<div class="btn-success btn btn-primary">Ingresar</div>
          <div class="btn btn-primary">Ingresar</div>-->

          <button type="submit" class="btn-success btn btn-primary">Acceder</button>
          <script src="valida_login.js"></script>
        </div>
      </div>
    </fieldset>
  </form>
  <!--Fin Barra de navegación -->
  
</body>
</html>