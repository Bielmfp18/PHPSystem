<?php 
//SUPER GLOBAL//

// echo "Olá formulário";
print_r($_POST);//Super Global recebe os valores como uma array.
echo '<br>';//Super Globais são sempre acompanhadas do ($) e todas as letras são maiúsculas.
echo $_POST['email'];
echo '<br>';
echo $_POST['senha'];

?>