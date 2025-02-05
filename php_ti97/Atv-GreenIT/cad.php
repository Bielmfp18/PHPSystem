<?php

//Criar sessão
session_start();
//Incluir o arquivo de conexão
include 'conexao.php';
//verificar se os dados foram enviados via POST
if(isset ($_POST['usuario'])&& isset($_POST['senha'])&&isset($_POST['telefone'])&&isset($_POST['data_nascimento'])){
    //Recebe dados do form
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];
    $telefone = $_POST['telefone'];
    $data_nascimento = $_POST['data_nascimento'];

    //Adiciona o cadastro ao Banco de dados
    $sql = "INSERT INTO usuarios (usuario, senha, telefone, data_nascimento) VALUES ('usuario', 'senha', 'telefone', 'data_nascimento')";
$result = $conn->query($sql);

if(mysqli_query($conn, $sql)){

    echo"Cadastro realizado com sucesso Bem-Vindo, ".$usuario."!";
}
else{
    //Falha no logon
echo"Falha ao cadastrar!";

}
    //Fecha conexão
    $conn->close();

}

?>
