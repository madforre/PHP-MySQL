<?php

// PDO 객체지향적 코딩

$hostName='localhost';
$dbId='root';
$dbPw='1111';
$dbName='member4';
//$dbPort=3306 기본포트 거의 안바뀜

try{
    $conn = new PDO("mysql:host=$hostName;dbname=$dbName", $dbId, $dbPw);
    // set the PDO error mode to exception
    $conn->setAttribute({PDO::ATTR_ERRMOD, PDO::ERRMODE_EXCEPTION});
    echo "Connected successfully";
    }
    
}catch(PDOException $e){
    
    echo "Connection failed: " . $e->getMessage();
}




// try ~catch()
// 에러
// 컴파일에러(실행하기전에 에러) << 프로그램이 실행 X
// 런타임에러(실행중에 에러) 에러.. 예외(exception)
// 예외(exception) : 치명적인 에러아니라 무시하고 프로그램을 진행할 정도로의 에러

//// PDO 쓰려면 반드시 try catch 써주어야 한다.
//
//try {
//    // 예외 발생이 예사오디는 코드
//}
//catch(예외){
//    // 예외를 처리
//}
//



?>