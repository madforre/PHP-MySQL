<?php

    //Member 클래스를 사용해 실제로 데이터를 설정해보자.
    
    include 'memberclass2.php'; // Member 클래스가 포함된 php 파일을 가져온다.    

    // 우선은 new 키워드로 Member 클래스의 인스턴스를 생성한다.
    $member = new Member;
    $member->setID("1");
    $member->setLastname('당신의 성');
    $member->setFirstname('당신의 이름');
    $member->setEmail('당신의 메일 주소');
    $member->setPassword('패스워드');
    print $member->getID()."<br>";
    print $member->getLastname()."<br>";
    print $member->getFirstname()."<br>";
    print $member->getEmail()."<br>";
    print $member->getPassword()."<br>";

?>
    
