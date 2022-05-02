<?php
    $score = 95;        // 시험 점수
 
    if ($score > 100 || $score < 0)
       echo("입력 점수 오류!");
    elseif ($score>90)
    {
       echo("시험 점수 : $score<br>");
       echo("등급 : 수<br>");
    }
    elseif ($score>80)
    {
       echo("시험 점수 : $score<br>");
       echo("등급 : 우<br>");
    }
    elseif ($score>70)
    {
       echo("시험 점수 : $score<br>");
       echo("등급 : 미<br>");
    }
    elseif ($score>60)
    {
       echo("시험 점수 : $score<br>");
       echo("등급 : 양<br>");
    }
    else
    {
       echo("시험 점수 : $score<br>");
       echo("등급 : 가<br>");
    }
 ?>