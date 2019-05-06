<html>
<head>
	<title>Test PHP passed</title>
</head>
<body>
<h1>PHP Connect Mysql External</h1>
<p>
<?php
$enlace =  mysql_connect('10.100.5.211', 'test', 'Temporal2017_%', 'testdb');
if (!$enlace) {
    die('No pudo conectarse: ' . mysql_error());
}
echo 'Conectado satisfactoriamente';
mysql_close($enlace);
?>
</p>
</body>
</html>
