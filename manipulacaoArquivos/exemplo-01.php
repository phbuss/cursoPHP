<?php
$dirName = "images";

if (!is_dir($dirName)) {
  mkdir($dirName);
  echo "O diretório $dirName criado com sucesso!";
} else {
  echo "O diretório '$dirName' já existe...";
  //rmdir($dirName);
  //echo "O diretório '$dirName' for removido!";
}
  