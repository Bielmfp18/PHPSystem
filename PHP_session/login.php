<?php 

//Criar sessão
session_start();
//Incluir o arquivo de conexão
include 'conexao.php';
//verificar se os dados foram enviados via POST
if(isset ($_POST['usuario'])&& isset($_POST['senha'])){
    //Recebe dados do form
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    //Monta a consulta SQL
    $sql = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND senha = '$senha' ";
$result = $conn->query($sql);
//Verifica se encontrou algum registro
if($result && $result->num_rows>0){
    $_SESSION['usuario']=$usuario;
    echo"Loginrealizado com sucesso Bem-Vindo, ".$usuario."!";
}
else{
    //Falha no logon
echo"Usuário ou senha incorretos!";

}
    //Fecha conexão
    $conn->close();

}

?>