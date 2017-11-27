<?php  
$conexion=mysqli_connect("localhost","root","") or die("Problemas en la conexion");
mysqli_select_db($conexion,"bd_biblioteca") or die("Problemas en la selección de la base de datos");
//$examenes = mysqli_query($conexion,"select * from examenes");
$reg=mysqli_query($conexion,"select * from libros") or die("ERROR");
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
        <td>isbn</td>
        <td>titulo</td>
        <td>editorial</td>
        <td>id_genero</td>
        <td>id_autor</td>
        <td>estado</td>
        <td>numcopias</td>
      </tr>
      
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
            

            echo '<tr>
              <td>'.$reg2['ISBN'].'</td>
              <td>'.$reg2['Titulo'].'</td>
              <td>'.$reg2['Editorial'].'</td>
              <td>'.$reg2['ID_Genero'].'</td>
              <td>'.$reg2['ID_Autor'].'</td>
              <td>'.$reg2['Estado'].'</td>
              <td>'.$reg2['NumCopias'].'</td>';

              echo"<option value='$isbn' selected>".$reg2['ISBN']."</option>";


           
            
          /*echo "<tr>";
          echo "<td>'.$reg['isbn'].'</td>";
          echo "<td>'.$reg['ID_MATERIA'].'</td>";
          echo "td>'.$reg['ID_TIPO'].'</td>";
          echo "td>'.$reg['FECHA'].'</td>";
          echo "<td>'.$reg['FECHA'].'</td>";
          echo "  <td>'.$reg['FECHA'].'</td>";
          echo "<td>'.$reg['FECHA'].'</td>";
          echo "<td>'.$reg['FECHA'].'</td>";*/
        }
       ?>
       </select>


    </table>
  
    <select name="combo">
      <option value="">Selecciona un id de materia para cambiar</option>
      <?php
      $registros=mysqli_query($conexion,"select * from libros");
        while($reg2=mysqli_fetch_array($reg)){
               
               echo"hola";
                //echo '<option value ="'.$reg2['isbn'].'">'.$reg2['isbn'].'</option>';
                echo "<option value =".$reg2['Titulo'].">".$reg2['Titulo']."</option>";
                /*echo '<option value ="'.$reg2['editorial'].'">'.$reg2['ID_EXAMEN'].'</option>';
                echo '<option value ="'.$reg2['id_genero'].'">'.$reg2['ID_EXAMEN'].'</option>';
                echo '<option value ="'.$reg2['id_autor'].'">'.$reg2['ID_EXAMEN'].'</option>';
                echo '<option value ="'.$reg2['estado'].'">'.$reg2['ID_EXAMEN'].'</option>';
                echo '<option value ="'.$reg2['numcopias'].'">'.$reg2['ID_EXAMEN'].'</option>';*/
               

            }
          ?>
    </select>

    <br>
    
    <br>
    <input type="submit" name="" value="Enviar">
    
  </form>
</body>
</html>