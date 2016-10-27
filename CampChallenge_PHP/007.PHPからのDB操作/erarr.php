<?php
try{
$pdo= new PDO('mysql:host=localhost;dbname=challenge_db;charset=utf8','root','');
}catch(PDOException $Exception){
        die('接続に失敗しました。'.$Exception->getMessage());
}
/*$sql1 = 'insert into hiro values(22, "山口")';*/

$sql = 'select * from hiro';

$query = $pdo->prepare($sql);

$query->execute();

$result = $query->fetchall(PDO::FETCH_ASSOC);

var_dump($result);
?>

