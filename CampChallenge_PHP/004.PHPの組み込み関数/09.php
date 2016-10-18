<?php

//echo strstr('kurona201@gmail.com','@');
//$a = str_replace('I','い','きょUはぴIえIちぴIのくみこみかんすUのがくしゅUをしてます'); ;
//echo $a;

 $subject= "「きょUはぴIえIちぴIのくみこみかんすUのがくしゅUをしてIます」";
 $search = array('U','I');
 $replace = array('う','い');
//みっつとも入っている。

echo str_replace($search,$replace,$subject);
//動作確認した。

//echo str_replace('u','う','$subjec');


//通常通り起動した.照合するものは文字判定されている。
//.変換する内容は変数では反応しない、文字として判定を行っている。


//$search = array('I','U');
//$replace = array('い','う');

//str_replase($replace,$search,$subject);
//変数に移し替えることができるようだ。