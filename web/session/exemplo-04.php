<?php

  require_once("../../inc/config.php");
  echo session_id();
  echo "<br>";
  echo "Variáveis da sessão: ";
  var_dump($_SESSION);
  session_regenerate_id();
  echo "<br>";
  echo session_id();
  echo "<br>";
  echo "Variáveis da NOVA sessão: ";
  var_dump($_SESSION);
  
 ?>
