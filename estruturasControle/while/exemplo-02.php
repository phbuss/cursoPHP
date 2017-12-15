<?php

  $total = 150;
  $desconto = 0.9;

  do {

    $total *= $desconto;
    echo "Total com desconto: " . $total . "<br>";

  } while ($total > 100);

  echo "Total final: " . $total;
?>
