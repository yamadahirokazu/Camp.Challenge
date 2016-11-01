<?php
try{
$pdo_object = new PDO('mysql:host=localhost;dbname=challenge_db;charset=utf8','root','');

$sql = "DELETE FROM profiles WHERE name = '山田　広和'";
$query = $pdo_object->prepare($sql);
$query -> execute();

$sql = "SELECT * FROM profiles";
$query = $pdo_object->prepare($sql);

$query -> execute();
$result = $query->fetchall(PDO::FETCH_ASSOC);

var_dump($result);

echo '<br><br>';

foreach ($result as $stmt => $row){
      echo $row['profilesID'].':'.$row['name']. '：'. $row['tell']. '：'. $row['age']. '：'. $row['birthday'] .'<br>';
}


}catch(PDOException $Exception){
        die('接続に失敗しました。'.$Exception->getMessage());
}

$pdo_object = null;
?>
