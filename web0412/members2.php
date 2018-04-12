<?php
class Members{    

        private $userId;
        private $userPw; // 클래스 내에서만 접근 가능(private)
        private $userName;    
 
    // (생성자)객체 생성을 도와주는 메서드
    // php에는 _constructor 생성자가 있음
    
//    function __construct($userId,$userPw,$userName){
//        $this->userId=$userId;
//        $this->userPw=$userPw;
//        $this->userName=$userName;        
//    }
    
    function insertDoMethod($userId,$userPw,$userName){
        $this->userId=$userId;
        $this->userPw=$userPw;
        $this->userName=$userName;        
    }
    // setter 외부에서 멤버를 초기화
    function setUserId($userId){
        $this->userId=$userId;
    }
    function setUserPw($userPw){
        $this->userPw=$userPw;
    }
    function setUserName($userName){
        $this->userName=$userName;
    }    
    //getter 초기화한 멤버를 get
    function getUserId(){
        return $this->userId;
    }
    function getUserPw(){
        return $this->userPw;
    }
    function getUserName(){
        return $this->userName;
    }   
    
    //보안 때문에 외부에서 멤버를 초기화하게 한다.
}

$member1=new Members;
//$member1->userId="manso"; // private기 때문에 접근불가.

$member1->setUserId("manso");
$member1->setUserPw("2222");
$member1->setUserName("son1");
echo $member1->getUserId()."<br>"; 
// 메서드는 호출한 그 시점(지점)에서 return
// 함수의 리턴은 호출한 그 지점에서 반환된다.

echo $member1->getUserPw()."<br>"; 
echo $member1->getUserName()."<br>"; 

$member2=new Members;
$member2->insertDoMethod('manso2','33333','son3');
// 각각의 setter 를 사용하지않고
// 한번에 초기화 해주었다.
// 이런식으로 getter도 한번에 쓸 수 있게끔
// 만들어 줄수도 있다^^

echo "member2 아이디: ".$member2->getUserId();

?>