<?php
  $num = "e";
  $message = '';
  switch($num){
   case "a";
    $message = "英語";
    break;
   case "あ";
    $message = "日本語";
    break;
   default;
    $message = "";
    break;
 }
 echo $message;

