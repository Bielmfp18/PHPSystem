<?php
//GLOBALS
//Procedimentos e funções.
// function soma()
// {
//     $a = 10;
//     $b = 20;

//     $c = $a + $b;
//     echo "O valor será: " . $c;
// }
// echo "Função soma";
// echo '<br>', '<br>';
// soma();


// //--------------------------------//

// echo '<br>', '<br>';


// $a = 10;
// $b = 20;


// function somas()
// {


// $GLOBAL['c']=$GLOBALS['a']+$GLOBALS['b'];
// echo "O valor será: " .$GLOBAL['c'];   
// }
// echo "Função somas";
// echo '<br>', '<br>';
// somas();

// function soma()
// {
//     global $a, $b, $c;

//     $c = $a + $b;
//     echo "O valor será: " . $c;
// }
// echo "Função soma";
// echo '<br>', '<br>';
// soma();
// echo $c;

//SUPER GLOBAIS

echo $_SERVER['PHP_SELF'];///PHPSystem/php_ti97/Projeto_GLOBALS/global.php
echo '<br>', '<br>';
echo $_SERVER['SCRIPT_NAME']; //PHPSystem/php_ti97/Projeto_GLOBALS/global.php
echo '<br>', '<br>';
echo $_SERVER['SERVER_NAME'];// localhost
echo '<br>', '<br>';
echo $_SERVER['HTTP_HOST'];// localhost
echo '<br>', '<br>';
echo $_SERVER['REMOTE_ADDR'];//::1 -> 127.0.0.1 (localhost/looback) em hexadecimal.
echo '<br>', '<br>';
echo $_SERVER['HTTP_USER_AGENT']; //Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/132.0.0.0 Safari/537.36
