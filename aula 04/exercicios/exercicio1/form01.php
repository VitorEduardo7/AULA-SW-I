<?php
    $nota01 = $_GET['cxnota01'];
    $nota02 = $_GET['cxnota02'];
    $nota03 = $_GET['cxnota03'];

    $media = ($nota01+$nota02+$nota03)/3;
    echo "Sua mensagem é: $media";
?>