<?php

echo "<B> ◐ switch문을 이용하여 월의 날짜 표현하기 ◑ </B> <br>";
echo "------------------------------------------------------------ <br>";

$mon = 13;       // 대입하는 정수의 값에 따라 월을 의미

switch($mon)
{
	case 1:
	case 3:
	case 5:
	case 7:
	case 8:
	case 10:
	case 12;
		echo " {$mon} 월은 31일까지 있습니다... <br>";
		break;

	case 4:
	case 6:
	case 9:
	case 11:
		echo " {$mon} 월은 30일까지 있습니다... <br>";
		break;

	case 2:
		echo " {$mon} 월은 28일(평년기준)까지 있습니다... <br>";
		break;

	default:
		echo " {$mon} 는(은) 월을 나타내는 1~12 이외의 숫자입니다... <br>";
}

?>