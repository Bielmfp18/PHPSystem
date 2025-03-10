<?php
require_once 'teste.php';

//Definir (Set)
$caminho = 'arquivo';

$meuTeste = new Escritor($caminho);

//Executar (Execute)
$meuTeste->escreve(conteudo: "Olá Ti97!!!");

//Verificar (Check)
$conteudoEsperar = "Olá Ti97!!!";
if ($conteudoEsperar === file_get_contents($caminho)) 
{
    echo "Teste passou!";

} else {

    echo "Teste falhou!";

}
?>
