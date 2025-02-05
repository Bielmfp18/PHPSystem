<?php 
$servername = "localhost";
$username = "root";
$password = "";
$database = "session";


//Criando conexão

$conn = new mysqli($servername, $username, $password, $database);
// Verificando a conexão
if($conn->connect_error){
    die("Falha na conexão:" .$conn->connect_error);
}
?>
