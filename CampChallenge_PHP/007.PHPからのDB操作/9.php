<?php
	if(!empty($_POST['word'])){
	$dsn = 'mysql:host=localhost;dbname=pool_db;charset=utf8';
	$user = 'yamada';
	$pass = 'hirokazu';
	try{
		$pdo_object = new PDO($dsn, $user, $pass);
		//検索処理
	//	$sql = " from * profiles WHERE profilesID LIKE (:name)";
	//課題9:フォームからデータを挿入できる処理を構築してください。
		//$query = $pdo_object->prepare($sql);//実行結果を変数に入れる
			$find_id = $_POST['id'];
			$find_name = $_POST['name'];
			$find_tell = $_POST['tell'];
			$find_age = $_POST['age'];
			$find_birthday = $_POST['birthday'];
				$sql = "INSERT INTO pool_db. profiles (profilesID ,name ,tell ,age ,birthday)
				 values($find_id, $find_name, $find_tell, $fileinode_age, $find_birthday)";
		$query -> execute();
			$result = $query->fetchall(PDO::FETCH_ASSOC);
	}catch(PDOException $Exception){
		die('接続に失敗しました：'.$Exception->getMessage());
	}
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
		ID<input type="text" name="id">
		名前<input type="text" name="name">
		電話<input type="text" name="tell">
		年齢<input type="text" name="age">
		誕生日<input type="text" name="birthday">
		<input type="submit" name="btnSubmit" value="挿入したいデータ">
	</form>
</body>
</html>
