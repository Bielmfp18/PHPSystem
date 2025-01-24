<? 
$inteiro = 100;
$decimal = (double) $inteiro;
var_dump($inteiro);
var_dump($decimal);
?>

<?php 
$num1 = 10;
$num2 = 5;

$adição = $num1 + $num2;
$subtração = $num1 - $num2;
$multiplicação = $num1 * $num2;
$divisão = $num1 / $num2;

echo "adição: $adição<br>";
echo "subtração: $subtração<br>";
echo "Multiplicação: $multiplicação<br>";
echo "Divisão: $divisão<br>";

// Operadores

$resultado = $num1 + $num2; //adição
$resultado = $num1 - $num2; //subtração
$resultado = $num1 * $num2; //multiplicação
$resultado = $num1 / $num2; //divisão
$resultado = $num1 % $num2; //resto
$resultado = $num1 ** $num2; //potenciação

echo 1+1.5, '<br>';
var_dump(1+1.5); //float
echo '<br>';
echo 5/2, '<br>';
echo intdiv(5,2), '<br>'; //parte inteiro
echo round(5/2), '<br>'; //arredondar
echo 5%2, '<br>'; //mod
echo 5**2, '<br>'; //exp
 
//Precedência = () > ** > / % * > + -

echo 2+2*3, '<br>'; //8
echo (2+2)*3, '<br>';//12
echo 2+2*3**2,'<br>'; //20
echo ((2+2)*3)**2, '<br>','<br>'; 

?>

<?php

// Constantes
//Constantes não alteram valores

const nome = "Mariana";
 echo nome."<br>";
 define('valor', 10.00);
 echo valor."<br>";

//Array
$frutas = ["Maçã", "Banana", "Laranja"];
$cores = ["Vermelho", "Azul", "Amarelo"];

echo $frutas [1]."<br>";

echo $cores [1]."<br>"."<br>";
?>

<?php 

//Formatar

$valor = 200.50;
//O Nº 2 dentro do number_format serve para indicar o número de casas decimais que aprecerão na tela do usuário e o ponto (.) serve para adiconar o ponto de milhar ao número, exemplo: "1.000".
echo("O preço é = ". number_format($valor,2,",","."))."<br>";

echo "<br>";
$valor = 1200.50;

echo("O preço é = R$ ". number_format($valor, 2,",","."))."<br>"."<br>";

?>

<?php
//Atribuição

$valor = 10;
echo("Valor = ".$valor."<br>");
$valor += 1;
echo("Valor = ".$valor."<br>");
$valor -= 2;
echo("valor = ".$valor."<br>");
$valor *= 2;
echo("Valor = ".$valor."<br>");
$valor /= 2;
echo("Valor = ".$valor."<br>");
$valor %= 2;
echo("Valor =".$valor."<br>");

//If 
$a=10;
$b=9;
if($a > $b){
echo "A é maior que B"."<br>";
} 

//If-Else
$c=10;
$d=11;
if($c > $d){
echo "C é maior que D";
} else {
    echo "C não é maior que D "."<br>";
}

//Else-If
if ($a > $b) {
    echo "a é maior que b";
} elseif ($a == $b){
echo "A é igual a B";
}

//And

$a=1;
$b=1;
if(($a==1) && ($b==1))
{
    echo("Ambos igual a 1");
}
else
{
    echo("A ou B diferente de 1");
}
?>


