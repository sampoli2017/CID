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
		$reg=mysqli_query($conexion,"select * from detalle_renta") or die("ERROR");
	?>
	<p>adeudos por matricula</p>
	 <table border="5px">
      <tr>
        <td>ID_RENTA</td>
        <td>ID_LIBRO</td>
        <td>ID MATRICULA</td>
        <td>FECHA INICIO</td>
        <td>FECHA CORTE</td>
        
      </tr>

	<?php 
      //echo"<select name='adeudos' id='adeudos'>";
        while($reg2=mysqli_fetch_array($reg)){
            $ID_RENTA = $reg2['ID_Renta'];
            $ID_LIBRO = $reg2['ID_Libro'];
            $ID_matricula = $reg2['ID_Matricula'];
            $fecha_inicio = $reg2['Fecha_Inicio'];
            $fecha_corte = $reg2['Fecha_Corte'];
      		
            //echo $isbn;
           //echo "<option value='$matricula'>$matricula</option>";
             echo '<tr>
              <td>'.$reg2['ID_Renta'].'</td>
              <td>'.$reg2['ID_Libro'].'</td>
              <td>'.$reg2['ID_Matricula'].'</td>
              <td>'.$reg2['Fecha_Inicio'].'</td>
              <td>'.$reg2['Fecha_Corte'].'</td>';
              
        }//</select>
       ?>
   		</table>


</body>
</html>