<?php
include "db_connect.php";

// $conn->close();

$query="insert into ";
$query.="memberJoin(userId,userPw,userGender,userHobbys,userPhone)";
$query.="values('soyo','1111','남자','코딩','010-000-0000');";

$result = $conn->query($query); // SQL문 실행
    // mysqli 클래스 안에 이미 존재하는 메서드를 가져온 것이다.
    // 이것을 result라는 변수에 담는다.

if($result==true){
    echo "회원 가입 성공";
}else {
    echo "<p>Error 발생 >>  ". $query. "</p><p>sql문 Error >>" . $conn->error."</p>";
}

$conn->close();
?>