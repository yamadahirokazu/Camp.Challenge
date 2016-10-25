<?php
session_start();

//echo $_POST['Name'];//ポストの中の確認

$_SESSION['name'] = $_POST['Name'];
$_SESSION['sex1'] = $_POST['sex1'];
$_SESSION['sex2'] = $_POST['sex2'];
$_SESSION['hobby'] = $_POST['hobby'];

if($_POST['sex1'] == 'on'){
      echo '性別は男性';
  }
if($_POST['sex2'] == 'on'){
      echo '性別は女性';
   }

echo '名前は'.$_SESSION['name'].'<br>';
echo '性別は'.$_SESSION['sex1'].'<br>';
echo '性別は'.$_SESSION['sex2'].'<br>';
echo '趣味は'.$_SESSION['hobby'];
//$a = $_POST['Name']

//$set_session['SEX'] = $_POST['famale']
//$set_session['sex'] = $_POST['male'}
//$set_session['hobby'] $_POST['hobby']

//echo $_POST['Name'];
//ON['Name'];
//echo $set_session['SEX'].<br>;
//echo $set_session['sex'].<br>;
//echo $set_session['hobby'];
