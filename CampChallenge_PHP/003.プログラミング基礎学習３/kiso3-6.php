<?php
 function profile($name){

     $one = array($nam1=1,$nam2="yamada",$nam3="1/1/1",$nam4="toukyou");
     $two = array($nam5=2,$nam6="katou",$nam7="2/2/2",$nam8="kanagawa");
     $th =  array($nam9=3,$nam10="tayama",$nam11="3/3/3",$na11="chiba");

  switch($name){
       case ($name == $one[1]):
          $re = $one;//10
          return $re;
       case ($name == $two[1]):
          $re = $two;
          return $re;
       case ($name == $th[1]):
          $re = $th;
          return $re;
     }
   }
profile("yamada");//20

$a = profile("yamada");

foreach($a as $value){
 echo "$value<br>";
}