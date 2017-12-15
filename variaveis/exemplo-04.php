<?php

  /* Pré definidas ou Superglobais */
  $nome =(int)$_GET["a"]; //Informações da página
  $ip = $_SERVER["REMOTE_ADDR"]; //Informações do ambiente (usuário e servidor)
  $script = $_SERVER["SCRIPT_NAME"]; //Informações do ambiente (usuário e servidor

  var_dump($script);
?>
