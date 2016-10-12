<?php
 $num = $_GET['param1'];
 echo $num."= ";

 if($num <= 0 || is_float($num)){
  print "正の整数を入力してください";
 }else{
   for($i = 2; true; ){
    if (($num % $i) === 0){
      print $i."* ";
      $num = $num / $i;
    }else{
       $i++;
    }
    if($num <= $i){
       if($num === 1){ print "1 ";}
       elseif($num >= 10){ print "その他 ";}
       elseif($num <= 10){ print $i." ";}
              break;
          }
       }
    }