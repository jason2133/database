<?php
    $mode = $_GET["mode"];        
    $num = $_GET["num"];           
	$pass = $_POST["pass"];	      

	$con = mysqli_connect("localhost", "user", "12345", "sample");

	$sql = "select pass from freeboard where num=$num";  
	$result = mysqli_query($con, $sql);  

    $row = mysqli_fetch_assoc($result);     

    $db_password = $row["pass"];       
	mysqli_close($con);      

    if ($pass == $db_password) {        
        if ($mode=="modify")          
            $url = "freeboard_modify_form.php?num=$num";
        else                           
            $url = "delete.php?num=$num";

        echo "<script>
                self.close();
                opener.location.href = '$url';
              </script>";
    }              
    else {      
        echo "<script>
            location.href ='password_form.php?num=$num&error=y';
            </script>";
    }
?>
