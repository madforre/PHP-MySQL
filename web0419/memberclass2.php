<?php
    class Member{
        private $id;
        private $lastname;
        private $firstname;
        private $email;
        private $password;
        public function getId(){
            return $this->id; // 이 메소드로 데이터를 취득합니다.
        }
        public function setId($id){
            $this->id = $id; // 이 메소드로 데이터를 설정합니다.
        }
        public function getLastname(){
            return $this->lastname;
        }
        public function setLastname($lastname){ // 나중에 클래스의 메소드를 
                                                // setLastname('당신의 성') 호출할 때 
                                                // '당신의 성'을 매개변수로
                                                // 받아 그 매개변수를 Member의 lastname 멤버에 넣는다.
            $this->lastname = $lastname;
        }
        public function getFirstname(){
            return $this->firstname;
        }
        public function setFirstname($firstname){
            $this->firstname = $firstname;
        }
        public function getEmail(){
            return $this->email;
        }
        public function setEmail($email){
            $this->email = $email;
        }
        public function getPassword(){
            return $this->password;
        }
        public function setPassword($password){
            $this->password = $password;
        }
        // 회원 정보 입력
        public function regist(){}
        // 입력 완료 메일 발송
        public function registMail(){}
        // 회원 정보 편집
        public function edit(){}
        // 패스워드 재발급
        public function resendPassword(){}
        // 탈퇴 처리
        public function delete(){}
    }
    