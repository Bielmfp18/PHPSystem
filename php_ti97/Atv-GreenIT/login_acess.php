<?php

include 'conexao.php';


if (isset($_POST['email']) || isset($_POST['senha'])) {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

 //Gera a consulta SQL
 $sql = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
 $stmt = $conn->query($sql);
$result = $stmt->fetchAll(PDO::FETCH_DEFAULT);
 //Verifica se encontrou algum registro no Banco.
 if(count($result) > 0 ){
echo "Login realizado com sucesso! ".'<br><a href="GreenIT.php">Ir à página inicial</a>';


 } else{
    echo "Usuário ou senha incorretos! ".'<br><a href="login.php">Voltar à página de login</a>';;
 }
//Fecha a conexão
$pdo = NULL;

 }

 

?>

