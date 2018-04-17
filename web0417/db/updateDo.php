<?php
include "dbConnect.php";

$query="SELECT * FROM memberjoin";

$result=$conn->query($query); // DB의 data를 get

$userId="";
$userPw="";
$userGender="";
$userPhone="";
$userHobbys="";

if($result->num_rows==0){        
    
    echo "
        <script>
            alert('입력정보 오류');
            location.href='index.php';
        </script>";
    
    exit;
}

while($row = $result->fetch_assoc()){ // DB data를 row 즉 record 단위로.
    
    $userId=$row['userId'];
    $userPw=$row['userPw'];
    $userGender=$row['userGender'];
    $userPhone=$row['userPhone'];
    $userHobbys=$row['userHobbys'];
}

echo "
    <script>
        alert('회원 수정페이지로 이동합니다');
        location.href='update.php?userId=$userId&userPw=$userPw&userGender=$userGender&userPhone=$userPhone&userHobbys=$userHobbys';
    </script>    
        ";
    
    
$conn->close();

?>