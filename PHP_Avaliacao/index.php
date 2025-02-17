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


function teste ($a){
    if(is_int($a))
    {
        $b=10;
        echo $a+$b;
        }
        else{
            echo "Digite um valor inteiro";
        }
    }
teste(10); //Exibe: 20
// teste("10"); //Exibe a mensagem de erro da função.
?>