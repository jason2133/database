﻿<?php
echo "<B> ※ 결합문자로 연결해서 출력하는 implode( ), join( )함수  </B> <br>";
echo "----------------------------------------------------------------- <br>";
$str = array("TV", "PDP", "MP3");
$a = implode(" / " , $str);       // 결합문자 " / " 를 사용
$b = join(" ** ", $str);
echo " ■ \$str = array(\"TV\", \"PDP\", \"MP3\")일 때 함수 사용<br>";
echo "----------------------------------------------------------------- <br>";
echo " ▼ explode( ) 함수 : <b>결합문자 \" / \"를 사용한 결과 </b><br>";
echo "&nbsp;&nbsp; [ " . $a . " ] <br>";
echo "----------------------------------------------------------------- <br>";
echo " ▼ join( ) 함수 : <b>결합문자 \" ** \"를 사용한 결과 </b><br>";
echo "&nbsp;&nbsp;[ " . $b . " ] <br>";
echo "----------------------------------------------------------------- <br>";
?>