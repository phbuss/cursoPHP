<?php

  $qualSuaIdade = 15;
  $idadeCrianca = 12;
  $idadeAdulto = 18;
  $idadeIdoso = 65;

  if ($qualSuaIdade < $idadeCrianca) {
    echo "Você É uma criança!";
  } elseif ($qualSuaIdade < $idadeAdulto) {
    echo "Você É um adolescente!";
  } elseif ($qualSuaIdade < $idadeIdoso) {
    echo "Você É um adulto!";
  } else {
    echo "Você É um idoso!";
  }

  //Operador ternário
  echo "<br>";
  echo ($qualSuaIdade < $idadeAdulto) ? "Você É MENOR de idade." : "Você É MAIOR de idade.";

?>
