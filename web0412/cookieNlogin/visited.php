+<?php

$val=1;

if(isset($_COOKIE['userId'])){
    $val=$_COOKIE['userId']; // 쿠키 userId의 값
    $val++;
}

setcookie("userId",$val,time()+10); //다시 접속할 때 마다 쿠키를 설정해줌.

//쿠키값은 브라우저에서 유지된다.



    if($val==1){
        echo "첫번째 방문 입니다";
        }else{
        echo "쿠키는 ".$_COOKIE['userId']."<br>"."받은 쿠키를 \$val에 담아서 다시 setcookie 해줬다. <br>";
        echo $val."번째 방문 입니다";
        
        echo " 쿠키초기화 -> <a href='cookieDelete2.php'>클릭</a>";
        
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    . 새로고침 하려면 옆의 버튼 클릭 -> <button>새로고침</button>
    <script>
        var refresh = document.getElementsByTagName('button')[0];
        refresh.addEventListener('click',function(){
            history.go();
        })    
    
    </script>
</body>
</html>
