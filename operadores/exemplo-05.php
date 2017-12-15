<?php
  $a = 50;
  $b = 60.0;

  echo "A: ";
  var_dump($a);
  echo "<br>";
  echo "B: ";
  var_dump($b);
  echo "<br>============================<br>";

  echo "A é maior(1), igual(0) ou menor(-1) que B ?";
  var_dump($a <=> $b);
  echo "<br>";

 ?>
