<?php

echo "<B> ※ 반환(return) 값을 갖는 문자열 함수</B> <br>";
echo "--------------------------------------------- <br>";

function string($str)      // string(인자)함수 정의
{
	$str = $str. " 프로그래밍 <br>";
	return $str;
	echo " return 다음 문장은 출력될까요 ??? ";
}

echo " 문자열 함수 string(\$str) 호출 결과<br> ... ";
echo string(" PHP ");
echo "--------------------------------------------- <br>";

?>