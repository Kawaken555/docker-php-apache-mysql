<?php
header('Content-Type: text/html; charset=UTF-8');
$dsn = 'mysql:dbname=db1;host=mysql';
$user = 'root';
$password = 'mysql';
$dbh = new PDO($dsn, $user, $password);

$sql = 'DELETE FROM tbt';
$stmt = $dbh -> query($sql);


$sql = "INSERT INTO tbt VALUES (1,'suzuki','こんにちは');
INSERT INTO tbt VALUES (2,'tanaka','hello');
INSERT INTO tbt VALUES (3,'satou','你好');";
$stmt = $dbh -> query($sql);

$sql = 'select * from tbt';
$stmt = $dbh->query($sql);
	 
while($result = $stmt->fetch(PDO::FETCH_ASSOC)){
	print($result['id']);
	print " : ";
	print($result['name']);
	print " : ";
	print($result['mess'].'<br>');
}
	 
$dbh =NULL;
