<?php

  $diaSemana = date("w");
  //$diaSemana = 8;

  echo "Nr. do dia da semana: " . $diaSemana;
  echo "<br>============================<br>";

  echo "Dia da semana: ";
  switch ($diaSemana) {
    case 0:
      echo "Domingo";
      break;
    case 1:
      echo "Segunda";
      break;
    case 2:
      echo "Terça";
      break;
    case 3:
      echo "Quarta";
      break;
    case 4:
      echo "Quinta";
      break;
    case 5:
      echo "Sexta";
      break;
    case 6:
      echo "Sábado";
      break;

    default:
      echo "Dia da semana inválido.";
      break;
  }
?>
