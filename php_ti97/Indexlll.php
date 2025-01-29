<?php 
// Manipulação de string

$str = "    exemplo     ";
echo trim($str)."<br>"; // Saída: exemplo

$nome = "Gabriel";
//aspas duplas
echo "Meu nome é: $nome"."<br>";

echo 'Meu nome é: '.$nome."<br>"; //Ponto final serve para concatenar as variáveis as frases.

$nome = "Gabriel";
echo strlen($nome)."<br>";
$numcaractere = strlen($nome);
echo $numcaractere."<br>";

$texto = "Ti97 trabalhando com php";
echo strpos($texto, "php"); // Verfica a posição da palavra "php" a partir do número de caracteres.
//se não encontra = 0


$str = "Maurício Jr"."<br>";
echo str_repeat($str, 3); //Saída: Olá Olá Olá

$texto = "Eu gosto de PHP.";
$resultado = str_replace("PHP", "JavaScript", $texto);
echo $resultado."<br>";

$str = "Maçã, Banana, Laranja";
$array = explode(",", $str);
print_r($array);//Retira a vírgula

$array = ["Maçã, Banana, Laranja"];
$str = implode(",", $array);
print_r($array); // Mantém a vírgula

$str = "Teste de String";
echo strtolower($str)."<br>"; //Saída: Teste de string
echo strtolower($str)."<br>"; //Saída: Teste de string

?>