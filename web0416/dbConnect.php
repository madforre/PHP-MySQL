<?php
//계정 연결
$servername = "localhost";
$dbId = "root";
$dbPw = "fire0428";
$dbName = "member";

$conn=mysqli_connect($servername,$dbId,$dbPw,$dbName);

if(!$conn){
    die("계정연결 실패".mysqli_connect_error());
}
echo "계정연결 성공";

mysqli_close($conn);

// 2번째 방법
//// DB연동
//$hostName = "localhost";
//$dbId = "root";
//$dbPw = "fire0428";
//$dbName = "member";
//
//$conn=new mysqli($hostName,$dbId,$dbPw,$dbName);
//
//if($conn->connect_error){ // DB연결이 실패시 
//
//    die("DB연결 실패 >>".connect_error);
//}
//echo "DB연결 성공";
//
//$conn->close();

?>