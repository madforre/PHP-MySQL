<?php

trait SayMorning{ // 트레이트 선언
    public function print_morning(){
        print $this->name;
        print "님, 안녕하세요!<br>";        
    }
}
//$a = new SayMorning(); trait는 인스턴스화 할 수 없다. 오류가 출력된다.
//  Cannot instantiate trait SayMorning
//    $a->print_morning(); 

class User{ // 클래스정의
    private $name = null;
    public function print_hello(){
        print $this->name;
        print "님. 반갑습니다!!<br>";
    }
}

class Guest extends User{
    use SayMorning;
    private $name = "게스트"; // override 재정의
    public function print_hello(){ // override 재정의
        print $this->name;
        print "님, 처음 뵙겠습니다!<br>";
    }
}

$newuser = new guest(); // User 클래스를 상속받은 Guest 클래스를 인스턴스화한다.
$newuser->print_hello(); // User 클래스를 상속받은 Guest 클래스에서 재정의된 print_hello 함수를 출력해주었다.
$newuser->print_morning(); // User 클래스를 상속받은 Guest클래스에서 use SayMorning으로 
                           // 트레이트를 추가해줬기에
                           // 트레이트에 있던 메소드를 사용 가능하게 되었다.

