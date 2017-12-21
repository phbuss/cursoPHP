<?php
  $dt = new DateTime();
  echo "Data: " . $dt->format("d/m/Y H:i:s") . "<br>";

  $periodo = new DateInterval("P15D");

  $dt->add($periodo);

  echo "Data + 15: " . $dt->format("d/m/Y H:i:s") . "<br>";
?>
