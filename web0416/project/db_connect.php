<?php
//DB 커넥트
$hostName="localhost";
$dbId="root";
$dbPw="fire0428";
$dbName="member3";

$conn=new mysqli($hostName,$dbId,$dbPw,$dbName);

$conn->query("SET NAMES utf8"); 

if($conn->connect_error){ // mysqli::$connect_error 에러가 없으면 null을 리턴한다.
    echo "
        <script>
            alert('DB연결 실패');
            location.href='index.php';
        </script>    
    ";
    exit;
}

?>