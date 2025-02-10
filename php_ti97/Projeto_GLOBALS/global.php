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

function soma()
{
    global $a, $b, $c;

    $c = $a + $b;
    echo "O valor será: " . $c;
}
echo "Função soma";
echo '<br>', '<br>';
soma();
echo $c;

//SUPER GLOBAIS

echo '<br>', '<br>';
echo$_SERVER['PHP_SELF'];
echo '<br>', '<br>';
echo$_SERVER['SCRIPT_NAME'];
echo '<br>', '<br>';
echo$_SERVER['SERVER_NAME'];
echo '<br>', '<br>';
echo$_SERVER['HTTP_HOST'];
echo '<br>', '<br>';
echo$_SERVER['REMOTE_ADDR'];
echo '<br>', '<br>';
echo$_SERVER['HTTP_USER_AGENT'];
?>