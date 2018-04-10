<?php
if(!isset($_POST['userPhone']) || !isset($_POST['userHobbys'])){
    echo "
        <script>
        alert('접속오류입니다');
        location.href='phone.php';
        </script>        
        ";

    exit;
    }
var_dump($_POST['userPhone']);
echo "<br>";
var_dump($_POST['userHobbys']);
//echo "<br>";
$phoneArr=implode("-",$_POST['userPhone']);
$hobbysArr=implode(",",$_POST['userHobbys']);

echo "<br>";
echo "배열을 하이픈으로 묶어 문자열로 변환 -> ".$phoneArr;
//echo "<br>";

echo "<br>";

echo "배열을 쉼표로 묶어 문자열로 변환 -> ".$hobbysArr;
?>