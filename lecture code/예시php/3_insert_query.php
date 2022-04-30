<?
include "dbconn_ex.php";
?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
<HEAD>
	<TITLE> Insert Test </TITLE>
</HEAD>

<BODY>

<H1>Insert Test</H1>

<? 

$sid = $_GET['form_sid'];
$sname = $_GET['form_sname'];
$rating = $_GET['form_rating'];
$age = $_GET['form_age'];
$sex = $_GET['form_sex'];

?>


<?

$sql = "INSERT INTO  sailors (sid ,sname ,rating ,age ,sex) VALUES ('{$sid}',  '{$sname}',  '{$rating}',  '{$age}',  '{$sex}');";

//Process Query Result
$result = mysqli_query($connect, $sql, MYSQLI_USE_RESULT) or die("SQL error");
if($result)
	echo "Done";		


?>





</BODY>
</HTML>