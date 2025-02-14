<?php
require 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $cpf = $_POST['cpf'];
    $data_nascimento = $_POST['data_nascimento'];

    //Try

    try {
        $sql = "INSERT INTO usuarios ( nome, email, cpf, data_nascimento) VALUES (:nome, :email, :cpf, :data_nascimento )";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':cpf', $cpf);
        $stmt->bindParam(':data_nascimento', $data_nascimento);
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
