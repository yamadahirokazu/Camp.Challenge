<?php
 $global = 3;

    function namae(){
      static $count = 0;
      echo  $count++.".<br>";
      global $global;
      $global = $global * 2;
      echo $global."<br>";
      return $global;//10
}
namae();
namae();
namae();
namae();
namae();
namae();
namae();
namae();
namae();
namae();
namae();
namae();
namae();
namae();
namae();
namae();
namae();
namae();
namae();
namae();
namae();