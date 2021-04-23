<?php
header('Content-Type: text/html; charset=UTF-8');
$dsn = 'mysql:dbname=db1;host=mysql';
$user = 'root';
$password = 'mysql';

$kensaku='%'.$_POST["c1"].'%';

$dbh = new PDO($dsn, $user, $password);   

$stmt = $dbh -> prepare("SELECT name FROM tbt WHERE name LIKE :kensaku");
$stmt -> bindParam(':kensaku',$kensaku);
$stmt -> execute();
	 
while($result = $stmt->fetch(PDO::FETCH_ASSOC)){	 	
	print($result['name'])."<br>";
}
	 
$dbh =NULL;
	 
 ?>