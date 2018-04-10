<?php

// htmlspecialchars($entity);
// 이 함수는 문자열에서 특정한 특수 문자를 HTML 엔티티로 변환한다. 
// 이 함수를 사용하면 악성 사용자로 부터 XSS 공격을 방지 할 수 있다. 
// 변환되는 문자는 아래와 같다.

$entity= "<b>b요소가 삭제되어 출력화면에 나타난다.</b>";
    
echo $entity."<br>";
echo "<br>";
echo htmlspecialchars($entity);

$entity2= "<?php  echo 'php 구문도 엔티티로 변환이 된다.'; ?>";
echo htmlspecialchars($entity2);

// nl2br() 문자열에 포함된 개행 문자를 <br>태그로 모두 바꿈

echo nl2br( "안녕하세요~~
우리나라
대한민국"
);
echo "<br>";
?>