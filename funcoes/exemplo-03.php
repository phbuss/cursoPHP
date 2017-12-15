<?php

  function ola($texto, $periodo = "Bom dia") {
    echo "Olá $texto! $periodo<br>";
  }

  echo ola();
  echo ola("");
  echo ola("mundo", "Boa noite");
  echo ola("Paulo", "Boa tarde");

 ?>
