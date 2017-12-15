<?php

  /* Escopo */
  $nome = "Paulo";

  function teste() {
    global $nome;
    echo $nome;
  }

  function teste2() {
    $nome = "Henrique";
    echo $nome ." no teste 2";
  }

  teste();
  teste2();

?>
