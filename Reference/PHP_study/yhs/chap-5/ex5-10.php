<?php

echo "<B> ※ while문을 이용한 hol( )함수와 jak( )함수 정의</B> <br>";
echo "---------------------------------------------------------- <br>";

function hol($a, $b)      
{
	$hol_sum = 0;     
	$a=1;

	while($a <= $b)
	{
		echo " {$a}, ";
		$hol_sum += $a;   
		$a+=2;
	}
	echo "홀수의 합을 구하는 hol( ) 함수 호출 <br>";
	return $hol_sum;
}
$sta = 1;        
$end = 10;     

$hol_tot = hol($sta, $end);
echo "..... {$sta} 부터 {$end} 까지의 홀수의 합 : {$hol_tot} <br>";
echo "---------------------------------------------------------- <br>";

function jak($c, $d)      
{
	$jak_sum = 0;     
	$c=2;

	while($c <= $d)
	{
		echo " {$c}, ";
		$jak_sum += $c;   
		$c+=2;
	}
	echo "짝수의 합을 구하는 jak( ) 함수 호출 <br>";
	return $jak_sum;
}

$jak_tot = jak($sta, $end);
echo "..... {$sta} 부터 {$end} 까지의 짝수의 합 : {$jak_tot} <br>";
echo "---------------------------------------------------------- <br>";

?>