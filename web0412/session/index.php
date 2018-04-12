<?php
@session_start();

//echo $_SESSION['sessionId']."<br>";
//echo $_SESSION['sessionPw']."<br>";

if(!isset($_SESSION['sessionId']) || !isset($_SESSION['sessionPw'])){
    echo "
        <script>
            alert('세션정보가 없습니다.');
            location.href='main.php';
        </script>   
    ";
    exit;
    
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>  
   세션1 : <?=$_SESSION['sessionId']?><br>
   세션2 : <?=$_SESSION['sessionPw']?><br>    
</body>
</html>