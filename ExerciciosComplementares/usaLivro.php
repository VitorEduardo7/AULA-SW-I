<?php
include("Livro.class.php");

$livro1 = new Livro("O Senhor dos Anéis", "J.R.R. Tolkien");

echo $livro1->exibirStatus() . "<br>";

$livro1->emprestar();
echo $livro1->exibirStatus() . "<br>"; 

$livro1->devolver();
echo $livro1->exibirStatus();          
?>
