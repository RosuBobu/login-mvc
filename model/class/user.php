<?php

    class User{
        private $id;
        private $username;
        private $mail;
        private $password;
        private $submitdate;

        public function __construct($id = null, $username, $mail, $password, $submitdate){
            $this->id = $id;
            $this->username = $username;
            $this->mail = $mail;
            $this->password = $password;
            $this->submitdate = date('D-M-Y');
            // $this->submitdate = $submitdate;
        }
        
        public function getId(){
            return $this->id;
        }

        public function setId($id){
            $this->id = $id;
        }
    
        public function getUsername(){
            return $this->username;
        }

        public function setUsername($username){
            $this->username = $username;
        }

        public function getMail(){
            return $this->mail;
        }

        public function setMail($mail){
            $this->mail = $mail;
        }

        public function getPassword(){
            return $this->password;
        }

        public function setPassword($password){
            $this->password = $password;
        }

        public function getSubmitDate(){
            return $this->submitdate;
        }

        public function setSubmitDate($submitdate){
            $this->submitdate = $submitdate;
        }
    
    }
    
?>    