<?php
	$dsn = 'mysql:host=localhost;dbname=pool_db;charset=utf8';
	$user = 'yamada';
	$pass = 'hirokazu';
	try{
		$pdo_object = new PDO($dsn, $user, $pass);
		//検索処理
		if(!empty($_POST['name']) && !empty($_POST['tell']) && !empty($_POST['age']) && !empty($_POST['birthday'])){
					$sql = "INSERT INTO profiles(profilesID, name, tell, age, birthday) values(:profilesID, :name, :tell, :age, :birthday)";
					$query = $pdo_object->prepare($sql);
			$in_id= $_POST['id'];
			$in_name = $_POST['name'];
			$in_tell = $_POST['tell'];
			$in_age = $_POST['age'];
			$in_birthday = $_POST['birthday'];
			$query -> bindValue(':profiles', $in_id);
			$query -> bindValue(':profiles', $in_name);
			$query -> bindValue(':profiles', $in_tell);
			$query -> bindValue(':profiles', $in_age);
			$query -> bindValue(':profiles', $in_birthday);
			$query -> execute();
	}else{
		echo "全ての値を入力してください";
	}

			$sql = "SELECT * FROM profiles";
			$query = $pdo_object->prepare($sql);
			$query = execute();
//一回の動作で実行（excute)
			$result = $query->fetchall(PDO::FETCH_ASSOC);

		}catch(PDOException $Exception){
			die('接続に失敗しました：'.$Exception->getMessage());
		}

		$pdo_object = null;

?>
<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>DB-kadai9</title>
</head>
<body>
	<form action=9.php" method="post">
		<input type="text" name="word">
		<input type="submit" name="btnSubmit" value="検索">
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
