<?php
function show_keisan($num,$num2=2,$type){
         if ($type===true){
            echo $num * $num2;
          }else{
            echo ($num * $num2)*($num * $num2);
        }
       }
$num = 2;
$type = false;

show_keisan($num,$num2=2,$type = false);