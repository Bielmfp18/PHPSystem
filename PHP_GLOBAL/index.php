<?php   
//$_SESSION:
/*Utilizada para gerenciar sessões. Permite armazenar dados que persistem durante a navegação do usuário no site.
para usa-lá, é necessário iniciar a sessão com session_start():*/

session_start();
$_SESSION['usuario'] = 'Gabriel';
$_SESSION['logado'] = true;

echo "<pre>";
print_r($_SESSION).'<br>'; 

//---------------------------------------------------------------//

//pequenos arquivos incorporados pelo servidor na máquina cliente
 
 //trocar dados entre servisor e cliente
 
//explosite guardou informações mesmo após sair ou fechar navegador
 
 //criar setcookie(nome, valor, validade)
 
//pegar cookie super global cookie
 
 //é publico, não deve guardar dados sensíveis
 
 //Nome do cookie é "nome" com o valor "ti97"
 
setcookie('nome', 'ti97', time()+(86400)); //Tempo em segundo = 1 dia 60.60.24

// echo $_COOKIE['nome'];

if(isset ($_COOKIE['nome'])){
echo $_COOKIE['nome'];
}
else{
    echo"Cookie não existe";
}
?>