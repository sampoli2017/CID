<?php


   $con=mysqli_connect("localhost","root","") or die("ERROR AL CONECTAR");
 /********* CONECTA CON LA BASE DE DATOS  **************** */
   mysqli_select_db($con,"bd_biblioteca") or die("Problemas en la selección de la base de datos");
 
 
 
 $upd= mysqli_query($con,"SELECT * FROM `autor`;");
 
 if (! $upd){
    
    echo"la consulta tiene errores";
    exit();
 }else 
  {
     echo "ok";
      echo"<select name="."name"." >";
      
      echo"<option value=".">Selecciona un id </option>";
  
    
     $reg2=mysqli_fetch_array($upd);
     if($reg2)
    {
      echo"tiene datos";
    }
    else
      echo"no tiene";
     
     while(!$reg2=mysqli_fetch_array($upd))
            {
              echo"hola perro";
            echo  "<option value =".$reg2[ISBN].">".$reg2[titulo]."</option>";
            echo"hola perro";
            }
      echo"</select>";


  }
 
 ?>