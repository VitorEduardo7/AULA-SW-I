<?php
$nome = $_POST['nome'];
$email = $_POST['email'];
$data_nascimento = $_POST['data_nascimento'];
$bandeira = $_POST['bandeira'];

echo "<h2>Informações enviadas:</h2>";
echo "Nome: $nome<br>";
echo "E-mail: $email<br>";
echo "Data de Nascimento: $data_nascimento<br>";
echo "Bandeira do Cartão: $bandeira<br>";
?>
