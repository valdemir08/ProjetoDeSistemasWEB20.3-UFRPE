<?php


namespace projetophp\src\controller;


use projetophp\src\model\dao\UserDAO;

class AuthController{
    public function login(){
        require __DIR__."/../view/auth/login.php";
    }
    public function dashboard(){
        require __DIR__."/../view/auth/dashboard.php";
    }
    public function checkUserAndPasswordLogin(){
        $email = $_POST["email"];
        $password = $_POST["password"];
        $user_dao = new UserDAO();
        $user_return = $user_dao->verifyUserAndPassword($email, $password);
        if ($user_return != null){
            $_SESSION["user"] = $user_return->getEmail();
            $_SESSION["user_id"] = $user_return->getId();
            $_SESSION["user_name"] = $user_return->getName();

        }else{
            $_SESSION["message"] = "usuário e/ou senha inválidos";
        }

        header("Location: /");
    }

    public function logout(){
        unset($_SESSION["user"]);
        unset($_SESSION["user_id"]);
        unset($_SESSION["user_name"]);
        header("Location: /");
    }
}