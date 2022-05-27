<?
    //for registering client
    $name = $_POST[name];
    $date = $_POST[date];
    $telephone_number = $_POST[telephone_number];

    //check empty
    if(!$name){
    	echo "<script>window.alert('이름을 입력하세요.'); 
        history.go(-1);</script>";
    	exit;
    }

   if(!$date){
    	echo "<script>window.alert('생년월일을 입력하세요.'); history.go(-1);</script>";
    	exit;
    }

    if(!$telephone_number){
        echo "<script>window.alert('전화번호를 입력하세요.'); history.go(-1);</script>";
        exit;
    }

    include "dbconn.php";

    //check duplication
    $sql1 = "select * from customer where name='$name' and telephone_number='$telephone_number'";
    $result1 = mysqli_query($connect,$sql1);
    $num1 = mysqli_num_rows($result1);

    if($num1>0){
        echo "<script>window.alert('이미 존재하는 회원입니다.'); history.go(-1);</script>";
        exit;
    }

    //insert client
    $sql2 = "insert into customer(name, date_of_birth, telephone_number) values('$name', '$date', '$telephone_number')";
    mysqli_query($connect,$sql2);

    mysqli_close();

    echo "<script>alert('$name님 등록되었습니다.'); window.close();</script>";
?>
