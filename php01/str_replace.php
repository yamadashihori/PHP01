<?php $str_base = "PHP4_PHP5_PHP7";
//第1=ターゲット文字, 第2=置き換え文字, 第3=元の文字列 
$str = str_replace("PHP5", "PHP5.5", $str_base );

echo $str;
?>