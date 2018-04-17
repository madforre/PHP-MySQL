<?php

// MYSQL 객체지향적 코딩


$hostName='localhost';
$dbId='root';
$dbPw='1111';
$dbName='member4';
//$dbPort=3306 기본포트 거의 안바뀜


$conn=new mysqli($hostName,$dbId,$dbPw,$dbName)


if($conn->connect_error){ //연결 실패시
    //die('연결 실패:'.$conn->connect_error)// 반환값 반환하고 종료
    echo "
        <script>
            alert('연결 실패');
            location.href='index.php';
        </script>   
        ";
}

?>