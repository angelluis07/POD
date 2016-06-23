<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php
try{
	$conn=new PDO('mysql:host=sql5.freemysqlhosting.net;dbname=sql5124996','sql5124996','c2d2UyxQzL');
	echo "coneccion ";
}catch (Exception $e){
	die('ERROR:' . $e->getmessage());
	
}
?>
</body>
</html>