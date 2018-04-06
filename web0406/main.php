<?php

if(!isset($_GET['userId'])){
    echo "
        <script>
          alert('요청경로 오류');
          location.href='login.php';
        </script>
    ";
    exit;
};

$userId = $_GET['userId'];

//echo "<h1>".$userId."님 환영합니다!!</h1>";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>main 페이지</title>
</head>
<body>
   <h1><?=$userId?>님 환영합니다!! 즐거운 쇼핑되세요!</h1>
    
</body>
</html>