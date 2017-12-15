<?php

  //Novidades do PHP 7
  //Tipo de retorno da função
  function soma(float ...$valores):float {
    return array_sum($valores);
  }


  echo var_dump(soma(2,2));
  echo "<br>";

  echo var_dump(soma(25,33));
  echo "<br>";

  echo var_dump(soma(1.6, 3.2));
  echo "<br>";
 ?>
