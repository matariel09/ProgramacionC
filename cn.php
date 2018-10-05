<?php
$conn=mysqli_connect("localhost","root","1123","olxdb");
if (!$conn){
	echo 'error al conectarse a la base de datos';
}else{
echo 'conexion con exito';
}
?>