<?php  
$conexion=mysqli_connect("localhost","root","") or die("Problemas en la conexion");
mysqli_select_db($conexion,"bd_biblioteca") or die("Problemas en la selección de la base de datos");
//$examenes = mysqli_query($conexion,"select * from examenes");
$reg=mysqli_query($conexion,"select * from detalle_renta") or die("ERROR");
?>

<!DOCTYPE html>
<html>
<head>
  <title>examen</title>
</head>
<body>
  <form action="" method="post">
    <table border="5px">
      <tr>
        <td>ID_RENTA</td>
        <td>ID_LIBRO</td>
        <td>ID MATRICULA</td>
        <td>FECHA INICIO</td>
        <td>FECHA CORTE</td>
      </tr>
      
      <?php 
    
        while($reg2=mysqli_fetch_array($reg)){
            $idrenta = $reg2['ID_renta'];
      		  $idlibro = $reg2['ID_libro'];
    		    $matricula = $reg2['Matricula'];
            $fechainicio = $reg2['fecha_inicio'];
    		    $fechacorte = $reg2['fecha_corte'];
           
            

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
       </select>


    </table>
	
		

		<br>
		
		<br>
		<input type="submit" name="" value="Enviar">
		
  </form>
</body>
</html>