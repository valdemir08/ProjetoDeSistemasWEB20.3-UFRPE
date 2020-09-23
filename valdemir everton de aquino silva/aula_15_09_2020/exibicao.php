<?php

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>exibição</title>
    <link href="./css/exibicao.css" rel="stylesheet">
</head>

<body>

<div>
    <label>Nome:</label> <input type="text" disabled value="<?php echo $_POST["nome"];?>">
</div>
<div>
    <label>Sobrenome:</label> <input type="text" disabled value="<?php echo $_POST["sobrenome"];?>">
</div>
<div>
    <label>Sexo:</label> <input type="text" disabled value="<?php echo $_POST["sexo"];?>">
</div>
<div>
    <label>Rua:</label> <input type="text" disabled value="<?php echo $_POST["rua"];?>">
</div>
<div>
    <label>Bairro:</label> <input type="text" disabled value="<?php echo $_POST["bairro"];?>">
</div>
<div>
    <label>Cidade:</label> <input type="text" disabled value="<?php echo $_POST["cidade"];?>">
</div>
<div>
    <label>Estado:</label> <input type="text" disabled value="<?php echo $_POST["estado"];?>">
</div>
<div>
    <label>Email:</label> <input type="text" disabled value="<?php echo $_POST["email"];?>">
</div>
<div>
    <label>Telefone:</label> <input type="text" disabled value="<?php echo $_POST["telefone"];?>">
</div>
<button> <a href="index.php">Voltar</a></button>




</body>

</html>
