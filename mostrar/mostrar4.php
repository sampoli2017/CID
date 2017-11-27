<!DOCTYPE html>
<html>
<head>
	<title>mostrar datos</title>
</head>
<body>
	<?php  
		$conexion=mysqli_connect("localhost","root","") or die("Problemas en la conexion");
		mysqli_select_db($conexion,"bd_biblioteca") or die("Problemas en la selección de la base de datos");
		//$examenes = mysqli_query($conexion,"select * from examenes");
		$reg=mysqli_query($conexion,"select * from libros") or die("ERROR");
	?>
	<select name="titulos">
		<option value=1>visual basic </option>
		<option value=1>solaris </option>
	</select>
	<?php 
      echo"<select name='isbn' id='isbn'>";
        while($reg2=mysqli_fetch_array($reg)){
            $isbn = $reg2['ISBN'];
      		$titulo = $reg2['Titulo'];
    		$editorial = $reg2['Editorial'];
            $id_genero = $reg2['ID_Genero'];
    		$id_autor = $reg2['ID_Autor'];
            $estado = $reg2['Estado'];
            $numcopias = $reg2['NumCopias'];
            echo $isbn;
            echo "<option value='$isbn'>$isbn</option>";

      
        }
       ?>
   		</select>


</body>
</html>