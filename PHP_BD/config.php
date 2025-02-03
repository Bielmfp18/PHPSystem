<?php

//Parâmetros para a conexão com o Banco de Dados

$bd = 'mysql:host=localhost; atividade';
$usuario = 'root';
$senha = '';

//Conexão com o Banco de Dados

//$conn = $bd,$usuario,$senha;
try {
    $conn = new PDO($bd, $usuario, $senha); //PDO -> É uma classe que está dispnível no PHP para a conexão com o PHP.
   
// echo "BD ok";
// $retorno = $conn->exec($query); //exec -> Executar o que estiver dentro dos parênteses;
echo 'Cadastrado no Banco';
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