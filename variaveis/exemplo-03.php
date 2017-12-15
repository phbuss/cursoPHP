<?php

    /* Básicos */
    $nome = "Paulo"; //String
    $site = "www.copobras.com.br"; //String
    $ano = 2017; //Inteiro
    $salario = 5500.99; //Ponto flutuante
    $bloqueado = false; //Boolean

    /* Compostos */
    $frutas = array("Abacaxi", "Laranja", "Manga"); //Array
    //echo $frutas[2];

    $nascimento = new DateTime(); //Objeto
    //var_dump($nascimento);

    /* Especiais */
    $arquivo = fopen("exemplo-03.php","r"); //Resource
    //var_dump($arquivo);

    $nulo = NULL;
    var_dump($nulo);

?>
