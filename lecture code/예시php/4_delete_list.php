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

$sql = "SELECT * FROM sailors";
echo $sql;

?>




<br><br>




<?

//Print Query Result
$result = mysqli_query($connect , $sql, MYSQLI_USE_RESULT) or die("SQL error");


echo "<table border>";


echo "<tr>";
$fieldimploded = "";
while($field=mysqli_fetch_field($result)){
	echo "<th>";
	//print_r($field);
	echo $field->name;
	$fieldimploded .= $field->name."|";
	echo "</th>";
}
echo "</tr>";


while($data=mysqli_fetch_row($result)){
	echo "<tr>";
	for($i=0;$i<(count($data));$i++){
		echo "<td>";
		echo $data[$i];
		echo "</td>";
	}
	echo "<td>";
	$dataimploded = implode("|",$data);
	echo "<a href=\"4_delete_query.php?id={$data[0]}\">delete</a>";
	echo "</td>";
	echo "</tr>";
}


echo "</table>";

?>









</BODY>
</HTML>