<?php


namespace projetophp\src\model\dao\interface_dao;


use projetophp\src\model\vo\FilePrivVO;

interface IFilePrivDAO
{
    function findAll();
    function findById($id);
    function create(FilePrivVO $filePrivVO);
    function update($id, FilePrivVO $filePrivVO);
    function delete($id);
    function download($id);
}