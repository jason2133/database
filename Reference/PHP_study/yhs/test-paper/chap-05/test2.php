<?
  echo "<B> �� array( )�Լ��� �̿��� 5�� ������ ����, ��� </B><br>";
  echo "--------------------------------------------- <br>";
  $score = array(85, 93, 77, 69, 98);   
  $sum = 0;        
  for($c = 0; $c <=4; $c++)
  {	
    $sum += $score[$c];     
    $cnt = $c+1;              
    echo "{$cnt}��° �������� :  $score[$c] ... ( ������ = {$sum} ) <br>";
  }
  $avg = $sum/5;   
  echo "-------------------------------------------- <br>";
  echo " �� 5�������� ..... {$sum} <br> ";
  echo " �� 5������� ..... {$avg} <br>";
  echo "-------------------------------------------- ";
?>