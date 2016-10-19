<?php
$file = fopen('4_12_bocchan','w');//ファイルを読み込んでから、書き込んでいる
//書き込み
fwrite($file,'開始');
fclose($file);

$file = fopen('text.txt','a');

fclose($file);

$file = fopen('text.txt','a');
$stamp = date('y/m/d');
fwrite($file,'終了');
fwrite($file,$stamp);


$string = "PHPの関数は
　　　　　　とても便利
　　　　　　ですね。";
$result = nl2br($string);
fwrite($file,$result);

//同じ行動なら連続してできる。

fclose($file);

//$file = fopen('text.txt','a');
//$date = array("a","b","c","d");
//$result = implode('a',$data);
//fwrite($file,$data);

$file = fopen('text.txt','r');
//読み込み
$file_txt = fgets($file);
echo $file_txt;
//var_dump($date);

//時間は走っている。ok

//現状書き込み、読み込みを同時に行うことに成功。

//$file_txt = fgets($file);
//echo $file_txt;

//あが表示されたということは、htdocsの中でおこなわれている。

//ということはもともとあるファイルを使うことになる。



//$file = fopen('test'.'r');//''の中はディレクトリ内になる
//$file.txt  fgets($file);
//echo $file_txt;
