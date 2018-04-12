<?php

//쿠키

$cookieId=setcookie('userId','cookieVal',
          time()+60*3);

$cookiePw=setcookie('userPw','cookieVal2',
          time()+60*3);

// 1시간 동안 쿠키 유지 60초가 3번.
// 즉 3분

if($cookieId && $cookiePw){
    echo "OK";
}

?>