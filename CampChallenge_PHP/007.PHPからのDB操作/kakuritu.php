<?php
//接続の確立
//必要な値を渡してPDOオブジェクト(この場合は接続用の通信機のようなもの)を、変数に格納して用意する
$pdo= new PDO('mysql:host=localhost;dbname=pool_db;charset=utf8','root','');

$sql = 'insert into test values(22, "山口", 20)';


$query = $pdo->prepare($sql);

$query->execute();

?>

