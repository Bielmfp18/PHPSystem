<?php 
//SUPER GLOBAL//

// echo "Olá formulário";

// print_r($_POST);//Super Global recebe os valores como uma array.
// echo '<br>';//Super Globais são sempre acompanhadas do ($) e todas as letras são maiúsculas.
// echo $_POST['email'];
// echo '<br>';
// echo $_POST['senha'];

//SUPER GLOBAL para login (Array)//
//Atividade Feita =)
// $usuario = array(
//     array('email'=> 'admin@email.com', 'senha' => '123456'),
//     array('email'=> 'usuario@email.com', 'senha' => '123456')
// );

// foreach($usuario as $user ){
//  echo 'Usuário array:'.$user['email'].'/'.$user['senha'];
//  echo '<br>';
//  echo 'Usuário form:'.$_POST['email'].'/'.$_POST['senha'];
//  echo '<hr>';
// }

////////////////////////////////////////////////////////////////

//Variável que verifica se a autentificação foi feita
$UsuarioAutenticado = false;
//Usuarios do Sistema 
$usuario = array(
    array('email'=> 'admin@teste.com', 'senha' => '123456'),
    array('email'=> 'usuario@teste.com', 'senha' => '123456')
);

foreach($usuario as $user){
if ($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']){
    $UsuarioAutenticado = true;
}
}
if($UsuarioAutenticado){
echo 'Usuário autenticado';
}else {

header('Location: index.php? login=erro em logar');
}



?>