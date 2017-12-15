<?php

  $condicao = true;

  while ($condicao) {
    $numero = rand(1, 10);
    if ($numero === 3) {
      echo "Achou o número TRÊS!" . "<br>";
      $condicao = false;
    } else {
      echo "Número sorteado: " . $numero . "<br>";
    }
  }

?>
