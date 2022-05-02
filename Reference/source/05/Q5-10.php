<?php
    $file1 = fopen("test1.txt","r");
    $file2 = fopen("test2.txt","w");

    $str = "";
    $number = 1;
    while(! feof($file1)) {
        $str .= $number." : ".fgets($file1);
        $number++;
    }

    fwrite($file2, $str);
    echo "파일 쓰기 완료!";

    fclose($file1);
    fclose($file2);
?>