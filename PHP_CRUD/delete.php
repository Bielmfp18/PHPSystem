<?php   
require 'config.php';

if(isset($_GET['id'])){
$id = $_GET['id'];

try {
$sql = "DELETE FROM usuarios WHERE id = :id";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':id', $id);

if($stmt->execute()){
echo "Usuário deletado com sucesso!";
} else{
echo "Erros ao deletar ";
}
} catch (PDOException $e){
echo "Erro ao deletar ".$e->getMessage();
}
}else {
    echo "ID não fornecido.";
}
?>
<br><a href="list.php">Voltar à lista de usuários</a>