<?php


 $arr1 = array(
              1
              '東京'
              '１月１日'
              '山田'
	      );

 $arr2 = array(
              2
              '神奈川'
              '２月２日'
              '加藤'
              )

 $arr3 = array(
              3
              '千葉'
              '３月３日'
              '田山'
              )

     $one = array($nam1=1,$nam2="toukyou",$nam3="1/1/1",$nam4="yamada");
     $two = array($nam5=2,$nam6="kanagawa",$nam7="2/2/2",$nam8="katou");
     $th =  array($nam9=3,$nam10="chiba",$nam11="3/3/3",$na11="tayama");

     $men =array($one,$two,$th);



foreach($men as $key => $value){
	echo $key.'キー'.'<br>';//kキーを指定fore if分も可能
	echo $value . 'value';
	foreach($value as $key=> $v){
	    	if($key > 1){
			continue;
		}elseif($value==2){
		break;
		
		}else{
		echo '連想名:'.$key.'バリュー.:'.$v.'<br>';
		}
	}
 }

/*
0キー
連想名:0バリュー.:1
連想名:1バリュー.:toukyou
1キー
連想名:0バリュー.:2
連想名:1バリュー.:kanagawa
2キー
連想名:0バリュー.:3
連想名:1バリュー.:chiba
*/