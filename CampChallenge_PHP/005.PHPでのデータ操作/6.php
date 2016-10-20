<?php

    // セッション開始
    session_start();
    //情報の収集
    $access_time = date('Y年m月d日H時i分s秒');
    setcookie('LastLoginDate', $access_time);
    $lastDate = $_COOKIE['LastLoginDate'];

    $_SESSION['time'] = $access_time;
    $_SESSION['lasttime'] = $lastDate;
    // セッションに情報を入れる。
    //$_SESSION['message'] = 'こんにちは。';
    // セッションからデータを取り出す
    echo 'お帰りなさい！○○さん！<br>';
    echo '現在の時間'.$_SESSION['time'].'<br>';
    echo '前回ログイン日は、'.$_SESSION['lasttime'].'です！';
//[]の中は自由に変えられる;
//そして別物として扱うことができる