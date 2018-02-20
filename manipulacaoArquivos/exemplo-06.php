<?php

$dirPath = "temp";

if (!is_dir($dirPath)) mkdir($dirPath);
copy("exemplo-01.php", $dirPath . DIRECTORY_SEPARATOR . "exemplo-01_copia.php");
copy("exemplo-02.php", $dirPath . DIRECTORY_SEPARATOR . "exemplo-02_copia.php");

echo "Listando conteúdo do diretório '" . $dirPath . "'<br>";
foreach (scandir($dirPath) as $file) {
  if (!in_array($file, array(".",".."))) {
    $filePath = $dirPath . DIRECTORY_SEPARATOR . $file;
    echo "-> " . $filePath . "<br>";
  };
}

foreach (scandir($dirPath) as $file) {
  if (!in_array($file, array(".",".."))) {
    $filePath = $dirPath . DIRECTORY_SEPARATOR . $file;
    echo "Apagando arquivo '" . $filePath . "'<br>";
    unlink($filePath);
  };
}

echo "Todos os arquivos do diretório '" . $dirPath . "' foram removidos com sucesso!" . "<br>";
rmdir($dirPath);
echo "O diretório '" . $dirPath . "' foi removido com sucesso!" . "<br>";
