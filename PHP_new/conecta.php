<?php
//O try é utilizado para previnir todo tipo de erro. 
try{
//O PDO pode ser usado para se conectar a qualquer tipo de Banco de Dados.
//A variável $pdo é uma nova instância de PDO.    
$pdo = new PDO("mysql:dbname=cadastro;host=localhost:3306", "root", "");

echo "Banco de Dados ok";

}

//PDOException para erros no PDO
// catch(PDOException){

// }

//Exception para erros comuns/genéricos.
catch(Exception $e){
    echo "Erro no Banco de Dados ".$e->getMessage();
}
?>