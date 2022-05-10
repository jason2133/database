<?php
//시작일 시각(시간, 분, 초, 월, 일, 년)
$start = mktime(0, 0, 0, 8, 8, 2005);   

//년-월-일 시:분:초 (am,pm) 형식으로 출력	
$std1 = date("Y-m-d일 h:i:s (a) 부터", $start);  

//종료일 시각
$end = mktime(5, 15, 25, 12, 25, 2020);    

//년-월-일 시:분:초 (am,pm) 형식으로 출력	
$std2 = date("Y-m-d일 h:i:s (a) 까지", $end);   

$count =  $end - $start ;

 // 1일(24x60x60=86400)단위로 환산
$total1 = intval($count / 86400);    

 // 일수를 제외한 시간
$total2 = intval(($count % 86400) / 3600);   

echo "<B> ※ mktime( )함수와 date( )함수의 사용 </B> <br>";
echo "----------------------------------------------------------- <br>";
echo "■ 시작일 : {$std1} <br>";
echo "----------------------------------------------------------- <br>";
echo "■ 종료일 : {$std2} <br>";
echo "----------------------------------------------------------- <br>";
echo " 시작일부터 종료일까지 <b> [ ";

//세 자리마다 콤마(,) 삽입
echo number_format($count);
echo	"초 ]</b>가 지났으며 <br>";

echo " 날짜로 환산하면 <b> [ ";
echo number_format($total1) . "일 ";
echo number_format($total2);
echo "시간</b> ]이 지났습니다. <br>";
?>