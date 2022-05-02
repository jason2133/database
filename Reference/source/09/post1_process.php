<?php
    $name = $_POST["name"];
    $tel = $_POST["tel"];
    $address = $_POST["address"];
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h3>POST로 전달받은 데이터 출력하기</h3>
    이름 : <?php echo $name; ?><br>      
    전화번호 : <?php echo $tel; ?><br>  
    주소 : <?php echo $address; ?><br>  
</body>
</html>