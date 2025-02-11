<?php
include("conexao.php");


if (isset($_POST['email']) || isset($_POST['senha'])) {

    if (strlen($_POST['email']) == 0) {
        echo "<script> alert('Preencha o campo de email!') </script>";
    } else if (strlen($_POST['senha']) == 0) {
        echo "<script> alert('Preencha o campo senha!') </script>";
    } else {
        $email = $conn->real_escape_string($_POST['email']);
        $senha = $conn->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
        $sql_query = $conn->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);


        $quantidade = $sql_query->num_rows;

        if ($quantidade == 1) {

            $usuario = $sql_query->fetch_assoc();

            if (!isset($_SESSION)) {
                session_start();

                $_SESSION['id'] = $usuario['id'];
                $_SESSION['email'] = $usuario['email'];

                header("Location: Painel.php");
            }
            exit();
        } else {
            echo "<script> alert('E-mail ou senha incorretos!') </script>";
        }
    }
}
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="GreenIT.css">
</head>

<body>
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
    <h1>Login</h1>
        <form action="" method="post">
            <div class="cadastro">
                <p>
                <label for="email">Email</label><br>
                <input type="text" name="email" id="email"><br>
                </p>

                <p>
                <label for="senha">Senha</label><br>
                <input type="text" name="senha" id="senha"><br><br>
                </p>

                <button type="submit"> Fazer login </button>
    </div>
    </form>
    <br><br><br>
    <br><br><br>
    
    <div class="texto1">
            <p>© Copyright Green IT - 2025</p>
            </div>
</div>
</body>

</html>