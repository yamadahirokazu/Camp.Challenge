<?php
$stamp = mktime(10,0,0,4,11,2016);
  echo $stamp.'<br>';
//$today = date('Y/m/d/G/i/s', $stamp);
//echo $today.'<br>';

$stamp1 = mktime(23,59,59,31,12,2015);
 echo $stamp1.'<br>';
$a = $stamp1 - $stamp;
echo '(違い)'.$a;
//kytimeには文字は入れられないようだ。
//data('Y/m/d')←予約語」;は本日の日付がはいるようだ。
//date('Y/m/d', $stamp);代入している。
//時間Gg 分i 秒s
