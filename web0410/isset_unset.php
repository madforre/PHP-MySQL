<?php
$userId="manso1";
echo isset($userId)."<br>"; //$_POST, $_GET

if(!isset($userId)){
    echo "정보가 없습니다<br>";
}else{
    echo "정보가 있습니다<br>";
}

//연결을 끊는다.

$a = 1;
$b = & $a;
unset($a);
echo "<br>";
echo $b;
?>