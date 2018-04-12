<?php
class Members{    

        private $userId;
        private $userPw; // 클래스 내에서만 접근 가능(private)
        private $userName;    
 
    // (생성자)객체 생성을 도와주는 메서드
    // php에는 _constructor 생성자가 있음
    
    function __construct($userId,$userPw,$userName){
        $this->userId=$userId;
        $this->userPw=$userPw;
        $this->userName=$userName;        
    } //보안 때문에 외부에서 멤버를 초기화하게 한다.
    
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
}
$member1=new Members('manso1','1111','son1');
$member2=new Members('manso2','1112','son2');
$member3=new Members('manso3','1113','son3');

echo "아이디: ".$member1->getUserId()."<br>";
echo "비밀번호: ".$member1->getUserPw()."<br>";
echo "이름: ".$member1->getUserName()."<br>";