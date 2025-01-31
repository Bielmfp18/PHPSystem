
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

print_r ($array)."<br>";


//Array dentro de uma array

$pessoa=['Nome' => "Gabriel Martins", 'Idade'=> '18', 'documentos'=>['cpf'=>123456, 'rg'=>123456]];
print_r($pessoa['documentos'])."<br>"."<br>";
///print_r($pessoa['documentos'] ['cpf']); -> Mostra um dado especifíco da array.


//Conversão de tipo


//Dados boolean (conversão)

$tipo = "Gabriel"."<br>"; ///Sem um valor na variavel tipo, o bool retornará falso.
$bool = (boolean)$tipo;
var_dump($bool)."<br>"; ///Bool retorna true, pois, este recebe uma valor, após a conversão. 


//Dados string (Conversão)
$tipo=100;
var_dump($tipo);
$str = (string)$tipo;
var_dump($str);
$decimal = (double)$str;
var_dump($decimal);

//Inteiro
$tipo = 100.50;
var_dump($tipo);
$int = (integer)$tipo; /// ou $int = (int)$tipo; -> Os 2 funcionam da mesma maneira
var_dump($int);

//Objeto
$tipo = ["Mariana", 30];
var_dump($tipo);
$pessoa = (object)$tipo;
var_dump($pessoa);


//<pre>

$nomes = array(
    1=> "Wilton",
    2=> "Luciana",
    3=> "Mariana");
    echo'<pre>';
    print_r($nomes);
    echo'</pre>';


    ///Isset.

    $nomes = array(
        1=> "Wilton",
        2=> "LUciana");
        var_dump(isset($nome[1]));
        echo"<br>";
var_dump(isset($nomes[3]));



//Unset-> remover elementos..

$nomes = array(
1=> "Gabriel",
2=> "Cirlene",
3=> "Sergio");

unset($nomes[3]);

echo'<pre>';
print_r($nomes);
echo'</pre>';

//is_array -> Saber se é array

$array = [1,2,3];
$teste = is_array($array);


///Array update
$times = [
    "Time 1" => ["São Paulo", "Santos", "Palmeiras"],
    "Time 2" => ["Barcelona", "Real Madrid", "Atlético de Madrid"]
];

/// EXibindo times brasileiros
echo "Times brasileiros: "."</br>";
print_r($times["Time 1"]);

/// Adicionando novo time

$times["Times 2"][] = "Sevilla";
print_r($times);


//Array de aluno

$aluno = [
    "nome" => "João",
    "idade" => 20,
    "curso" => "Sistemas da informação"
];

// Adiconando novo campo
$aluno["semestre"] = 4;

//Exibindo valores
echo "Nome: " . $aluno[0];
echo "Idade: ". $aluno[1];
echo "Curso: ". $aluno[2]; 

//Array idades

$idades = [18, 22, 35, 42, 15, 60, 25 ];

///verificando se há idade 25
if (in_array(25, $idades)) {
    echo "A idade 25 foi encontrada";
} else {
    echo "A idade 25 não foi encontrada";
}

//Array de numeros

$numeros = [3, 1, 4, 1, 5, 9, 2, 6];

//Ordem crescente
sort($numeros);
echo "Ordem crescente: \n";
print_r($numeros);

// Ordem descrente
rsort($numeros);
echo "Ordem descrente:\n";
print_r($numeros);

//Array de cores
$cores = ["Vermelho", "Azul", "Amarelo", "Verde"];

///Removendo o primeiro elemento
array_shift($cores);
print_r($cores);

///Removendo o último elemento 
array_pop($cores);
print_r($cores);


//FUNÇÃO

function teste($n){
    echo " Teste de função = $n";
}
teste(1);

function soma($num_1, $num_2){
    $total = $num_1 + $num_2;
    return $total;

}

$valor = soma(5,3);
var_dump ($valor);

//Função calcular raiz

function calcularRaiz($numero) {
    /// Verifica se o número é não-negativo
    if ($numero < 0) {
        return "Insira um número não-negativo. ";
    }
    //Calcula a raiz quadrada usando a função sqrt
    $raizQuadrada = sqrt($numero);
    /// Arredonda para duas casas decimais
    $raizArredondada = round($raizQuadrada, 2);
    return $raizArredondada;
}
// Exemplo de uso.
$numero = 3;
$resultadp = calcularRaiz($numero);
echo "A raiz quadrada de $numero é $resultado";
?>


<!-- ------------------------------------------------------------------------------- -->
                            <!-- CONTINUA NO index3.php -->
 <!-- ------------------------------------------------------------------------------ -->