<?php
 $param1 = $_GET['param1'];
 $param2 = $_GET['param2'];
 $param3 = $_GET['param3'];
 if($param3 == 1){
    echo '雑貨';
     }

 if($param3 == 2){
    echo '生鮮食品';
     }
 if($param3 == 3){
    echo 'その他';
     }
 echo "<p>"."$param1"/"$param2"."<p>";
 echo "$param1";

 if($param1 >= 5000){
    echo"<p>".($param1 * 0.05)."<p>";
    }

 if($param1 <= 4999 && $param1 >=3000) {
    echo "<p>".($param1 * 0.04)."<p>";
    }