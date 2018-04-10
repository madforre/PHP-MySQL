<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>formView</title>
</head>
<body>
    <?php if(!isset($_GET["phone1"]) || !isset($_GET["phone2"]) || !isset($_GET["phone3"])){
    echo "핸드폰이 없습니다.";} else{ ?>
    핸드폰 번호는 <?=$_GET["phone1"] ?> - <?=$_GET["phone2"] ?> - <?=$_GET["phone3"]?> 입니다.   <?php  }; ?>
    <br>
    <?php if(!isset($_GET["hobbys1"]) || !isset($_GET["hobbys2"]) || !isset($_GET["hobbys3"])){
    echo "취미가 없습니다.";} else{ ?>
    취미는 <?=$_GET["hobbys1"] ?> , <?=$_GET["hobbys2"] ?> , <?=$_GET["hobbys3"] ?> 입니다.   
      <?php  }; ?>
</body>
</html>