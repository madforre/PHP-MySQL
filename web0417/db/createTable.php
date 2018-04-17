<?php
include "dbConnect.php";

//$query="create database member5 default character set utf8";
// 외부에서도 db를 생성할 수 있다. 
// 하지만 권하진 않는다.

$query="create table if not yourGuest (
        num int(6) unsigned auto_increment ,
        userEmail varchar(50),
        reg_date TIMESTAMP,
        primary key(num)
        ) ENGINE = InnoDB default character set utf8";

$result=$conn->query($query); // true, false;

if($result==false){
    echo " 테이블 생성 실패 ";
}else{
    echo " 테이블 생성 성공 ";
};

$conn->close(); // DB관계 처리면 항상 close();

?>