<?php


namespace projetophp\src\model\dao;


use projetophp\src\model\dao\interface_dao\IFilePrivDAO;
use projetophp\src\model\vo\FilePrivVO;

require "connect_database.php";

class FilePrivDAO implements IFilePrivDAO
{
    public $table = "filepriv";
    function findAll()
    {
        $link = getConnection();
        $lista = [];
        $query = "select * from {$this->table}";
        if ($result = $link->query($query)){
            while ($row = $result->fetch_row()){//pega uma linha e joga em $row
                $objeto = new FilePrivVO($row[0],$row[1],$row[2],$row[3],$row[4]);

                array_push($lista, $objeto);
            }
        }
        $link->close();
        return $lista;
    }

    function findById($id)
    {
        $link = getConnection();
        $query = "select * from {$this->table} where id = {$id}";
        if ($result = $link->query($query)){
            while ($row = $result->fetch_row()){//pega uma linha e joga em $row
                return new DisciplinaVO($row[0],$row[1],$row[2],$row[3],$row[4]);
            }
        }
        $link->close();
        return null;
    }

    function create(FilePrivVO $filePrivVO)
    {
        $link = getConnection();
        if (isset($_FILES['file'])) {
            $extensao = strtolower(substr($_FILES['file']['name'], -4));
            $new_name = md5(time()) . $extensao;
            $diretorio = __DIR__ . "./../../../public/files/";
            move_uploaded_file($_FILES['file']['tmp_name'], $diretorio . $new_name);
            $query_arq = "insert into arquivo (codigo, arquivo, data) values (null , '$new_name', NOW())";
            if ($link->query($query_arq)) {
                $msg = "arquivo enviado com sucesso";
            } else {
                $msg = "falha ao enviar arquivo";
            }

        }
        $query = "insert into {$this->table} (name, type , author, area) values ('{$filePrivVO->getName()}','{$filePrivVO->getType()}','{$filePrivVO->getAuthor()}','{$filePrivVO->getArea()}')";//usar aspas simples para strings
        echo $query;
        $result = $link->query($query);
        $link->close();
        if (!$result) {
            echo mysqli_error();
            exit(0);
        }


    }
    function update($id, FilePrivVO $filePrivVO)
    {
        $link = getConnection();
        $query = "update {$this->table} set name='{$filePrivVO->getName()}', type ='{$filePrivVO->getTeacher()}', author ={$filePrivVO->getCh()} where id ={$id}";
        $result = $link->query($query);
        $link->close();
        if (!$result) {
            echo mysqli_error();
            exit(0);
        }
    }

    function delete($id)
    {
        $link = getConnection();
        $query = "delete from {$this->table} where id={$id}";
        echo $query;
        $result = $link->query($query);
        $link->close();
        if (!$result) {
            echo mysqli_error();
            exit(0);
        }
    }

    function download($id)
    {
        $link = getConnection();
        $query = "select * from arquivo where codigo = {$id}";
        if ($result = $link->query($query)){
            while ($row = $result->fetch_row()){//pega uma linha e joga em $row
                $nome = $row[1];
                return $nome;
            }
        }
        $link->close();

    }
}