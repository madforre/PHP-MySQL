<?php
include "dbConnect.php";

//$query="create database member5 default character set utf8";
// 외부에서도 db를 생성할 수 있다. 
// 하지만 권하진 않는다.

$query="drop database member5";

$result=$conn->query($query); // true, false;

if($result==false){
    echo " DB 실패 ";
}else{
    echo " DB 성공 ";
};

$conn->close(); // DB관계 처리면 항상 close();

?>