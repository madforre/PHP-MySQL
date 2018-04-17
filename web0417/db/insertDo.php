<?php
  header("Content-Type: text/html; charset=UTF-8");
?>

<?php
include "dbConnect.php";

$query="insert into myGuest(userEmail) values('madforre@이메일');";
//$query.=" insert into myGuest(userEmail) values('madforre2@이메일');";
//$query.=" insert into myGuest(userEmail) values('madforre3@이메일')";

$result=$conn->query($query);
//$result=$conn->multi_query($query);

if($result==false){
    echo $conn->connect_error;
    echo "
        <script>
            alert('추가 실패');
        </script>
        ";
}else{
    echo "
        <script>
            alert('추가 성공');
        </script>
        ";
}
$conn->close();

?>