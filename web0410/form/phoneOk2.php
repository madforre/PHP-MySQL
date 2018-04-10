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

$phoneStr=implode("-",$_POST['userPhone']); // 받은 배열을 하이픈으로 묶어서 문자열로 변환
$hobbysStr=implode(",",$_POST['userHobbys']); // 받은 배열을 쉼표로 묶어서 문자열로 변환

$phoneArr=explode("-",$phoneStr); // 문자열을 하이픈으로 구분하여 다시 배열로 변환
$hobbysArr=explode(",",$hobbysStr); // 문자열을 쉼표로 구분하여 다시 배열로 변환


echo "
    <script>
        location.href='formView.php?phone1=$phoneArr[0]&phone2=$phoneArr[1]&phone3=$phoneArr[2]";       for($i=0;$i<count($hobbysArr);$i++){
        echo "&hobbys\[\]=$hobbysArr[$i]";}
        echo "'</script>";
?>