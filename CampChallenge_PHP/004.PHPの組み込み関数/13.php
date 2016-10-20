>?php

$file = file_get_contents('4_12_bocchan.txt');//全ての作業を行う
    $arr = explode('。', $file);
    $str = implode('。<br>', $arr);

echo $str;