<?php $str_base = "PHP4,PHP5,PHP7"; 
//第1=ターゲット文字, 第2=元の文字列 
$str = explode("," , $str_base );
//配列値を確認するのにvar_dump関数が良いです。 
var_dump($str); 
?>