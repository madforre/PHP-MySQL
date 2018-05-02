create database php_ajax default charset='utf8';

use php_ajax;

create table if not exists user(
    id int(11) not null auto_increment,
    FirstName varchar(100) not null,
    Lastname varchar(100) not null,
    age int(11) not null,
    hometown varchar(100) not null,
    job varchar(100) not null,
    primary key(id)
    ) default charset='utf8';
 
)