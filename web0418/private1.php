<?php
    
$test = new Test();

class Test{
    public $str1 = '공개';
    private $str2 = '비밀';
    function p(){
        echo $this->str2;
    }
}

print $test->str1;
print "<br>";
$test->p();

//print $test->str2; //실행하면 오류가 표시된다. 왜? 접근제한 키워드인
// private 때문. private로 키워드를 멤버나 메소드를 지정하면 변수를 선언한 클래스
// 안에서만 참조할 수 있음
print "<br>";
?>