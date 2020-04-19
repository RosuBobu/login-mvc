<?php
    session_start();

    require 'include.php';

    if($_GET['controller'] === 'default' && $_GET['action'] === 'home'){
        $userController = new DefaultController;
        $userController->home();
    }

    else if($_GET['controller'] === 'user' && $_GET['action'] === 'registerForm'){
        // echo('registerForm');
        $userController = new UserController;
        $userController->registerForm();
    }

    else if($_GET['controller'] === 'user' && $_GET['action'] === 'registerUser'){
        // echo('registerUser');
        $userController = new UserController;
        $userController->registerUser();
    }

    else if($_GET['controller'] === 'user' && $_GET['action'] === 'loginPage'){
        // echo('login');
        $userController = new UserController;
        $userController->loginPage();
    }

    else if($_GET['controller'] === 'user' && $_GET['action'] === 'loggedIn'){
        // echo('logged in');
        //todo
    }

    else if($_GET['controller'] === 'user' && $_GET['action'] === 'userLog'){
        // echo('userLog');
        $userController = new UserController;
        $userController->userLog();
    }

    else if($_GET['controller'] === 'user' && $_GET['action'] === 'logout'){
        // echo('logout');
        $userController = new UserController;
        $userController->logout();
    }

    else if($_GET['controller'] === 'home' && $_GET['action'] === 'homepage'){
        // echo('userLog');
        $homeController = new HomeController;
        $homeController->displayDashboard();
    }    
    

    else { 
        throw new Exception('--- 404 NOT FOUND ---', 404);
    }

?>