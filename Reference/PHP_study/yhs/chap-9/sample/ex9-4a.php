<?
    
	 /*  --------  mysql ���Ӱ� �����ͺ��̽� ����  --------    */

	$connect = mysql_connect ('localhost', 'root', '123456');   
	$db = mysql_select_db ('study_db', $connect);

    /*  --------    ���� �Է� �ޱ�  --------    */
	
	if($make == "insert")                    // ������ �Է� �ޱ�
	{
		$sum = $os + $wdb + $net;     // ����
		$avg = $sum/3;                       // ���

		$sql = "insert into grade (name, os, wdb, net, sum, avg, grd) values";
		$sql = $sql. "($name, $os, $wdb, $net, $sum, $avg, $grd)";
	//	echo $sql;
	//	exit;

		$result = mysql_query ($sql, $connect);    // ���� ó��
	}

?>

    <!--    ���� �Է¿� ���� FORM �±�  -->

<html>
	<head><title> ���� ��ǥ </title></head>
	<body>
	<center><h2> ���� ��ǥ </h2></center>
	<table width=880 border=1 cellspacing=1 cellpadding=5 bgcolor=#FFFFCC>

		<tr align=center>
			<form action=<?php echo $_SERVER['PHP_SELF']; ?> method='post'>
			<td>
				���� : <input type="text" size=10 name="name">&nbsp; 
				�ü�� : <input type="text" size=5 name="os">&nbsp; 
				�� DB : <input type="text" size=5 name="wdb">&nbsp; 
				��Ʈ��ũ : <input type="text" size=5 name="net">  &nbsp;&nbsp;&nbsp;
				<input type="submit" value=" ��  �� ">
				<input type="hidden" name="make" value="insert">   
			</td>

             <!--   ���� ������ ����  --> 

			<form action=<?php echo $_SERVER['PHP_SELF']; ?> method="post">
			<td>
				<input type="submit" value="���� ������">
			 	<input type="hidden" name="make" value="height_sort">  
			</td>
			</form>

             <!--   ���� ������ ����  --> 

			<form action=<?php echo $_SERVER['PHP_SELF']; ?> method="post">
			<td>
				<input type="submit" value="���� ������">
			 	<input type="hidden" name="make" value="low_sort">   
			</td>
			</form>
		</tr>
	</table><br>

             <!--   �ʵ�� ǥ��  --> 

	<table width=880 border=1 cellspacing=1 cellpadding=5 bgcolor=#FFFFCC>
		<tr>
			<td align=center> <b>��ȣ </b></td>
			<td align=center> <b>���� </b></td>
			<td align=center> <b>�ü�� </b></td>
			<td align=center> <b>�� DB </b></td>
			<td align=center> <b>��Ʈ��ũ </b></td>
			<td align=center> <b>���� </b></td>
			<td align=center> <b>��� </b></td>
			<td align=center> <b>��� </b></td>
			<td align=center> <b>���� ���� </b></td>
		</tr> 

<?php           // select �� ����

	if($make == "height_sort")            // ���� ������ ���� (��������)
		$sql = "select * from grade order by sum desc";

	elseif($make == "low_sort")          // ���� ������ ����(��������)
		$sql = "select * from grade order by sum";    // asc�� ���� ����

	else
		$sql = "select * from grade";

	$result = mysql_query($sql);         // ���� ó��
	$count = 1;                                // ��ȣ ��½� �Ϸù�ȣ
		
	 /*  -------- ������ ���  --------    */

	while ($row = mysql_fetch_array($result))
	{
		$avg = round($row [avg], 1);

		echo "<tr>";
		echo "<td align=center> $count </td>";
		echo "<td align=center> $row[name] </td>";
		echo "<td align=center> $row[os] </td>";
		echo "<td align=center> $row[wdb]</td>";
		echo "<td align=center> $row[net]</td>";
		echo "<td align=center> $row[sum]</td>";
		echo "<td align=center> $avg</td>";
		echo "<td align=center> $row[grd]</td>";
		echo "<td align=center>
			<a herf = ex9-5.php? sno=". $row[ sno]. ">".
			 "����</a></td>";      
		echo "<tr>";

		$count++;
	}

	mysql_close($connect);   

	?>
	</table>

