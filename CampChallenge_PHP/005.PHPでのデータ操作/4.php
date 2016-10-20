<?php

    // ユーザーの１回目の訪問
    $access_time = date('Y年m月d日H時i分s秒');
    setcookie('LastLoginDate', $access_time);

    // 次の訪問で。。。
    $lastDate = $_COOKIE['LastLoginDate'];
    echo $access_time.'<br>';
    echo 'お帰りなさい！○○さん！<br>';
    echo '前回ログイン日は、' . $lastDate . 'です！';