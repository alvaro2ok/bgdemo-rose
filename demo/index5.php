<html>
<head>
	<title>Test PHP passed</title>
</head>
<body>
<h1>PHP Connect Mysql External</h1>
<p>
<?php
echo "MYSQL_SERVICE_HOST = ";
echo getenv("MYSQL_SERVICE_HOST");
echo "<br>";
echo $_ENV['MYSQL_SERVICE_HOST'];
echo "<br>";
echo "MYSQL_SERVICE_POR = ";
echo getenv("MYSQL_SERVICE_PORT");
echo "<br>";
echo "MYSQL_USER = ";
echo "|".getenv('MYSQL_USER')."|";
echo "<br>";
echo "MYSQL_PASSWORD = ";
echo "|".getenv('MYSQL_PASSWORD')."|";
echo "<br>";
echo "MYSQL_DATABASE = ";
echo "|".getenv('MYSQL_DATABASE')."|";
echo "<br>";

$dbhost = getenv("MYSQL_SERVICE_HOST");
$dbport = getenv("MYSQL_SERVICE_PORT");
$login=getenv('MYSQL_USER');
$pass=getenv('MYSQL_PASSWORD');
$basedatos=getenv('MYSQL_DATABASE');

$mysqli= new mysqli($dbhost, $login, $pass, $basedatos);
	
	if(mysqli_connect_errno()){
		echo 'Conexion Fallida : ', mysqli_connect_error();
		exit();
	}
echo "<br>";
echo 'Conectado satisfactoriamente con variables';
?>
</p>
</body>
</html>