<?php
function show_hikaku($num){
         if (($num % 2 ) === 0){
            echo "偶数です";
          }else{
            echo "奇数です";
        }
       }
$num = 11;

show_hikaku($num);