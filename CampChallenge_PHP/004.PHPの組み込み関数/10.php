<?php
$file = fopen('text.txt','w');
fwrite($file,'自己紹介');
fclose($file);


//$file_txt = fgets($file);
//echo $file_txt;

//あが表示されたということは、htdocsの中でおこなわれている。

//ということはもともとあるファイルを使うことになる。



//$file = fopen('test'.'r');//''の中はディレクトリ内になる
//$file.txt  fgets($file);
//echo $file_txt;
