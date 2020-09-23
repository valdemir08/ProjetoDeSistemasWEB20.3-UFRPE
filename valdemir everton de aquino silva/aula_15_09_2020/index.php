<?php
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Form</title>
    <link href="./css/style.css" rel="stylesheet">
</head>
<body>
<div class="cadastro">CADASTRO DE CLIENTES</div><br>
<form action="exibicao.php" method="post" enctype="multipart/form-data" name="formulario">


    <div class="left">
        <fieldset> <legend>Informações Básicas</legend>
            <div>
                <label for="nome">Nome: </label>
                <input type="text" name="nome" id="nome" required>
            </div>

            <div>
                <label for="sobrenome">Sobrenome: </label>
                <input type="text" name="sobrenome" id="sobrenome" required>
            </div>

            <span>
                <label>Sexo:</label><br>


                <input type="radio" id="masculino" value="masculino" name="sexo" required>

                <label for="masculino">Masculino</label>


                <input type="radio" id="feminino" value="feminino" name="sexo">
                <label for="feminino">Feminino</label>


                <input type="radio" id="outro" value="outro" name="sexo">
                <label for="outro">Outro</label>
                <br>
            </span>
        </fieldset>



        <fieldset> <legend>Endereço</legend>
            <div>
                <label for="rua">Rua: </label>
                <input type="text" name="rua" id="rua" required>
            </div>

            <div>
                <label for="bairro">Bairro: </label>
                <input type="text" name="bairro" id="bairro" required>
            </div>

            <div>
                <label for="cidade">Cidade: </label>
                <input type="text" name="cidade" id="cidade" required>
            </div>

            <div>
                <label for="estado">Estado: </label>
                <select name="estado" id="estado" required>
                    <option value="Acre">AC</option>
                    <option value="Alagoas">AL</option>
                    <option value="Amapá">AP</option>
                    <option value="Amazonas">AM</option>
                    <option value="Bahia">BA</option>
                    <option value="Ceará">CE</option>
                    <option value="Distrito Federal">DF</option>
                    <option value="Goiás">GO</option>
                    <option value="Maranhão">MA</option>
                    <option value="Mato Grosso">MT</option>
                    <option value="Mato Grosso do Sul">MS</option>
                    <option value="Minas Gerais">MG</option>
                    <option value="Pará">PA</option>
                    <option value="Paraíba">PB</option>
                    <option value="Paraná">PR</option>
                    <option value="Pernambuco">PE</option>
                    <option value="Rio de Janeiro">RJ</option>
                    <option value="Rio Grande do Norte">RN</option>
                    <option value="Rio Grande do Sul">RS</option>
                    <option value="Rondônia">RO</option>
                    <option value="Roraima">RR</option>
                    <option value="Santa Catarina">SC</option>
                    <option value="São Paulo">SP</option>
                    <option value="Sergipe">SE</option>
                    <option value="Tocantins">TO</option>
                </select>
            </div>
        </fieldset>
    </div>
    <div class="right">
        <fieldset> <legend>Contato</legend>
            <div>
                <label for="email">E-mail: </label>
                <input type="email" name="email" id="email" required>
            </div>

            <div>
                <label for="telefone">Telefone: </label>
                <input type="number" id="telefone" name="telefone" required>
            </div>


        </fieldset>
        <input type="submit" value="Cadastrar">
</div>
</form>
</body>
</html>