<?php 

//Parâmetros para a conexão com o Banco de Dados

$conn = 'mysql:host=localhost; bd_ti97';
$usuario = 'root';
$senha = '';

//Conexão com o Banco de Dados

//$conn = $bd.$usuario.$senha;

$conn = new PDO($bd.$usuario.$senha) //PDO -> É uma classe que está dispnível no PHP para a conexão com o PHP.
?>