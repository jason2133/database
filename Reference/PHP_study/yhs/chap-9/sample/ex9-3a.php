<?

	echo "<h3>�� 'grade' ���̺� ����</h3>";
	echo "<hr>";

	$connect = mysql_connect ('localhost', 'root', '123456');   
	$db = mysql_select_db ('study_db', $connect);

         /*  --------    grade ���̺��� ����  --------    */

	$sql = "CREATE TABLE grade ( ";
	$sql = $sql. "sno int not null auto_increment, ";
	$sql = $sql. "name varchar (10) not null, ";
	$sql = $sql. "os int , ";
	$sql = $sql. "wdb int , ";
	$sql = $sql. "net int , ";
	$sql = $sql. "sum int , ";
	$sql = $sql. "avg float , ";
	$sql = $sql. "grd char(4) , ";
	$sql = $sql. "Primary Key (sno) ) ";

	$result = mysql_query ($sql, $connect);
	
	if($result)
	{
		echo " <B> �� 'grade' ���̺� ���� ���� ..... </B><br><br>";
		echo " ....... ���� ���ڵ带 ������ �غ� �Ǿ����ϴ�.. <br>" ;
		echo "<hr>";
	} 
	else 
	{
		echo "<hr>";
		echo " <B> �� 'grade' ���̺� ������ �����߽��ϴ� .....  </B><br><br>";
		echo "...... �Լ� �Ǵ� SQL����, �����ݷ�(;), �����ͺ��̽� ���� ";
		echo "���� ������ �����Ͻʽÿ�  !!! <br>";
		exit;
	}

		mysql_close($connect);   
		echo " �� mysql ������ ����Ǿ����ϴ�  !!!";

	?>