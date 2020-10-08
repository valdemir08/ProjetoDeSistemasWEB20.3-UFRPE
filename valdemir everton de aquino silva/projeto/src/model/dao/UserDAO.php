<?php


namespace projetophp\src\model\dao;


use projetophp\src\model\dao\interface_dao\IUserDAO;
use projetophp\src\model\vo\UserVO;

require "connect_database.php";

class UserDAO implements IUserDAO
{
    public $table = "user";
    function findAll()
    {
        // TODO: Implement findAll() method.
    }

    function findById($id)
    {
        // TODO: Implement findById() method.
    }


    function delete($id)
    {
        // TODO: Implement delete() method.
    }

    function verifyUserAndPassword($email, $password)
    {
        $password = md5($password);
        $link = getConnection();
        $query = "select id, name, email from {$this->table} where email = '{$email}' and password = '{$password}'";
        if ($result = $link->query($query)){
            while ($row = $result->fetch_row()){
                $link->close();
                return new UserVO($row[0],$row[1],$row[2], null);
            }
        }

        $link->close();
        return null;
    }

    function create($userVO)
    {
        // TODO: Implement create() method.
    }

    function update($id, $userVO)
    {
        // TODO: Implement update() method.
    }
}