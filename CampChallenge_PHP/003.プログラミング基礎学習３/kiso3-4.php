<?php
function my_profile(){
         echo "私の名前は山田です<br>";
         echo "1988年９月２５日生まれです<br>";
         echo "趣味はゲームです<br>";
         $profile = true;
         return $profile;
 }
$profile = my_profile();
 echo $profile;
         if($profile===true){
             echo "この処理は正しく実行できました";
          }else{
             echo "<br>".正しく実行できませんでした."<br>";
}
return $profile;
my_profile();

my_profile();

my_profile();

my_profile();

my_profile();

my_profile();

my_profile();

my_profile();

my_profile();

my_profile();


//課題1で定義した関数に追記する形として、//
//戻り値　true(bool値)　を返却するように修正し、//
//関数の呼び出し側でtrueを受け取れたら//
//「この処理は正しく実行できました」、//
//そうでないなら「正しく実行できませんでした」と表示する//