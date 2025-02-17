<?php

// $c;

// function teste(){
//     $a=10;
//     $b=12;
//     $c = $a + $b;
//     echo $c;
// }

// teste().'<br>'.'<br>'.'<br>';

//=================================//

// function teste ($a){
// $b=10;
// echo $a+$b;
// }
// teste("10"); //Caso adicione um número em formato de string dentro do parênteses, a tipagem do PHP continuará a considerar este número como int.

//=================================//

// function teste ($a){
//     if(is_int($a))
//     {
//         $b=10;
//         echo $a+$b;
//         }
//         else{
//             echo "Digite um valor inteiro";
//         }
//     }
// teste(10); //Exibe: 20 ||| Está linha coloca um valor na variável $a.
// teste("10"); //Exibe a mensagem de erro da função.

//=================================//

// function teste($a, $b)
// {
//     if (is_int($a) and is_int($b)) // Se $a for inteiro e $b for inteiro.
//     {
//         echo $a + $b;
//     } else {
//         echo "Digite valores inteiros";
//     }
// }
// teste(10, 10);


//=================================//

// function teste($a, $b)
// {
//     if (is_int($a) and is_int($b)) // Se $a for inteiro e $b for inteiro.
//     {
//         $c = $a + $b;
//         return $c;
//     } else {
//         echo "Digite valores inteiros";
//     }
// }
// $valor = teste(10, 10);
// echo $valor;

//===================================//

// function teste($a=10){
// echo $a.'<br>';
// }
// echo teste(20);

//=================================//


// function teste( $b, $a=10){
//     echo $a + $b.'<br>';
//     }
//     echo teste(20);

//==============================//

// function teste($a, $b){
// return $a+$b.'<br>';
// }
// teste(10, 30);

//=============================//

// function teste($num){
// return ($num % 2 === 0) ? "Par" : "Ímpar";
// }
// echo teste(3);

//===========================//

// function InverteString($str){    
// return strrev($str);
// }
// echo InverteString ("Ola");

//=========================//

// function Quantidade($str){
//     return str_word_count($str);
// }
// echo Quantidade("Eae td bem?");

// //=========================//

// function ArrayNum($array){
// return max($array); //Mostra o maior valor da array
// }
// $numeros = [1,2,3];

//===========================//
//Traz a potência.
function Potencia ($base, $exp){
return pow($base, $exp);
}

echo Potencia(3, 2);
?>
