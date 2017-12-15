<?php

  $meses = array (
    "Janeiro","Fevereiro",
    "Março","etc..."
  );

  foreach ($meses as $mes) {
    echo "Mês: " . $mes . "<br>";
  }
  echo "<br>============================<br>";
  foreach ($meses as $key => $mes) {
    echo "Mês " . $key . ": " . $mes . "<br>";
  }
?>
