<?php
//함수
function func1(){
    echo "함수 func1() 호출<br>";
}

func1(); // call (함수를 호출)
func1();

for($i=0;$i<10;$i++){
    func1();
    
}

?>