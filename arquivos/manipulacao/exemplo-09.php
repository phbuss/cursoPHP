<?php

$sourceDirPath = "source";
if (!is_dir($sourceDirPath)) mkdir($sourceDirPath);

$destDirPath = "dest";
if (!is_dir($destDirPath)) mkdir($destDirPath);

$fileName = date("Y-m-d_H-i-s") . ".txt";
$sourceFileName = $sourceDirPath . DIRECTORY_SEPARATOR . $fileName;
$destFileName = $destDirPath . DIRECTORY_SEPARATOR . $fileName;

if (!file_exists($sourceFileName)) {
  $file = fopen($sourceFileName, "w+");
  fwrite($file, date("Y-m-d H:i:s"));
  fclose($file);
}

rename($sourceFileName, $destFileName);

echo "Arquvo '$sourceFileName' movido para '$destFileName' com sucesso!";
