<?php
include "dbConnect.php";

$query="SELECT * FROM memberjoin";

$result=$conn->query($query); // DB의 data를 get

if($result->num_rows>0){
        
    while($row = $result->fetch_assoc()){ // DB data를 row 즉 record 단위로.
        
   echo $row['userId'].",".$row['userPw'].",".$row['userGender'].",".$row['userPhone'].",".$row['userHobbys'];
    echo "<br>";
    }
}else{
    echo "DB 테이블의 data가 없습니다";
}