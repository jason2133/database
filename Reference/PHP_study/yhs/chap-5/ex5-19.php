<?php
$a = $_POST['a'];  //<form>태그에서 post방식으로 전송 받음.(반드시 선언해야 함)
$a = nl2br($a);
echo " ▼ 추천하는 글  </b><hr>";
echo "$a";
?>