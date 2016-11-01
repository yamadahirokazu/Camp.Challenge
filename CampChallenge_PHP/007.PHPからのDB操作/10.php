<?php
	if(!empty($_POST['word'])){
	$dsn = 'mysql:host=localhost;dbname=pool_db;charset=utf8';
	$user = 'yamada';
	$pass = 'hirokazu';
	try{
		$pdo_object = new PDO($dsn, $user, $pass);
		$sql = "DELETE from profiles WHERE profilesID LIKE (:name)";
		$query = $pdo_object->prepare($sql);
		if($query){
			$find_name = $_POST['word'];
			$like_name = "%". $find_name ."%";
			$query -> bindValue(':name', $like_name);
			$query -> execute();
			$result = $query->fetchall(PDO::FETCH_ASSOC);
		}else{
			echo '検索失敗';
		}
	}catch(PDOException $Exception){
		die('接続に失敗しました：'.$Exception->getMessage());
	}
	$pdo_object = null;

	}else{
		echo '検索ワードを入力してください';
	}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>DB-kadai8</title>
</head>
<body>
	<form action="10.php" method="post">
		<input type="text" name="word">
		<input type="submit" name="btnSubmit" value="削除ID">
	</form>
	<p>検索結果</p>
	<p>
	<?php
		//表示
		if(isset($result)){
			foreach ($result as $stmt => $row) {
				echo $row['profilesID']. '：'. $row['name']. '：'. $row['tell']. '：'. $row['age']. '：'. $row['birthday'] .'<br>';
			}
		}
	?>
	</p>
</body>
</html>
