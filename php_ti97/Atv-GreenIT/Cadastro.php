
<?php
 
require 'conexao.php';//Para chamar a página com os dados do login.

$sql = "SELECT * FROM usuarios";
//Utiliza-se a variável $cmd para que na cosulta do foreach o código reconheça que o valor recebido na variável é um objeto do tipo bool (Verdadeiro ou falso).
$cmd = $pdo->prepare($sql);
$cmd->execute();


?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="GreenIT.css">
</head>

<body>
    <header>
        <div class="cabecalho">
            <nav class="nav">
                <img class="img" src="/PHPSystem/php_ti97/IMG/GreenIT.jpg" alt="Logo">
                <div class="logo">Green IT</div>
                <ul>
                    <li><a href="GreenIT.php">Início</a></li>
                    <li><a href="Conceitos.php">Conceitos</a></li>
                    <li><a href="Importância.php">Importância</a></li>
                    <li><a href="Beneficios.php">Benefícios</a></li><br>

                </ul>
            </nav>
        </div>
        <div class="background1">

            <h1>Cadastro</h1>
            <form action="cadastro.php" method="post">
                <div class="cadastro">
                    <label for="nome">Nome</label><br>
                    <input type="text" name="nome" id="nome"><br><br>
                    <label for="senha">Senha</label><br>
                    <input type="text" name="senha" id="senha"><br><br>
                    <label for="telefone">Telefone</label><br>
                    <input type="text" name="telefone" id="telefone"><br><br><br>
                    <label for="data_nascimento">Data de Nascimento</label><br>
                    <input type="date" name="data_nascimento" id="data_nascimento"><br><br><br>
                    <input type="submit" value="Cadastrar">
                 
                    
                </div>
            </form>
            <?php 
            //O fetchALL(PDO::FETCH_DEFAULT) serve para chamar mais de uma linha do Banco de Dados para o registro.
            $usuarios = $cmd->fetchALL(PDO::FETCH_DEFAULT);
            foreach ($usuarios as $usuario){ ?>
            <tr>
            <td><?= $usuario['id'] ?></td>
            <td><?= $usuario['nome'] ?></td>
                <td><?= $usuario['senha'] ?></td>
                <td><?= $usuario['telefone'] ?></td>
                <td><?= $usuario['data_nascimento'] ?></td>
                <td>
                 
                </td>
            </tr>
            <?php } ?>
        
        <br><br><br>
        <div class="texto1">
            <p>© Copyright Green IT - 2025</p>
      
            </div>
        </div>
    </div>
    </header>

</body>

</html>
