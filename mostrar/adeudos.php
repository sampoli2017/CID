<!DOCTYPE html>
<html>
<head>
	<title>mostrar libros</title>
</head>
<body>
	<?php  
		$conexion=mysqli_connect("localhost","root","") or die("Problemas en la conexion");
		mysqli_select_db($conexion,"bd_biblioteca") or die("Problemas en la selección de la base de datos");
		//$examenes = mysqli_query($conexion,"select * from examenes");
		$reg=mysqli_query($conexion,"select * from adeudos") or die("ERROR");
	?>
	<p>adeudos por matricula</p>

	<?php 
      echo"<select name='adeudos' id='adeudos'>";
        while($reg2=mysqli_fetch_array($reg)){
            $matricula = $reg2['matricula'];
      		
            echo $isbn;
            echo "<option value='$matricula'>$matricula</option>";
        }
       ?>
   		</select>


</body>
</html>