<?php

  $a = 10;

  function dobraValor(&$valor) { //passage de parâmetros pro referência
    $valor *= 2;
    return $valor;
  }

  echo dobraValor($a);
  echo "<br>";
  echo $a;
  echo "<br>";
  echo dobraValor($a);
  echo "<br>";
  echo $a;

 ?>
