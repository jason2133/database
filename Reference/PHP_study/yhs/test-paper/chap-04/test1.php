<?php
echo "<B> ▣ 3 과목의 총점과 평균, 등급 구하기 </B><br>";
echo "----------------------------------------- <br>";

$mok1 = 92;
$mok2 = 93;
$mok3 = 95;
$sum = $mok1 + $mok2 + $mok3;
$avg = $sum/3;

echo " 국어 : {$mok1} 점<br>";
echo " 영어 : {$mok2} 점<br>";
echo " 수학 : {$mok3} 점<br>";
echo "----------------------------------------- <br>";
echo " 총점 : {$sum} 점 <br>";
echo " 점수 :  ";
echo number_format($avg, "2", ".", ",");  //소수점 둘째자리 미만에서 반올림
echo "점(소수점 둘째자리까지만 출력) <br>";
echo "----------------------------------------- <br>";
echo " 등급 : ";

if($avg >= 90 && $avg <= 100)
	echo "매우 우수";

elseif($avg >= 80 && $avg <= 89)		
	echo "우수";

elseif($avg >= 70 && $avg <= 79)		
	echo "보통";

elseif($avg >= 60 && $avg <= 69)		
	echo "미흡";

else	
	echo "매우 미흡";

echo "<br>----------------------------------------- <br>";
?>