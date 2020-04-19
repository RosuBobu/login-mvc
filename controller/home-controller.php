<?php

    class HomeController{

        public function __construct(){
            if(empty($_SESSION['user'])){
               header('Location:index.php?controller=user&action=loginPage&error=log_necessary');
            }
        }

        public function displayDashboard(){
            $user = $_SESSION['user'];
            require 'view/dashboard.php';
        }
    } 