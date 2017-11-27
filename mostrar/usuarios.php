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
		$reg=mysqli_query($conexion,"select * from usuarios") or die("ERROR");
	?>
	<p>usuarios</p>
	 <table border="5px">
      <tr>
        <td>matricula</td>
        <td>nombre</td>
        <td>tipo</td>
        
        
      </tr>

	<?php 
      //echo"<select name='adeudos' id='adeudos'>";
        while($reg2=mysqli_fetch_array($reg)){
            $matricula = $reg2['matricula'];
            $nombre = $reg2['nombre'];
            $tipo = $reg2['tipo_usuario'];
            
      		
            //echo $isbn;
           //echo "<option value='$matricula'>$matricula</option>";
             echo '<tr>
              <td>'.$reg2['matricula'].'</td>
              <td>'.$reg2['nombre'].'</td>
              <td>'.$reg2['tipo_usuario'].'</td>
              ';
              
        }//</select>
       ?>
   		</table>


</body>
</html>