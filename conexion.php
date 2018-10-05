<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=ISO-8859-1">
	<title>Destino</title>
	<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
	<?php
		//ESTO PARA SUBIRLO A INTERNET FUNCIONA
		// $db = [
    	// 	'host' => 'sql211.epizy.com',
    	// 	'username' => 'epiz_22548930',
    	// 	'password' => 'Chambers',
    	// 	'db' => 'epiz_22548930_myDataBase' //Cambiar al nombre de tu base de datos
        // ];
		
		
        $db = [
    		'host' => 'localhost',
    		'username' => 'root',
    		'password' => '1123',
    		'db' => 'olxdb' //Cambiar al nombre de tu base de datos
        ];

		//Abrir conexion a la base de datos
		function connect($db)
		{
		  try {
		      $conn = new PDO("mysql:host={$db['host']};dbname={$db['db']}", $db['username'], $db['password']);

		      // set the PDO error mode to exception
		      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		      return $conn;
		  } catch (PDOException $exception) {
		      exit($exception->getMessage());
		  }
		}

		$dbConn =  connect($db);

		$sql = $dbConn->prepare("SELECT * FROM usuario");
		$sql->execute();
		//echo json_encode( $sql->fetch(PDO::FETCH_ASSOC) );
	?>
</body>
</html>