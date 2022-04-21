<?php
header('Content-Type: text/html; charset=UTF-8');
$a1=$_POST["a1"];
$a2=$_POST["a2"];

$dsn = 'mysql:dbname=db1;host=mysql';
$user = 'root';
$password = 'mysql';

$dbh = new PDO($dsn, $user, $password);

$stmt = $dbh->prepare('insert into tbt (name, mess) values (:name, :mess)');
$stmt->bindValue(':name',$a1);
$stmt->bindValue(':mess',$a2);
$stmt->execute();

$sql = 'select name,mess from tbt';
$stmt = $dbh->query($sql);

while($result = $stmt->fetch(PDO::FETCH_ASSOC)){
    print($result['name']);
    print " : ";
    print($result['mess'].'<br>');
}

$dbh =NULL;
