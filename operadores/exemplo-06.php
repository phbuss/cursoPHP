<?php
  $a = NULL;
  $b = 8;
  $c = 10;

  echo "A: ";
  var_dump($a);
  echo "<br>";
  echo "B: ";
  var_dump($b);
  echo "<br>";
  echo "C: ";
  var_dump($c);
  echo "<br>============================<br>";

  echo "Mostre A, se nulo mostre B e se nulo mostre C ?" . "<br>";
  echo $a ?? $b ?? $c;

 ?>
