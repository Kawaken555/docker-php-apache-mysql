<?php
header('Content-Type: text/html; charset=UTF-8');
$dsn = 'mysql:dbname=db1;host=mysql';
$user = 'root';
$password ='mysql';
$value=$_POST["u1"];
$name=$_POST["u2"];

$dbh = new PDO($dsn, $user, $password);

$vulnerableSql = 'update tbt set name = "' . $name . '" where id = "' . $value . '";';
$dbh -> query($vulnerableSql);


$sql = 'select name,mess from tbt';
$stmt = $dbh->query($sql);

while($result = $stmt->fetch(PDO::FETCH_ASSOC)){
	print($result['name']);
	print " : ";
	print($result['mess'].'<br>');
}


print '<br>'.'発行された SQL は以下の通りです。' . '<br>';
print $vulnerableSql. '<br><br>';



$dbh =NULL;
