<?php
session_start();
if(!isset($_SESSION['sessionId'])){
    echo "<script>
            alert('로그인(세션)정보가 없습니다. 로그인페이지로 이동합니다');
            location.href='login.php';
          </script>    
        ";
    exit; // exit 만나면 바로 종료. 하위 코드들을 아예 실행 못하게 함
}
echo "세션아이디 : ".$_SESSION['sessionId'].'<br><br>';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
메인에 오신것을 환영합니다!
<div id="wrap">
   
       <div class="hi"><?=$_SESSION['sessionId']?> 님 환영합니다 !</div>    
    
    
</div>
</body>
</html>