<?php
    $name = $_GET['cxname'];
    $nota01 = $_GET['cxnota01'];
    $nota02 = $_GET['cxnota02'];
    $nota03 = $_GET['cxnota03'];

    $maior = max($nota01, $nota02, $nota03);
    echo $name;
    echo "Sua mensagem é: $maior";
?>