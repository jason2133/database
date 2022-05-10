<?php

echo "<B>♣ 변수 \$a=3를 선언할 때의 switch문 활용 </B><br>";
echo "------------------------------------------------ <br>";

$a = 3;

switch($a)
{
	case 0:
		echo "변수 \$a는 숫자 0 입니다... <B>\" case 0: 적용 \"</B><br>";
		break;

	case 1:
		echo "변수 \$a는 숫자 1 입니다... <B>\" case 1: 적용 \"</B><br>";
		break;

	case 2:
		echo "변수 \$a는 숫자 2 입니다... <B>\" case 2: 적용 \"</B><br>";
		break;

	case 3:
		echo "변수 \$a는 숫자 3 입니다... <B>\" case 3: 적용 \"</B><br>";
		break;

	default:
		echo "변수 \$a = {$a}는 0, 1, 2, 3 이외의 숫자입니다... <br>";
}

?>