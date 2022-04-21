<?php
header('Content-Type: text/html; charset=UTF-8');
$dsn = 'mysql:dbname=db1;host=mysql';
$user = 'root';
$password = 'mysql';

$dbh = new PDO($dsn, $user, $password);

$sql = 'select * from tbt';
$stmt = $dbh->query($sql);

while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
	print($result['id']);
	print " : ";
	print($result['name']);
	print " : ";
	print($result['mess'] . '<br>');
}

$dbh = NULL;
