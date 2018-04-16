<?php
// DB연동
$hostName = "localhost";
$dbId = "root";
$dbPw = "fire0428";
$dbName = "member";

$conn=new mysqli($hostName,$dbId,$dbPw,$dbName);

if($conn->connect_error){ // DB연결이 실패시 

    die("DB연결 실패 >>".connect_error);
}
echo "DB연결 성공";
//$conn->close();
?>