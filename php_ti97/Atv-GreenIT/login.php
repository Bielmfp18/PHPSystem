<?php
require("conexao.php");


if (isset($_POST['nome']) || isset($_POST['senha'])) {
    if (strlen($_POST['nome']) == 0) {
        echo "Preencha o campo de email!";
    } else if (strlen($_POST['senha']) == 0) {
        echo "Preencha o campo senha!";
    } else {
        $nome = $conn->real_escape_string($_POST['nome']);
        $senha = $conn->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM usuario WHERE nome = '$nome' AND senha = '$senha'";
        $sql_query = $conn->query($sql_code) or die("Falha na execução do código SQL: " . $myssqli->error);

    
        $quantidade = $sql_query->num_rows;
    }
    if ($quantidade == 1) {

        $usuario = $sql_query->fetch_assoc();

        if (!isset($_SESSION)) {
            session_start();

            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nome'] = $usuario['nome'];

            header("Location: painel.php");
        } else {
            echo "Falha no login! E-mail ou senha incorretos";
        }
        exit();
    }
}
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
<form action="Painel.php" method="post">
        <p>
        <label>Email</label>
        <input type="text" name="nome">
        </p>

        <p>
        <label>Senha</label>
        <input type="password" name="senha">
        </p>
        
        <button type="submit"> Fazer login</button>
</form>
</body>

</html>

