<?php

    class DefaultController{
        public function home(){
            $userManager = new UserManager;
            require 'view/home_view.php';
        }

    }

?>