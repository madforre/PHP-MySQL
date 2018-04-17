<?php
include "dbConnect.php";



$userEmail="manso10@이메일";

$query="insert into myGuest(userEmail) values(?);";

$psmt = $conn->prepare($query);
$psmt->bind_param("sssss",$userEmail);

$result=$psmt->execute(); //쿼리 문을 실행 ( 성공하면 1 값을 반환)

if($result==false){
    echo"추가 생성 실패";
}else{
    echo "추가 생성 성공";
}

$conn->close();
?>