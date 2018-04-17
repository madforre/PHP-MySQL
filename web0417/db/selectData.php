<?php
include "dbConnect.php";

$query="SELECT * FROM memberjoin";

$result=$conn->query($query); // DB의 data를 get

//li로 짰을 경우.

if($result->num_rows>0){
    echo $result->num_rows."개의 ";
    echo "DB 테이블의 data가 있습니다.";
    echo "<br><br>";
    while($row=$result->fetch_assoc()){
        // DB data를 레코드 단위
        echo "<div class='guest'>";
        echo "<ul>";
        
        echo "<li>".$row['userId']." , "."</li>";
        echo "<li>".$row['userPw']." , "."</li>";
        echo "<li>".$row['userGender']." , "."</li>";
        echo "<li>".$row['userPhone']." , "."</li>";
        echo "<li>".$row['userHobbys']."<br>"."</li>";
        echo "</ul> </div>";
        
    }
}else{
    echo "DB 테이블의 data가 없습니다.";  
};

// 테이블로 짰을 경우 미완성 나중에 해보기
//
//if($result->num_rows>0){
//    echo $result->num_rows."개의 ";
//    echo "DB 테이블의 data가 있습니다.";
//    echo "<br><br>";
//  
//    while($row=$result->fetch_assoc()){
//        // DB data를 레코드 단위
//        echo "<table border='1'>"; 
//        echo "<tr> <th>이름</th>";
//        echo "<th>이름</th>";
//        echo "</tr>";
//        
//        
//        echo "<tr>";
//        echo "<td>".$row['userId']." , "."</td>";
//        echo "<td>".$row['userPw']." , "."</td>";
//        echo "<td>".$row['userGender']." , "."</td>";
//        echo "<td>".$row['userPhone']." , "."</td>";
//        echo "<td>".$row['userHobbys']."<br>"."</td>";
//        echo "</tr>";
//    }
//}else{
//    echo "DB 테이블의 data가 없습니다.";  
//};
?>