<?
include "dbconn_ex.php";
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
<HEAD>
	<TITLE> Select Test </TITLE>
</HEAD>

<BODY>

<H1>Select Test</H1>

<? 
$dbname = "practice";
$sql = "SELECT avg(price) FROM boats";
echo $sql;
?>

<br><br>

<?
$result = mysqli_query($connect, $sql, MYSQLI_USE_RESULT) or die("SQL error");
$value=mysqli_fetch_row($result)[0];
echo $value;
?>

<br><br>

<?
if($value > 30000){
	echo "bigger than 30000";
}
else{
	echo "smaller than 30000";
}
?>






</BODY>
</HTML>