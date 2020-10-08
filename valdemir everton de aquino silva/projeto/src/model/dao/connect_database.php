<?php
function getConnection(){
    $connection = new mysqli("127.0.0.1", "root", "","projeto_1va");
    if (mysqli_connect_errno()){
        echo "conexão falhou".mysqli_connect_error();
    }else{
        return $connection;
    }
}