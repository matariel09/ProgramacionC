<?php
/*$conn=mysqli_connect("localhost","root","1123","olxdb");
if (!$conn){
	echo 'error al conectarse a la base de datos';
}else{
echo 'conexion con exito';
}*/


function conectarbd(){
$hostname = "localhost";
$username = "root";
$password = "1123";
$databaseName = "olxdb";

$con = mysqli_connect($hostname, $username, $password, $databaseName) or die("Error al conectase".mysql_error());
mysql_select_db($databaseName,$con);
return $con;

}





?>