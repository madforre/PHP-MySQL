<?php

//쿠키

setcookie('cookieId','cookieVal',
          time()+60*60);

// 1시간 동안 쿠키 유지 60초가 60번.
// 즉 한시간.

echo $_COOKIE["cookieId"];

?>