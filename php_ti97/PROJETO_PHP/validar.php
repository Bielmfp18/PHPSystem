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
$usuario = array(
    array('email'=> 'admin@email.com', 'senha' => '123456'),
    array('email'=> 'usuario@senac.com', 'senha' => '123'),
);

foreach($usuario as $user ){
 echo 'Usuário array:'.$user['email'].'/'.$user['senha'];
 echo '<br>';
 echo 'Usuário array:'.$_POST['email'].'/'.$_POST['senha'];
 echo '<hr>';
}



?>