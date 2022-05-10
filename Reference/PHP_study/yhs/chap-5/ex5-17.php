<?php
$a = $_POST['a'];  //<form>태그에서 post방식으로 전송 받음.(반드시 선언해야 함)

$b = strlen($a);    // 텍스트 상자에 입력된 문자열의 길이
echo "<b> ▼ 남긴 글 내용</b> ..... {$b} byte  <br><hr>";
if($b <= 20)         // 문자열의 길이가 20byte 초과를 참, 거짓으로 구분 수행

{
	echo " $a ";
}
else
{
	$c =  $b - 20 ;
	echo " x. Error  :  {$c} byte 가 초과<br><br><hr>";
	echo " o. 20byte 이내로 작성해야 합니다... ";
}
?>