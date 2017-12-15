<?php

  $frase = "A repetição é a mãe da retenção.";
  echo $frase;
  $palavra = "mãe";
  echo "<br>Palavra para encontrar: " . $palavra;
  echo "<br>============================<br>";
  $q = strpos($frase, "mãe");
  echo "Posição da palavra 'mãe' na frase: " . $q;
  echo "<br>============================<br>";
  echo "Texto antes da palavra 'mãe': " . substr($frase, 0, $q) . "<br>";
  echo "Texto depois da palavra 'mãe': " . substr($frase, $q + strlen($palavra), strlen($frase)) . "<br>";
 ?>
