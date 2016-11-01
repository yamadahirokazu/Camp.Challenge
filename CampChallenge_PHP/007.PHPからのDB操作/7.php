<?php
try{
$pdo_object = new PDO('mysql:host=localhost;dbname=challenge_db;charset=utf8','root','');

$sql = "UPDATE profiles SET name='松岡　修造',age= 48,birthday='1967-11-06'WHERE profilesID = 1";
$query = $pdo_object->prepare($sql);
$query -> execute();

}catch(PDOException $Exception){
        die('接続に失敗しました。'.$Exception->getMessage());
}

$pdo_object = null;
?>
