<?php


namespace projetophp\src\controller;


use projetophp\src\model\dao\FilePrivDAO;
use projetophp\src\model\vo\FilePrivVO;

class FilePrivController implements IController
{

    function index()
    {
        $fileprivDAO = new FilePrivDAO();
        $dados = $fileprivDAO->findAll();
        require __DIR__ . "/../view/disciplinas/list.php";
    }

    function view($id)
    {
        $fileprivDAO = new FilePrivDAO();
        $dado = $fileprivDAO->findById($id);
        if ($dado !== null){
            require __DIR__ . "/../view/disciplinas/view.php";
        }else{
            echo "error 404";
        }
    }

    function create()
    {
        require __DIR__ . "/../view/disciplinas/create.php";
    }

    function edit($id)
    {
        $fileprivDAO = new FilePrivDAO();
        $dado = $fileprivDAO->findById($id);
        if ($dado !== null){
            require __DIR__ . "/../view/disciplinas/edit.php";
        }else{
            echo "error 404";
        }
    }

    function store()
    {
        $fileprivDAO = new FilePrivDAO();
        $file = new FilePrivVO(null, $_POST["name"], $_POST["type"], $_POST["author"], $_POST["area"]);
        $fileprivDAO->create($file);
        $_SESSION["message"] = "Upload completo";
        header("Location: /filepriv");
    }

    function update($id)
    {
        $disciplineDAO = new DisciplinaDAO();
        $discipline = new DisciplinaVO(null, $_POST["name"], $_POST["teacher"], $_POST["ch"], 1);
        $disciplineDAO->update($id, $discipline);
        $_SESSION["message"] = "atualizado com sucesso";
        header("Location: /discipline");
    }

    function delete($id)
    {
        $fileprivDAO = new FilePrivDAO();
        $fileprivDAO->delete($id);
        $_SESSION["message"] = "excluido com sucesso";
        header("Location: /filepriv");
    }

    function download($id){
        $fileprivDAO = new FilePrivDAO();
        $nomec = $fileprivDAO->download($id);
        require __DIR__ . "/../view/disciplinas/list.php";

    }
}