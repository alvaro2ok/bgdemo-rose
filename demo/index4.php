<html>
<head>
	<title>Test PHP passed</title>
</head>
<body>
<h1>PHP Connect Mysql External</h1>
<p>
<?php

echo "<br>";
$db = new mysqli('10.100.5.211', 'test', 'Temporal2017_%', 'testdb');

if($db->connect_errno > 0) 
{ 
    die('Unable to connect to database [' . $db->connect_error . ']'); 
} 

$sql = <<<SQL 
    SELECT * 
    FROM `customers`; 

if(!$result = $db->query($sql)) 
{ 
    die('There was an error running the query [' . $db->error . ']'); 
} 

while($row = $result->fetch_assoc()) 
{ 
    var_dump($row); 
} 

echo 'Total results: ' . $result->num_rows . '<br>'; 
echo 'Total rows updated: ' . $db->affected_rows; 
?>
</p>
</body>
</html>
