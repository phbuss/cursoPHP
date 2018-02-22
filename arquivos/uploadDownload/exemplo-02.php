<?php

$link = "https://www.google.com.br/images/branding/googlelogo/1x/googlelogo_color_272x92dp.png";
$downloadPath = "downloads";
if (!is_dir($downloadPath)) {
  mkdir($downloadPath);
}

$content = file_get_contents($link);

$parse = parse_url($link);
$baseName = basename($parse["path"]);

$fileName = $downloadPath . DIRECTORY_SEPARATOR . $baseName;
$file = fopen($fileName, "w+");
fwrite($file, $content);
fclose($file);
?>

<img src="<?=$fileName?>">