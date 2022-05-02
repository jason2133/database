<?php
    $id   = $_POST["id"];               // 아이디
    $pass = $_POST["pass"];             // 비밀번호
    $name = $_POST["name"];             // 이름
    $email  = $_POST["email"];          // 이메일

    $regist_day = date("Y-m-d (H:i)");  
              
    $con = mysqli_connect("localhost", "user", "12345", "sample");  

	$sql = "insert into members (id, pass, name, email, regist_day, level, point) ";    // 데이터 삽입 명령
	$sql .= "values('$id', '$pass', '$name', '$email', '$regist_day', 9, 0)";       

	mysqli_query($con, $sql);       
    mysqli_close($con);     
?>