<?php
$servername = 'localhost'; 
$usuario = 'root';
$senha = '';
$database = 'greenIT';
//Conexão com o Banco de Dados
$conn = new mysqli($servername, $usuario, $senha, $database);
//Aviso de falha na conexão 
if($conn->connect_error){

    die("Falha na conexão".$conn->connect_error);

}

?>