<?php
require 'conecta.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    


    //Try

    try {
        $sql = "UPDATE usuarios SET nome = :nome, telefone = :telefone, email = :email WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':telefone', $telefone);
        $stmt->bindParam(':email', $email);


        if ($stmt->execute()) {
            echo "Usuário atualizado com sucesso!";
        } else {
            echo "Erro ao atualizar usuário.";
        }
    } catch (PDOException $e) {
        echo "Erro: " . $e->getMessage();
    }
} else {
    echo "Método de requisição inválido.";
}


?>
<br><a href="index.php">Voltar à Lista de usuários</a>