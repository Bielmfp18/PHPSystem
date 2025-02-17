<?php
require 'conecta.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    

    //Try

    try {
        $sql = "INSERT INTO usuarios ( nome, telefone, email) VALUES (:nome, :telefone, :email )";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':telefone', $telefone);
        $stmt->bindParam(':email', $email);

        if ($stmt->execute()) {
            echo "Usuário cadastro com sucesso";
        } else {
            echo "Erro ao cadastrar usuário";
        }
    } catch (PDOException $e) {
        echo "Erro ao inserir o usuário " . $e->getMessage();
    }
} else {
    echo "Método de requisição inválido. ";
}


?>
<br><a href="index.php">Voltar à Lista de usuários</a>
