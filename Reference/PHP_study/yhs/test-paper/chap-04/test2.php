﻿<?php
echo "<B> ▣ 봄, 여름, 가을 ,겨울 switch문으로 출력하기 </B><br>";
echo "----------------------------------------------- <br>";

$season = 'A';
echo " ▼ 입력된 알파벳 .......... [ {$season} ] <br>";
echo "----------------------------------------------- <br>";

switch($season)
{
	case 'a':
	case 'A':
		echo "제일 좋아하는 계절은 <b>\"봄\"</b> 입니다.";
		break;

	case 'b':
	case 'B':
		echo "제일 좋아하는 계절은 <b>\"여름\"</b> 입니다.";
		break;

	case 'c':
	case 'C':
		echo "제일 좋아하는 계절은 <b>\"가을\"</b> 입니다.";
		break;

	case 'd':
	case 'D':
		echo "제일 좋아하는 계절은 <b>\"겨울\"</b> 입니다.";
		break;

	default:
		echo "알파벳 대소문자 a~d까지만 허용합니다.";
}
?>