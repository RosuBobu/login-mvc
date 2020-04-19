<?php

    class UserManager extends DBManager{

        public function __construct(){
            parent::__construct();
        }

        public function insert(User $user){
            $username = $user->getUsername();
            $mail = $user->getMail();
            $password = $user->getPassword();
            // $submitdate = $user->getSubmitDate();
            $req = $this->db->prepare('INSERT INTO users(username, mail, password,  submitdate) VALUES (?,?,?,NOW())');
            $req->bindParam(1, $username);
            $req->bindParam(2, $mail);
            $req->bindParam(3, $password);
            $req->execute();
            $user->setID($this->db->lastInsertId());
        }

        public function selectAll(){
            $users = [];
            $sql = 'SELECT * FROM users';
            foreach($this->db->query($sql) as $row){
                $users[]=new User($row['id'], $row['username'], $row['mail'], $row['password'], $row['submitdate']);
            }
            return $users;
        }

        public function testLogin($loginToCheck, $passwordToCheck){
            //select method
            $req = $this->db->prepare('SELECT * FROM users WHERE (username = ? OR mail = ?) AND password = ?');
            $req->bindParam(1, $loginToCheck);
            $req->bindParam(2, $loginToCheck);
            $req->bindParam(3, $passwordToCheck);
            $req->execute();
            $res = $req->fetch();
            $error = null;
            $loggedUser = null;
            $access = null;

            if($res === false){
                echo('FALSE');
                $access = false;
                $error = '--- Unknown User ---';
            } else {
                echo('TRUE');
                $access = true;
                $loggedUser = new User($res['id'], $res['username'], $res['mail'], $res['password'],$res['submitdate']);
            }
            
            return ['error'=>$error, 'user'=>$loggedUser, 'access'=>$access];


            // $access = false;
            // $sql = 'SELECT username, mail, password FROM users';
            // foreach($this->db->query($sql) as $user){
            //     if($loginToCheck == $user['username'] || $loginToCheck == ['mail'] && $passwordToCheck == $user['password']){
            //         echo('access granted');
            //         header('Location: http://localhost/login-mvc/index.php?controller=default&action=home');
            //     } //else todo
            // }
        }

        public function isMatchRegister($login, $password){
            //todo -> will check if user already exists during registration
        }

        




    }
?>