<?php
header('Content-Type: text/html; charset=UTF-8');
$dsn = 'mysql:dbname=db1;host=mysql';
$user = 'root';
$password = 'mysql';
$b1=$_POST["b1"];

$dbh = new PDO($dsn, $user, $password);

$sql = 'DELETE FROM tbt where id = :delete_id';
$stmt = $dbh -> prepare($sql);
$stmt -> bindValue(':delete_id', $b1, PDO::PARAM_INT);
$stmt -> execute();

$sql = 'select name,mess from tbt';
$stmt = $dbh->query($sql);

while($result = $stmt->fetch(PDO::FETCH_ASSOC)){
	 print($result['name']);
     print " : ";
     print($result['mess'].'<br>');
}

$dbh =NULL;

?>