<?php 

$dados = ['Gabriel', 'Martins'] ;
var_dump($dados[0]);
echo'<br>';

$valor = json_encode($dados);
var_dump($valor);
echo '<br>';
$array = json_decode($valor);
var_dump($array);

?>