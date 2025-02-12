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


// //Insert
// //bind + vincular
// $cmd = $pdo->prepare("INSERT INTO usuario(nome, email, telefone)values(:n, :e, :t)");
// //Vincula o nome Gabriel ao valor "n:"
// //Vincula os valores aos parâmetros.
// $cmd->bindValue(":n","Cirlene");
// $cmd->bindValue(":e","cirlenem@gmaill.com");
// $cmd->bindValue(":t","11984567392");
// $cmd->execute();


// pdo->query ("INSERT INTO usuario(nome, email, telefone)values('Gabriel', 'gabriel@gmail.com', '1198763245')");

// $pdo->query ("INSERT INTO cliente(nome, email, telefone)VALUES('Gabriel', 'gabriel@gmail.com', '1198763645')");



// //Delete
// $cmd = $pdo->query("DELETE FROM usuario where id = '14' ");

// $cmd->execute();

// $cmd = $pdo->query("DELETE FROM usuario where id = :cod ");
// $cod = 1;

// //Substitue cod pela var $cod
// $cmd->bindValue(":cod", $cod);
// $cmd->execute();

// //Desafio
// $cod = 1;
// $cmd = $pdo->query("DELETE FROM usuario where id = '$cod' ");
// $cmd->execute();


//Update

//update com query

$cmd = $pdo->query("UPDATE usuario SET nome = 'Sergio Ricardo ' WHERE id = '13'");

//Select 
//select * from tabela where id = 1;
//Pdo é como se fosse um driver para o php se conectar ao banco e receber seus comandos e valores.
$cmd = $pdo->prepare("SELECT * FROM usuario WHERE id = :id ");
$cmd->bindValue(":id", 13);
$cmd->execute();

//fetch = uma única linha, ALL = mais de um registro
//fetch = buscar
//Traz os valores do Banco de Dados.
$valores = $cmd->fetch(PDO::FETCH_ASSOC);
foreach($valores as $val=> $value){;
//Formata os valores fornecidos na página.

echo'<pre>';
echo $val.":".$value."<br>";
// var_dump($valores);
echo'</pre>';

}



?>


