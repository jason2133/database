﻿<?php
	echo "같은 변수명의 데이터형 변환 <br>";
	echo "--------------------------------- <br>";
		$var = 123;
			echo " \$var=123 변수의 데이터형 : ";
			echo gettype($var);			
		$var = 38.52;
			echo " <br>\$var=38.52 변수의 데이터형 : ";
			echo gettype($var);
    ?>