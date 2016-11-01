<?php
try{
$pdo_object = new PDO('mysql:host=localhost;dbname=challenge_db;charset=utf8','root','');
$sql = "INSERT INTO profiles (name, age) values (:name, :age)";
$query = $pdo_object->prepare($sql);

$query -> bindvalue(':name','山田　広和');
$query -> bindvalue(':age','50');

$query -> execute();

}catch(PDOException $Exception){
        die('接続に失敗しました。'.$Exception->getMessage());
}

$pdo_object = null;
?>
