<?php
$nome = "Leonardo";
$peso = 85;
$altura = 1.81;
$imc = $peso / pow($altura, 2);
echo "Nome: $nome<br>" . "peso: " . number_format($peso, 2) . "<br>Altura: " . number_format($altura, 2)
 . "<br> IMC: " . number_format($imc, 2);

// $sobre = "Urbantzky";
// $idade =27;
// $altura = 1.81;

// echo"<h1 style='color:blue;text-align:center'>".$nome." ".$sobre."<br>Idade: ".$idade;"</h1>";

// echo"<br>Idade: ".$idade."<br>";

// echo"altura: ".$altura." metros de altura";
