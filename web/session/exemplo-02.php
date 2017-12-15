<?php

  require_once("../../inc/config.php");
  print_r($_SESSION);               //mostra variáveis da sessão
  session_unset($_SESSION["nome"]); //apaga uma variável da sessão
  session_unset();                  //apaga todas as variáveis da sessão
  session_destroy();                //apaga a sessão
  print_r($_SESSION);               //mostra variáveis da sessão

 ?>
