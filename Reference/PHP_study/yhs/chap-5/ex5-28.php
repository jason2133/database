﻿<?php
echo "<B> ※ 문자열을 비교하여 인증결과 출력 </B> <br>";
echo "------------------------------------------------------------ <br>";
$chr = "KS1234 ";   //알파벳 대문자 아스키 코드값 : 65~90 (A~Z)
$a = "AOS3987";
$b = "KS1234 ";
$c =  "au88";     //알파벳 소문자 아스키 코드값 : 97~122 (a~z)
$val [0] = strcmp ($chr, $a);
$val [1] = strcmp ($chr, $b);
$val [2] = strcmp ($chr, $c);
for ($s = 0; $s <= 2; $s++)
{
	if($val [$s])
	echo ($s+1) .  "  . 인증 실패 ..... 출력값 : [ $val[$s] ] <br>";
	else echo ($s+1) .  " . 인증 성공...... 출력값 :  [ $val[$s] ] <br>";
}
?>