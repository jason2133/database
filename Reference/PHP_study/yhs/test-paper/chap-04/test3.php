﻿<?php
echo "<B> ※ 구구단 출력 ※</B><br>";
echo "<hr>";

for($a = 9; $a >= 2; $a--)     // 구구단 9~2
{
	for($b = 9; $b >= 1; $b--)   // 곱해지는 수 9~1
	{
		$gob = $a * $b;
		echo "{$a} x {$b} = {$gob} &nbsp;&nbsp; ";
	}
echo "<br><br>";
}
?>