<?php
$login = $_POST['login'];
$senha = $_POST['senha'];

if($login == "etec" && $senha == "informática") {
    echo "Logado com sucesso!";
} else {
    echo "Login ou senha incorretos.";
}
?>
