<?php            
    $name = $_POST["name"];
    $department = $_POST["department"];
    $studentnum = $_POST["studentnum"];          
    $email  = $_POST["email"];
    $phone = $_POST["phone"];
    $datewhen = $_POST["datewhen"];
    $equipment = $_POST["equipment"];

    $regist_day = date("Y-m-d (H:i)"); 
              
    $con = mysqli_connect("localhost", "user", "12345", "sample"); 

	$sql = "insert into reservationtable (name, department, studentnum, email, phone, datewhen, equipment, regist_day) ";    
	$sql .= "values('$name', '$department', '$studentnum', '$email', '$phone', '$datewhen', '$equipment', '$regist_day')";       

	mysqli_query($con, $sql);     
    mysqli_close($con);     

    echo "<script>
	          location.href = 'reservation_form.php';
	      </script>";
?>