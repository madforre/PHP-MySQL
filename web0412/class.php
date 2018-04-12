<?php
//클래스

class ClassBasic{
    public $userId='manso';
    public $userPw;
    //멤버 (필드, 프로퍼티)
    
    
    function classMethod(){ //멤버 (메서드)
        echo "클래스 멤버의 메서드 출력 OK";
    }
}
//인스턴스화(객체화)
$object1=new ClassBasic();
echo gettype($object1);
echo "<br>";
$object1->userId;
//object1 객체의 userId에 접근해라.

// 객체의 멤버(필드)
echo $object1->userId;
$object1->userPw='1111';

// userPw 초기화
echo "<br>";
echo $object1->userPw;

// 객체의 메서드 접근
echo "<br>";
$object1->classMethod();


echo "<br>";
//배열
$object1->arrInt=array(1,2,3,4,5);

foreach($object1->arrInt as $val){
    echo $val."<br>";
}

?>