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
		$reg=mysqli_query($conexion,"select * from genero") or die("ERROR");
	?>
	<p>usuarios</p>
	 <table border="5px">
      <tr>
        <td>id genero</td>
        <td>nombre</td>
        
        
        
      </tr>

	<?php 
      //echo"<select name='adeudos' id='adeudos'>";
        while($reg2=mysqli_fetch_array($reg)){
            $matricula = $reg2['ID_genero'];
            $nombre = $reg2['Nombre'];
           
            
      		
            //echo $isbn;
           //echo "<option value='$matricula'>$matricula</option>";
             echo '<tr>
              <td>'.$reg2['ID_genero'].'</td>
              <td>'.$reg2['Nombre'].'</td>
              
              ';
              
        }//</select>
       ?>
   		</table>


</body>
</html>