<?php

    class UserController{

        public function registerForm(){
            require 'view/register_form.php';
        }

        public function registerUser(){
            $user = new User(null, $_POST['username'], $_POST['mail'], md5($_POST['password']), null);
            $userManager = new UserManager;
            $userManager->insert($user);
            header('Location:index.php?controller=user&action=loginPage');
        }

        public function loginPage(){
            require 'view/login_form.php';
        }

        public function userLog(){
            $loginToCheck = $_POST['login'];
            $passwordToCheck = md5($_POST['password']);
            $userManager = new UserManager;
            $testLogin = $userManager->testLogin($loginToCheck, $passwordToCheck);
            
            if($testLogin['error'] === null){
                $_SESSION['user'] = $testLogin['user']->getUsername();
                header('Location: index.php?controller=home&action=homepage');
                echo('welcome :)');
            } else {
                header('Location: index.php?controller=user&action=registerForm&error='.$testLogin['error']);
            }
        }

        public function logout(){
            session_destroy();
            header('Location:index.php?controller=user&action=loginPage');
        }

    }

?>

