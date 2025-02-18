<?php

require 'conexao.php';

?>




<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="GreenIT.css">
    <link rel="stylesheet" href="styles.css">
   
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
            <form action="insert.php" method="post">
                <div class="cadastro">
                    <label for="nome">Nome</label><br>
                    <input type="text" name="nome" id="nome" required><br><br>
                    <label for="email">Email</label><br>
                    <input type="text" name = "email" id="email" required><br><br>
                    <label for="senha">Senha</label><br>
                    <input type="text" name="senha" id="senha" required><br><br>
                    <label for="telefone">Telefone</label><br>
                    <input type="text" name="telefone" id="telefone" required><br><br><br>
                    <label for="data_nascimento">Data de Nascimento</label><br>
                    <input type="date" name="data_nascimento" id="data_nascimento" required><br><br><br>
                    <input type="submit" value="Cadastrar">


                </div>
            </form>
      
            <br><br><br>
            <div class="texto1">
                <p>© Copyright Green IT - 2025</p>

            </div>
        </div>
        </div>
    </header>

</body>

</html>