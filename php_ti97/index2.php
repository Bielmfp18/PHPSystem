<!-- ------------------------------------------------------------------------------- -->

                    <!-- 2ª Aula de PHP (Wilton Santos) -->

<!-- ------------------------------------------------------------------------------- -->

<?php
//array 
$dados = array("Nome",1,true);
var_dump($dados);
$dados2 = ["Nome",2,false];
var_dump($dados2);

//var_dump

$dados = array("Nome", 1, true);
var_dump($dados = [0]);
$val = $dados[0]; /// ou echo $dados = [0]; -> para mostrar a variável dados no arquivo.
///print_r() -> MOstra uma array no arquivo.

//Troca valor

$dados = array("Nome",1,true);
$nome = $dados[0];
echo $nome."<br>";
$nome = $dados[0] = "Mariana";
echo $nome."<br>";

$dados = array("Nome", 1, true);
$total = count($dados);
echo($total)."<br>";

$dados = array("Nome", 1, true);
$total = count($dados);
echo $total."<br>";
$dados[] = 4; //Adiciona o elemento 4 ao final da array
$totsl = count($dados);
echo $total."<br>";
echo $dados[3]."<br>";

///print_r($variável aqui) e array_push($variável que recebe o valor da array aqui)

$dados = array("Nome",1,true);

array_push($dados, "Ti_97")."<br>"."<br>"; ///Joga o novo dado no fim da array

/// array_unshift($dados, "Ti_97"); /// array_unshift($dados, "Ti_97");-> Joga o novo dado no início da array

print_r($dados)."<br>"."<br>";


///array chave -> Adiciona um novo elemento a array através de um operador associativo (=>).
///=> = Operador associativo
$array = ["a"=>1, "b"=> 2];
print_r ($array)."<br>"."<br>";
$array["c"] = 3; /// Adiciona um elemento com chave "c" 
print_r($array)."<br>"."<br>";


//Array com "registro"

$array = [
    "nome" => "Mariana",
    "Idade" => 30,
    "Cidade" => "São Paulo"
];

foreach ($array as $chave => $valor) {
    echo "Chave: $chave, Valor: $valor\n"."<br>"."<br>"."<br>"; /// \n -> serve para pular linha. 
}


//mesclar array
$array1 = [1,2,3];
$array2 = [4,5];

$array = array_merge($array1, $array2); ///array_merge -> serve para mesclar os arrays

print_r ($array);



?>