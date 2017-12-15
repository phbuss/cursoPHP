<?php
  $json = '[{"nome":"Paulo","idade":37},{"nome":"Priscila","idade":34}]';

  $dados = json_decode($json, true); //converte para array
  //$dados = json_decode($json); //converte para objeto

  print_r($dados);
 ?>
