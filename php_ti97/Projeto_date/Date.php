<?php

//EXPLICAÇÃO 

// Assuming today is March 10th, 2001, 5:16:18 pm, and that we are in the
// Mountain Standard Time (MST) Time Zone

$today = date("F j, Y, g:i a");                 // March 10, 2001, 5:16 pm
$today = date("m.d.y");                         // 03.10.01
$today = date("j, n, Y");                       // 10, 3, 2001
$today = date("Ymd");                           // 20010310
$today = date('h-i-s, j-m-y, it is w Day');     // 05-16-18, 10-03-01, 1631 1618 6 Satpm01
$today = date('\i\t \i\s \t\h\e jS \d\a\y.');   // it is the 10th day.
$today = date("D M j G:i:s T Y");               // Sat Mar 10 17:16:18 MST 2001
$today = date('H:m:s \m \i\s\ \m\o\n\t\h');     // 17:03:18 m is month
$today = date("H:i:s");                         // 17:16:18
$today = date("Y-m-d H:i:s");                   // 2001-03-10 17:16:18 (the MySQL DATETIME format)

//-------------------------------------------------------------------------------------------------//
// DATE TIME

// A função date() permite formatar a data a hora atuais (ou de um timming específico) de acordo com o formato desejado.

// Formato:

// d-> dia do mês (com 2 dígitos).
// m -> mês (com 2 dígitos).
// Y -> ano com 4 dígitos.
// y-> ano com 2 dígitos.
// H -> hora em formato 24 horas (com 2 dígitos).
// i -> minutos (com 2 dígitos).
// s-> segundos (com 2 dígitos).

//Date
echo date("d/m/Y H:i:s");
$data = date("d/m/Y H:i:s");
echo '<br>', '<br>';

//--------------------------------//

//Timestamp
$timestamp = strtotime("2025-01-10");
echo date("d/m/Y", $timestamp);

echo '<br>', '<br>';


//Date com classe e método
$data = new DateTime("2025-12-25");
echo $data->format("d/m/Y"); //O método "format()" formata a data da maneira que o programador desejar. Exibe:25/12/2025.

echo '<br>', '<br>';


//Date modify
$data_op = new DateTime("2025-12-25");
$data_op-> modify("+1 day");// Adiciona 1 dia.
echo $data_op-> format("d/m/Y"); //26/12/2025.


echo '<br>', '<br>';

//--------------------------------//

// DATE (MODO DIFF)

// Utilize o método diff() para obter a diferença entre duas datas:
// Esse é um placeholder (ou especificador) que, no contexto do objeto DateInterval.
// (“%a dias”) representa o total de dias decorridos.
// Representa o total de dias decorridos.

//Date diff
$data1 = new DateTime("2025-12-25");
$data2 = new DateTime("2025-12-31");
$intervalo = $data->diff($data2);
echo $intervalo->format("%a dias"); //Exibe: Faltam 6 dias.

echo '<br>', '<br>';

//Data server

$hoje = date("Y-m-d"); //Data do server
$vencimento ="2025-02-20";
$diferenca = strtotime($vencimento)-strtotime($hoje); //Subtrai a data local pela data de vencimento.
$dias = floor($diferenca/(60*60*24));//segundos*minutos*horas.
echo "hoje - $hoje <br>"; //Exibe: hoje - 2025-02-10.
echo "vencimento = $vencimento <br>";//Exibe: vencimento = 2025-02-20.
echo "diferença = $dias <br>"; //Exibe: Diferença de 10 dias.

echo '<br>', '<br>';

//Date explode 
$hoje = date('Y-m-d'); //Data do servidor
$data_hoje = explode('-', $hoje); //div array pelo "."
$data_br = $data_hoje[2]."/".$data_hoje[1]."/".$data_hoje[0]; // Posicionador e separador.
echo $data_br;
?>