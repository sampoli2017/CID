<?php 

/*$host="localhost";
$user="root";
$password="";
$db="bd_biblioteca";*/
//$con = new mysqli($host,$user,$password,$db) or die("Error".mysqli_error()."<br>");
//$con = new mysqli('localhost','root','','bd_biblioteca') or die("ErrorErrorError".mysqli_error()."<br>");

$conexion=mysqli_connect("localhost","root","") or die("Problemas en la conexion");
mysqli_select_db($conexion,"bd_biblioteca") or die("Problemas en la selección de la base de datos");
//$examenes = mysqli_query($conexion,"select * from examenes");
$usuario = $_POST["username"];
$pass = $_POST["password"];

/*if($usuario=="" || $pass==""){
	echo "<script>alert('Usuario o contraseña Invalido');</script>";
	echo "<script>window.location('copia.php');</script>";
	//header("location:copia.php");
}*/
$reg=mysqli_query($conexion,"select * from usuarios where nombre=\"$usuario\" and password=\"$pass\"") or die("
ERROR mysqli query");

//$reg = mysqli_query($con,"select * from usuarios where nombre=\"$_POST[username]\"  and pass=\"$_POST[password]\"") or die("error");

session_start();
$_SESSION['nom'] = $_POST["username"];
$_SESSION['pass'] =  $_POST["password"];
//$user_id=null;
//$sql1= "select * from usuarios where nombre=\"$_POST[username]\"  and pass=\"$_POST[password]\" ";
//$query = $con->query($sql1);
//mysql_query("INSERT INTO usuarios (nombre,pass) VALUES ('juan','qwerty')") or die("Nuevo Error: ".mysql_error());
//$sql = mysql_query("select * from usuarios where nombre=\"$_POST[username]\"  and pass=\"$_POST[password]\" ") or die("Error: ".mysql_error());
$r = mysqli_fetch_array($reg);
$b = true;

while ($r && $b) {
	//$user_id=$r["id"];
	if($_POST["username"]==$r["nombre"]&&$_POST["password"]==$r["password"])
	{
		//$user_id=1;-
		header('location: consulta.html');
		$b = false;

	}
	else{
	}
	if($b){
		echo "<script>alert('Error en usuario o contraseña')</script>";
		header('location: login.php');
	}
}
//echo "<script src='valida_login.js'></script>";
 ?>