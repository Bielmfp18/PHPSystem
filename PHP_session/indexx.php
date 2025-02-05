<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>Formulário de Login</h2>
    <form action="login.php" method = "post">
<label for="usuario" >Usuário:</label>
    <input type="text" name="usuario" id="usuario" required>
    <br><br>
    <label for="senha">Senha:</label>
    <input type="password" name="senha" id="senha" required>
    <br><br>
    <input type="submit" value="Entrar">
    </form>
</body>
</html>