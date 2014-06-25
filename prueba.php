<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Conectando con el servidor MS SQL Server</title>

	<h1>Intentando conectar con el servidor y base de datos</h1>
</head>
<body>
	<?php
$serverName = "webDev-PC\COMPAC"; 
$connectionInfo = array( "Database"=>"RepositorioAdminPAQ", "UID"=>"sa", "PWD"=>"123456");
$conn = sqlsrv_connect( $serverName, $connectionInfo);

if( $conn ) {
     echo "Conexión establecida.<br />";
}else{
	     echo "Conexiónno se pudo establecer.<br />";
     die( print_r( sqlsrv_errors(), true));
}
?>
</body>
</html>




