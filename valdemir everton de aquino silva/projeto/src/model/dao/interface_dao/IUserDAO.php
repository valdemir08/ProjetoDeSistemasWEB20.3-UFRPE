<?php


namespace projetophp\src\model\dao\interface_dao;
use projetophp\src\model\vo\AlunoVO;

interface IUserDAO
{
    function findAll();
    function findById($id);
    function create($userVO);
    function update($id, $userVO);
    function delete($id);
    function verifyUserAndPassword($email, $password);
}