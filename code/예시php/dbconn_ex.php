<?

    //database connect
    $connect=mysqli_connect( "localhost", "root", "autoset", "practice") or  
        die( "cannot connect<br>"); 

	//Select DB
	mysqli_select_db($connect, "practice") or die("DB선택에러");
	mysqli_query($connect,'set names utf8');

?>

