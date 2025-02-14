<?php 

$nome = isset($_GET['nome']) ? $_GET['nome'] : "";

if($nome == "Wilton" || $nome == "Ronaldo" || $nome == "Juliana"){
echo "Olá ".$nome;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get</title>
</head>
<body>
    <a href="html.php?nome=Wilton">Ir para Wilton</a><br>
    <a href="html.php?nome=Ronaldo">Ir para Ronaldo</a><br>
    <a href="html.php?nome=Juliana">Ir para Juliana</a><br>
</body>
</html>