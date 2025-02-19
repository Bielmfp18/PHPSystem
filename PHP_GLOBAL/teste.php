<?php 

$texto = '{
    "cep": "08925-000",
    "logradouro": "Praça da Sé",
    "complemento": "lado ímpar",
    "unidade": "",
    "bairro": "Sé",
    "localidade": "São Paulo",
    "uf": "SP",
    "estado": "São Paulo",
    "regiao": "Sudeste",
    "ibge": "3550308",
    "gia": "1004",
    "ddd": "11",
    "siafi": "7107"
  }';
//   var_dump($texto);

$dados = json_decode($texto);
echo '<br>';
echo $dados->cep;
?>