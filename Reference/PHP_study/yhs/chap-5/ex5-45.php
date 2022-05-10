<?php
echo "<B> ※ 랜덤 password 만들기  </B> <br>";
echo "-------------------------------------------------- <br>";
$pw = "abcdefghijklmnopqrstuvwxyz0123456789$&@!";       //알파벳과 숫자, 특수문자 포함
$val ="";
	for($a = 0; $a < 8; $a++)
	{
		$val .= $pw [ mt_rand( ) % strlen($pw) ] ;     // 문자열의 길이 함수 strlen( ) 
	}
echo " ▶ 생성된 password  .......... [ <b> $val </b> ] <br>";
echo "-------------------------------------------------- <br>";
?>