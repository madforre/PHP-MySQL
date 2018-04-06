<?php
if(!isset($_GET['userId'])){
    echo "<script>
                alert('접속 경로 오류');
                location.href='login.php';
          </script>";
    exit;
}

$userId=$_GET['userId'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>관리자 페이지</title>
</head>
<body>
   <span><?=$userId?>님 환영합니다^^</span> 
    
</body>
</html>