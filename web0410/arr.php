<?php
    $str2="userId,userPw,userGender";
    $str2Arr=explode(",",$str2); // 문자열을 구분 기호로 배열화 // split

    echo count($str2Arr);

    echo "<br><br>문자열을 구분기호로 배열화<br>";
    echo "<pre>";
    print_r($str2Arr);
    echo "</pre>";


    echo "<br>";
    foreach($str2Arr as $key=>$val){
        echo "$key=>$val <br>";
    };

    echo "<br>";
    $str3=implode($str2Arr,"틈새<br>"); // 배열 >> 문자열
    echo $str3;
?>
<?php

    echo "<br><br>배열을 문자열화<br>";
    $data = array("사과","귤","감","밤");
    $result = implode('***',$data); // 배열 >> 문자열
        echo "<pre>";
        print_r($data);
        echo "</pre>";

    echo var_dump($result);

?>

<?php
    echo "<br><br>배열을 문자열화<br>";
    $phone = array("010", "1237", "2222");
    $phoneRs = implode('-',$phone); // 배열 >> 문자열

    echo "<pre>";
    print_r($phone);
    echo "</pre>";
    echo var_dump($phoneRs);

    $phone2 = "010-1111-2222";
    echo "<br><br>문자열을 구분기호로 배열화<br>";
    $phone2Rs = explode("-",$phone2); // 문자열을 구분기호로 배열화
    
    echo "<pre>";
    print_r($phone2Rs);
    echo "</pre>";
    echo var_dump($phone2Rs)."<br>";

    foreach($phone2Rs as $key=>$val){
        echo "$key=>$val <br>";
    }

?>