<?php

    include_once "Lampada.class.php";

    $lampa1 = new Lampada();
    //var_dump($lampa1);
    $lampa1->Fabricante = "Philips";
    $lampa1->Tensao = 110;
    $lampa1->Potencia = 50;
    $lampa1->Cor = "Branco";

    $lampa1->MostrarDados();
    $lampa1->Ligar();
    $lampa1->MostrarDados();
?>