<?php
include("Funcionario.class.php");

$func = new Funcionario("Carlos", 2500);

echo $func->exibirInformacoes() . "<br>";

$func->aumentarSalario(10);

echo $func->exibirInformacoes();
?>
