<?php

//Include inclui os dados de um arquivo em outro.
//Require requere os dados de um outro arquivo para "rodar".

//O try é utilizado para previnir todo tipo de erro. 
try{
//O PDO pode ser usado para se conectar a qualquer tipo de Banco de Dados.
//A variável $pdo é uma nova instância de PDO.    
$pdo = new PDO("mysql:dbname=cadastro;host=localhost:3306", "root", "");

echo "Banco de Dados ok";

}

//PDOException para erros no PDO
catch(PDOException $e){
echo "Erro no PDO ".$e->getMessage();
}

//Exception para erros comuns/genéricos.
catch(Exception $e){
    echo "Erro no Banco de Dados ".$e->getMessage();
}


//Insert
//bind + vincular
$cmd = $pdo->prepare("INSERT INTO usuario(nome, email, telefone)values(:n, :e, :t)");
//Vincula o nome Gabriel ao valor "n:"
//Vincula os valores aos parâmetros.
$cmd->bindValue(":n","Cirlene");
$cmd->bindValue(":e","cirlenem@gmaill.com");
$cmd->bindValue(":t","11984567392");
$cmd->execute();
?>