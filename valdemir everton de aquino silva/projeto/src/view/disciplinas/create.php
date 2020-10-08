<?php include __DIR__."./../template/header.php";
include __DIR__."./../../model/dao/connect_database.php";

$msg = false;

if (isset($_FILES['file'])){
    $link = getConnection();
    $extensao = strtolower(substr($_FILES['file']['name'], -4));
    $new_name = md5(time()).$extensao;
    $diretorio = __DIR__."./../../../public/files/";
    move_uploaded_file($_FILES['file']['tmp_name'], $diretorio.$new_name);
    $query = "insert into arquivo (codigo, arquivo, data) values (null , '$new_name', NOW())";
    if ($link->query($query)){
        $msg = "arquivo enviado com sucesso";
    }else{
        $msg = "falha ao enviar arquivo";
    }

}
?>
<br>
<?php if ($msg != false) echo "<p> $msg </p>"?>
<form action="/filepriv?create" method="POST" enctype="multipart/form-data">
    <input type="file" name="file" required><br><br>
    <input type="text" name="name" placeholder="name" required>
    <select name="type" required>
        <option value="livro">Livro</option>
        <option value="biologicas">Artigo</option>
    </select>
    <input type="text" name="author" placeholder="author" required>
    <select name="area" required>
        <option value="exatas">Ciências Exatas </option>
        <option value="biologicas">Ciências Biológicas </option>
        <option value="engenharia_tecnologia">Engenharia/Tecnologia </option>
        <option value="saude">Ciências da Saúde</option>
        <option value="agrarias">Ciências Agrárias</option>
        <option value="sociais">Ciências Sociais</option>
        <option value="humanas">Ciências Humanas</option>
        <option value="linguistica">Lingüística</option>
        <option value="letras">Letras</option>
        <option value="artes">Artes</option>
    </select>
    <button type="submit" > Submit </button>

</form>