<?php

//Parâmetros para a conexão com o Banco de Dados

$bd = 'mysql:host=localhost; bd_ti97';
$usuario = 'roott';
$senha = '';

//Conexão com o Banco de Dados

//$conn = $bd,$usuario,$senha;
try {
    $conn = new PDO($bd, $usuario, $senha);
    echo "BD ok"; //PDO -> É uma classe que está dispnível no PHP para a conexão com o PHP.


} 
// Tratamento de excessão (PDOException) -> Retorna uma ação não desejada (Erro) do Sistema ao Usuário.

catch (PDOException $e) {
echo "Erro DB".$e->getMessage();
}


/// Conteúdo antigo do catch
///Array (print_r...etc) serve apenas para fazer depuração (testes) no código.

// echo '<pre>';
// print_r($e);
// echo '</pre>';
// echo "Erro no BD (Conexão)";