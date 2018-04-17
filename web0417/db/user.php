<?php

//혼자 치다가 설명을 안함

class User{
    private $userId;
    private $userPw;
    private $userGender;
    private $userPhone;
    private $userHobbys;
    
    function __construct($userId,$userPw,$userGender,$userPhone,$userHobby){
        
        $this->userId=$userId;
        $this->userPw=$userPw;
        $this->userGender=$userGender;
        $this->userPhone=$userPhone;
        $this->userHobbys=$userHobbys;       
    }
    
    function getUserId(){
        return $this->userId;
    }
    
    function getUserPw(){
        return $this->userPw;
    }
    
    function getUserGender(){
        return $this->userGender;
    }
    
    function getUserPhone(){
        return $this->userPhone;
    }
    
    function getUserHobbys(){
        return $this->userHobbys;
    }
    
    
    }

?>