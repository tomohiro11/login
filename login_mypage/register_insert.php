<?php

mb_internal_encoding("utf8");

require DB.php;

//$pdo = new PDO("mysql:dbname=lesson01;host=localhost;", "root", "");
$db = new DB();
$pdo = $db->connect();

//$stmt = $pdo->prepare("insert into login_mypage(name, mail, password, picture, comments) values(?, ?, ?, ?, ?)");
$stmt = $pdo->prepare($db->insert());

$stmt->bindValue(1, $_POST['name']);
$stmt->bindValue(2, $_POST['mail']);
$stmt->bindValue(3, $_POST['password']);
$stmt->bindValue(4, $_POST['picture']);
$stmt->bindValue(5, $_POST['comments']);

$stmt->execute();
$pdo = NULL;

header('Location:after_register.html');

?>
