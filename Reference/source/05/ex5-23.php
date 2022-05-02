<?php
    $file = fopen("hello.txt","r");

    while(! feof($file)) {
        echo fgets($file)."<br>";
    }

    fclose($file);
?>