<?php
    class User{
        private $name = "test";
        public function print_hello(){
            print $this->name;
            print " 님, 안녕하세요!<br>";
        }
        private function test2(){
            print "ㅇㅇ";
            
        }
    }
    
    $test = new User();
    $test->print_hello(); // private 멤버 에는 접근할 수 없지만
                        // 함수를 통해서는 private인 멤버에 접근이 가능하구나!
    
    //$test->test2(); // 함수가 private면 외부에서 접근이 안되는구나!
    echo "<br>";
    class Guest extends User{
        private $name = "게스트";
        public function print_hello(){
            print $this->name;
            print "님, 반갑습니다!<br>";
        }
    }
    // 클래스 상속 후 재정의(override)
    

    $newuser = new Guest();
    
    $newuser->print_hello();
?>
