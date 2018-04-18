<?php
    $test = new Test( );

    class Test{
    
        public function TestPublic(){
            print "공개<br>";
        }
        
        function TestNothing(){
        
            print "선언없음<br>"; // 메소드는 별도로 키워드를 선언하지 않으면 자동으로
                                // public을 선언한 것처럼 동작한다.
        }
        
        private function TestPrivate(){
            print "비밀<br>";
        }
    }
    
    $test->TestPublic( );
    $test->TestNothing( );
    $test->TestPrivate( ); // 이 부분만 오류가 된다.
?>