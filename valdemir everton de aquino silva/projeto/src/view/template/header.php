<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
<div class="cabecalho flex">
    <div class="centro">
        <button><a href="/">home</a></button>
        <button><a href="/filepriv">Acervo Principal</a></button>

        <form action="/logout" method="POST" class="inline">
            <button class="float" type="submit"> sair</button>
        </form>

        <div>
            <?php if (isset($_SESSION['message'])){
                echo "<p style='color: green'>".$_SESSION['message']."</p>";
                unset($_SESSION['message']);
            } ?>
        </div>
        <br>
        <br>
    </div>
</div>