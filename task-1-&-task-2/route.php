<?php
require_once 'vendor/autoload.php';

use App\classes\Area;
use App\classes\Auth;
use App\classes\Circle;
use App\classes\Home;
use App\classes\Login;
use App\classes\Rectangle;

if(isset($_GET['page'])){
    include 'pages/includes/header.php';
    if($_GET['page'] == "home"){
       
        if(isset($_POST['loginBtn'])){
            $auth = new Login($_POST);
            $message = $auth->login();
            include 'pages/home.php';
        }else{
            $home = new Home();
            $home->index();
        }
    }elseif($_GET['page'] == "logout"){
        $auth = new Login();
        $auth->logout();
    }elseif($_GET['page'] == 'area'){
        if(!isset($_SESSION['id'])){
            header("Location: route.php?page=home");
        }else{
            include 'pages/area.php';
        }
    }elseif($_GET['page'] == 'circle'){
        if(isset($_POST['radius'])){
            $calculateCircle = new Area($_POST);
        }
        include 'pages/circle.php';

    }elseif($_GET['page'] == 'rectangle'){
        if(isset($_POST['width']) && isset($_POST['height'])){
            $calculateRectangle = new Area($_POST);
        }
        include 'pages/rectangle.php';
    }else{
        echo 'Page not found';
    }
    include 'pages/includes/footer.php';
}else{
    echo 'Page not found';
}