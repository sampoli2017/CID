
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 	<?php
   $con=mysqli_connect("localhost","root","") or die("ERROR AL CONECTAR");
 /********* CONECTA CON LA BASE DE DATOS  **************** */
   mysqli_select_db($con,"bd_biblioteca") or die("Problemas en la selección de la base de datos");
 $upd= mysqli_query($con,"SELECT * FROM `genero`;");
 $b="SELECT * FROM `genero` ;";
 if (! $upd){
    
    echo"la consulta tiene errores";
    exit();
 }
 else 
  {
     echo "ok";

 }
 ?>
 	<select name="."name"." >
      
    <option value=".">Selecciona un id de genero para insertar</option>
    <?php while ($row = mysqli_fetch_array($upd)){?>
    hola
	<option value=<?php $row["ISBN"] ?>><?php $row["ISBN"] ?></option>
    
	<?php } ?>	
     </select>
 </body>
 </html>