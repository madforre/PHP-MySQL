<?php
    // 회원제 사이트 기능 설계

    // 1. 사용자는 필요한 정보를 입력하고 회원으로 등록
    // 2. 등록 완료 메일이 도착합니다.
    // 3. 사용자는 로그인 화면에서 로그인합니다.
    // 4. 사용자는 회원만 볼 수 있는 콘텐츠를 볼 수 있습니다.

    class Member{
        private $id;
        private $lastname;
        private $firstname;   // private로 지정하여 접근들을 제한합니다.
        private $email;
        private $password;
        
        // 회원 정보 입력
        public function regist(){}
        
        // 입력 완료 메일 발송
        public function registMail(){}
        
        // 회원 정보 편집
        public function edit(){}   // 메소드들을 public으로 지정하여 외부에서 접근할 수 있게 합니다.
                                   // 접근제어자 public 안써주면 자동으로 public으로 인식
        // 패스워드 재발급
        public function resendPassword(){}
        
        // 탈퇴 처리
        public function delete(){}
    }
?>
    
    