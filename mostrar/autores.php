<!DOCTYPE html>
<html>
<head>
	<title>mostrar autores</title>
</head>
<body>
	<?php  
		$conexion=mysqli_connect("localhost","root","") or die("Problemas en la conexion");
		mysqli_select_db($conexion,"bd_biblioteca") or die("Problemas en la selección de la base de datos");
		//$examenes = mysqli_query($conexion,"select * from examenes");
		$reg=mysqli_query($conexion,"select * from autor") or die("ERROR");
	?>
	<p>autores disponibles</p>

	<?php 
      echo"<select name='isbn' id='isbn'>";
        while($reg2=mysqli_fetch_array($reg)){
            $ID_Autor = $reg2['ID_Autor'];
      		$Nombre = $reg2['Nombre'];
    		$Genero = $reg2['Genero'];
            
            echo $ID_Autor;
            echo "<option value='$Nombre'>$Nombre</option>";
        }
       ?>
   		</select>


</body>
</html>