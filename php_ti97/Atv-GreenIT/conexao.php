<?php 
// Define o endereço do servidor de banco de dados (neste caso, o servidor local)

$host= "localhost";

// Define o nome do banco de dados que será utilizado

$dbname = "greenit";

// Define o nome de usuário para conexão com o banco de dados

$username = "root";

// Define a senha para conexão com o banco de dados (vazia neste exemplo)

$password = "";

// Inicia um bloco try-catch para tentar estabelecer a conexão e tratar possíveis erros

try {
    // Cria uma nova instância do PDO para conectar ao banco de dados MySQL

    $pdo = new PDO("mysql:host=$host;dbname=$dbname",$username ,$password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Pega os erros do PDO.
}catch(PDOException $e){

    // Interrompe a execução do script e exibe uma mensagem de erro com detalhes
 
die("Erro no Banco de Dados ".$e->getMessage());
}

?>