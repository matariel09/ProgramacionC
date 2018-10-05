<?php
session_start();
$usuario=$_POST['usuario'];
$clave=$_POST['clave'];


//conexion
$hostname = "localhost";
$username = "root";
$password = "1123";
$databaseName = "olxdb";

$con = mysqli_connect($hostname, $username, $password, $databaseName);
$query="SELECT * FROM usuario WHERE NICK='$usuario' and PASSWORD='$clave'";
$resultado=mysqli_query($con, $query);
$filas = mysqli_num_rows($resultado);

if ($filas > 0){
	$_session['usuario']=$usuario;
	header("location:Navegacion.php");
}else{
	echo "Usuario o contraseña incorrectos";
}
	
mysqli_free_result($resultado);
mysqli_close($con);

?>