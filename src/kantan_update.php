<?php
header('Content-Type: text/html; charset=UTF-8');
$dsn = 'mysql:dbname=db1;host=mysql';
$user = 'root';
$password ='mysql';
$value=$_POST["u1"];
$name=$_POST["u2"];

$dbh = new PDO($dsn, $user, $password);

$sql = 'update tbt set name =:name where id = :value';
$stmt = $dbh -> prepare($sql);
$stmt->bindParam(':name', $name, PDO::PARAM_STR);
$stmt->bindValue(':value', $value, PDO::PARAM_INT);
$stmt->execute();

$sql = 'select name,mess from tbt';
$stmt = $dbh->query($sql);

while($result = $stmt->fetch(PDO::FETCH_ASSOC)){
	print($result['name']);
	print " : ";
	print($result['mess'].'<br>');
}

$dbh =NULL;
