<?php

  //Operadores lógicos
  $a = 55;
  $b = 55.00;

  echo "A: ";
  var_dump($a);
  echo "<br>";
  echo "B: ";
  var_dump($b);
  echo "<br>============================<br>";

  echo "A maior que B ?";
  var_dump($a > $b);
  echo "<br>";
  echo "A menor que B ?";
  var_dump($a < $b);
  echo "<br>";
  echo "A tem valor igual a B ? ";
  var_dump($a == $b);
  echo "<br>";
  echo "A tem tipo de dado e valor igual B ?";
  var_dump($a === $b);
  echo "<br>";
  echo "A não tem valor igual a B ? ";
  var_dump($a != $b);
  echo "<br>";
  echo "A não tem tipo de dado e valor igual B ?";
  var_dump($a !== $b);
  echo "<br>";
 ?>
