<?php
    include_once 'Aluno.class.php';

    $fulano = new Aluno("Fulano da Silva", 5,7);

    $nota1 = $fulano->getNota1();
    $nota2 = $fulano->getNota2();

    // echo $nota1;

    $media = $fulano->Media($nota1,$nota2);

    echo $fulano->VerificarSituacao($media);
?>          