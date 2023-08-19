<?php
namespace App\classes;

class Login implements Auth{
    private $email, $password, $userEmail, $userPassword;

    public function __construct($post_data =null)
    {
       if($post_data){
        $this->email    = $post_data['email'];
        $this->password = $post_data['password'];
       }
    }

    public function login(){
        $userEmail = "user@gmail.com";
        $userPassword = "123456";

        if($this->email == $userEmail && $this->password == $userPassword){
            session_start();
            $_SESSION['id'] = rand(0, 10000);
            header('Location: route.php?page=area');
        }else{
            return 'Invalid Email or Password';
        }
    }

    public function logout(){
        unset($_SESSION['id']);
        header('Location: route.php?page=home');
    }
}