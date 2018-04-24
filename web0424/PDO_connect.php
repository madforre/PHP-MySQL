<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<!--mysql를 설치하여 test라는 db를 미리 만들어 놓읍시다!-->
  
   <?php
    
    try{ //접속 처리를 작성합니다.
        $pdo = new PDO('mysql:host=localhost;dbname=test;charset=utf8','root','fire0428');
        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
            print "접속하였습니다.";
        }catch(PDOException $Exception){ //예외 클래스를 지정한 뒤 오브젝트를 할당할 변수를 지정합니다.
        die('접속 오류:' .$Exception->getMessage()); // 이 메소드에서 오류 메시지를 가져옵니다.
    }    
    ?>
    
<!--
PDO 방식을 통해 오류 정보를 가져오는 모드를 지정해주고, 프리페어드 스테이트 먼트를 통해
속도와 안정성을 향상시킵니다.(안전하게 SQL을 실행하기 위하여 이 설정을 이용)
-->

</body>
</html>