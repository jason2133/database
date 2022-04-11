<?
include "dbconn_ex.php";
?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
<HEAD>
	<TITLE> Delete Test </TITLE>
</HEAD>

<BODY>

<H1>Delete Test</H1>

<? 

$id = $_GET['id'];

?>


<?

$dbname = "practice";
$sql = "DELETE FROM sailors WHERE sid = '{$id}'";
//echo $sql;

//Process Query Result
$result = mysqli_query($connect, $sql, MYSQLI_USE_RESULT) or die("SQL error");
if($result)
	echo "Done";	

?>

</BODY>
</HTML>