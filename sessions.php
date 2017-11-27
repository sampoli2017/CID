<?php 

$conexion=mysqli_connect("localhost","root","") or die("Problemas en la conexion");
mysqli_select_db($conexion,"bd_biblioteca") or die("Problemas en la selección de la base de datos");
$usuario = $_POST["username"];
$pass = $_POST["password"];

session_start();

$reg=mysqli_query($conexion,"select * from usuarios where nombre=\"$usuario\" and password=\"$pass\"") or die("
ERROR mysqli query");

$_SESSION["nom"] = $_POST["username"];
$_SESSION["pass"] =  $_POST["password"];

$r = mysqli_fetch_array($reg) or die(header('location: index.php'));
$b = true;

while ($r && $b) {
	if($_POST["username"]==$r["nombre"]&&$_POST["password"]==$r["password"])
	{
		header('location: consulta.php');
		$b = false;
	}
}
 ?>