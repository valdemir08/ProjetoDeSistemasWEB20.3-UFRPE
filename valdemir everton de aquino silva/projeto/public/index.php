<?php

session_start();
require __DIR__ . "./../autoload.php";

use projetophp\src\controller\FilePrivController;
use projetophp\src\controller\UserController;
use projetophp\src\controller\AuthController;

$auth_controller = new AuthController();
$filepriv_controller = new FilePrivController();

$path = "";
if (isset($_SERVER["PATH_INFO"])){
    $path = $_SERVER["PATH_INFO"];
}
$method = $_SERVER["REQUEST_METHOD"];

switch ($path){
    case "/auth":
        if($method == "POST") {
            $auth_controller->checkUserAndPasswordLogin();
        }
        break;
    case "/logout":
        if($method == "POST") {
            $auth_controller->logout();
        }
        break;
    default:

        if (isset($_SESSION["user"])){
            switch ($path){
                case "/filepriv":
                    routes($filepriv_controller);
                    break;
                default:
                    $auth_controller->dashboard();
            }
        }else{
            $auth_controller->login();
        }

}

function routes($controller){
    $query = "";
    $id = null;
    if (isset($_SERVER["QUERY_STRING"])){
        $query = explode("&",$_SERVER["QUERY_STRING"]);

        if (isset($query[1])) {
            $data_array = explode("=", $query[1]);
            $id = $data_array[1];
        }
    }
    if ($_SERVER["REQUEST_METHOD"] == "GET"){
        if ($query !== ""){
            if ($query[0] == "create"){//submit file
                $controller->create();
            }else if ($query[0] == "view"){//list
                $controller->view($id);
            }else if ($query[0] == "edit"){//edit name of file
                $controller->edit($id);
            }else if ($query[0] == "download"){
                echo "chegou";
                $controller->download($id);
            }else{
                echo "Resource not found";
            }
        }else{
            $controller->index();
        }
    }else{
        $metodo = "POST";

        if (isset($_POST["_method"])){
            $metodo = $_POST["_method"];

        }
        switch ($metodo){
            case "POST":
                $controller->store();
                break;
            case "PUT":
                $controller->update($id);
                break;
            case "DELETE":
                $controller->delete($id);
                break;
            default:
                $_SESSION['message'] = "method not implemented";
                header("Location: /");
        }
    }
};