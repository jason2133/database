<?php
echo "<B> ※ 역슬래시 삽입과 제거 </B> <br>";
echo "------------------------------------------ <br>";
$a = "You're my best friend. ";    
$b  = "공부는 \' 열정 \' 입니다. ";

$add1 = addslashes($a);    //역슬래시 삽입
$add2 = addslashes($b);   
echo " {$add1} <br> {$add2} <p>";

$str1 = stripslashes($a);
$str2 = stripslashes($b);
echo " {$str1} <br> {$str2} ";
?>