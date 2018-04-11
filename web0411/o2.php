<?php
// 슈퍼글로벌변수(브라우저유저)
//$_GET['']; // 전송방식 post
//$_POST['']; // 전송방식 get
//$_REQUEST['']; // 전송방식 post, get

if(!isset($_POST['Name'])){
    // 정보가 없지?
    echo "
        <script>
            alert('잘못된 접근!!');
            location.href='o.php';
        </script>
        ";
    exit; // 그냥 끝내버리기~
}
$Name = $_POST['Name'];
if($Name=="" || $Name==null){
    // 설정 값이 없거나 공백이면
    echo "
        <script>
            alert('선수가 없습니다!!');
            history.go(-1);
        </script>
        ";
}else{
    echo  "
        <script>
            alert('호우');
        </script>
        ";
    echo $Name." 선수가 득점에 성공합니다.";
};
?>