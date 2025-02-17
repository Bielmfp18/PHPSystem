<?php 

require 'conecta.php';

if(isset($_GET['id'])){
$id = $_GET['id'];

try{
    $sql = "SELECT * FROM usuarios WHERE id = :id";

    $stmt = $pdo->prepare($sql);

    $stmt->bindParam(':id', $id);

    $stmt->execute();

    $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

    if(!$usuario){
die ("Usuário não encontrado.");
    }
}catch(PDOException $e){
die("Erro: ".$e->getMessage());
}
}else{
    die("ID não fornecido.");
}
?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar Usuário</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Atualizar Usuário</h1>
    <form action="update.php" method="post">
        <input type="hidden" name="id" value="<?= $usuario['id'] ?>">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" value="<?= $usuario['nome'] ?>" required><br><br>
        <label for="telefone">Telefone:</label>
        <input type="text" id="telefone" name="telefone" value="<?= $usuario['telefone'] ?>" required><br><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?= $usuario['email'] ?>" required><br><br>

 
           <input type="submit" value="Atualizar">
</body>
</html>
