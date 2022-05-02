<?php
    $servername = "localhost";          // 서버명
    $username = "user";                 // 사용자명
    $password = "12345";                // 비밀번호
    $dbname = "sample";                 // DB명

    // MySQL 연결하기
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    
    // $sql에 다수의 데이터 삽입 명령 저장
    $sql = "insert into friend (name, tel, address) values
            ('윤채린', '01059856767', '대전광역시 동구 중교로 123');";   
    $sql .= "insert into friend (name, tel, address) values
            ('강선호', '01030904785', '서울특별시 종로구 자하문로30길 123');";    
    $sql .= "insert into friend (name, tel, address) values 
            ('김수진', '01038978950', '경기도 용인시 수지구 정평로 123');";            
    $sql .= "insert into friend (name, tel, address) values 
            ('장서연', '01043889485', '서울특별시 동대문구 보문로 123');";       
    $sql .= "insert into friend (name, tel, address) values 
            ('박성찬', '01043806006', '경기도 용인시 처인구 원천로 123');";           

    $result = mysqli_multi_query($conn, $sql);

    if ($result) 
        echo "데이터 삽입 완료!";
    else 
        echo "데이터 삽입 오류 : " . mysqli_error($conn);

    mysqli_close($conn);
?>
