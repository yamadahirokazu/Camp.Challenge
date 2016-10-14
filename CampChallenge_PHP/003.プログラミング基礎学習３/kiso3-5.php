<?php
 function view_profile(){//配列に全ての要素を入れてあるのをリターン//
    $nam1=1;$nam2="yamada";$nam3="11/11/11";$nam4="toukyou";
     return array($nam1,$nam2,$nam3,$nam4);//arrayには数字が入っている//
}
foreach(view_profile() as $value){
 echo "$value<br>";
}

//課題5:戻り値としてある人物の//
//id(数値),名前,生年月日、住所を返却し、//
//受け取った後は全情報を表示する//
//関数のなかは表示は含まれない//