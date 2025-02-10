
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <form action="login.php" method="post">
        <label>Email</label>
        <input type="text" name="nome">


        <label>Senha</label>
        <input type="password" name="senha">

        <button type="submit"> Fazer login</button>
    </form>
</body>

</html>

<?php
require('conexao.php');


if (isset($_POST['nome']) || isset($_POST['senha'])) {
    if (strlen($_POST['nome']) == 0) {
        echo "Preencha o campo de email!";
    } else if (strlen($_POST['senha']) == 0) {
        echo "Preencha o campo senha!";
    } else {
        $email = $mysqli->real_escape_string($_POST['nome']);
        $senha = $mysqli->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM usuario WHERE nome = '$nome' AND senha = '$senha'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $myssqli->error);

    
        $quantidade = $sql_query->num_rows;
    }
    if ($quantidade == 1) {

        $usuario = $sql_query->fetch_assoc();

        if (!isset($_SESSION)) {
            session_start();

            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nome'] = $usuario['nome'];

            header("location: painel.php");
        } else {
            echo "Falha no login! E-mail ou senha incorretos";
        }
    }
}
?>
