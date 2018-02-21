<?php
require_once 'config.php';

$sql = new Sql();

$usuariosList = $sql->select("select * from tb_usuarios order by dslogin");
$cabecalho = array();

foreach ($usuariosList[0] as $header => $value) {
  array_push($cabecalho, $header);
}

$csv = fopen("usuarios.csv", "w+");
fwrite($csv, implode(";", $cabecalho)."\r\n");
foreach ($usuariosList as $usuario) {
  $linha = array();
  
  foreach ($usuario as $coluna => $valor) {
    array_push($linha, $valor);
  }
  
  fwrite($csv, implode(";", $linha)."\r\n");
}
fclose($csv);

echo "Usuários exportados com sucesso!";