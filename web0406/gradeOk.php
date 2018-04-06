<?php
//$grade=$_GET['grade'];
//
//var_dump($grade);
//
//echo "<br><br>";
//
//var_dump((int)$grade);
//
//echo "<br><br>";
//$int_grade = (int)$grade; // 문자열 -> 정수형(int)

$kor=(int)$_GET['kor'];
$eng=(int)$_GET['eng'];
$math=(int)$_GET['math'];
$op=$_GET['op'];

if($op=="+"){        
        echo ($kor+$eng+$math);
};
if($op=="-"){
        echo ($kor-$eng-$math);    
}else if($op=="*"){
        echo ($kor*$eng*$math);    
}else if($op=="/"){
        echo ($kor/$eng/ $math);    
};

echo "<br>== ↑if문 === switch문↓ ==<br>";

switch($op){
    case '+':
        echo ($kor+$eng+$math);
        break; // break문을 만나면 switch 문을 종료
    case '-':
        echo ($kor-$eng-$math);
        break; // break문을 만나면 switch 문을 종료
    case '*':
        echo ($kor*$eng*$math);
        break; // break문을 만나면 switch 문을 종료
    case '/':
        echo ($kor/$eng/$math);
        break; // break문을 만나면 switch 문을 종료
    default:
        echo "해당 연산이 없습니다";
}










//
//if($int_grade>=90){
//    echo "A";
//}else if($int_grade>=80){
//    echo "B";
//}else if($int_grade>=70){
//    echo "C";
//}else if($int_grade>=60){
//    echo "D";
//}else if($int_grade>=50){
//    echo "F";
//}
//

//switch ($int_grade){
//    case $int_grade>=90: echo"A";
//        break;
//    case $int_grade>=80 || $int_grade<90 : echo "B";
//        ...
//}

?>