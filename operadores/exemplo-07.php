<?php

  //Operadores de incremento e decremento
  $a = 10;

  echo "A: ";
  var_dump($a);
  echo "<br>============================<br>";

  echo "Valor de A++ = " . $a++ . "<br>"; //incrementa após a instrução ser executada
  echo "Valor de A = " . $a . "<br>";
  echo "Valor de ++A = " . ++$a . "<br>"; //incrementa antes da instrução ser executada

  echo "<br>============================<br>";

  echo "Valor de A-- = " . $a-- . "<br>"; //decrementa após a instrução ser executada
  echo "Valor de A = " . $a . "<br>";
  echo "Valor de --A = " . --$a . "<br>"; //decrementa antes da instrução ser executada


?>
