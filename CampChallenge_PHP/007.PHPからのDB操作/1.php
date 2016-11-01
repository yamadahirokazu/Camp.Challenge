<?php
try{
$pdo= new PDO('mysql:host=localhost;dbname=challenge_db;charset=utf8','root','');
}catch(PDOException $Exception){
        die('接続に失敗しました。'.$Exception->getMessage());
}
?>

