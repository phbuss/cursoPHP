<?php
$filePath = "images" . DIRECTORY_SEPARATOR . "ti.png";
$fileInfo = new finfo(FILEINFO_MIME_TYPE);
$mimeType = $fileInfo->file($filePath);
$base64 = base64_encode(file_get_contents($filePath));
$base64link = "data:" . $mimeType . ";base64,".$base64;
?>
<a href="<?=$base64link?>" target="_blank">Link para a imagem</a>
<img src="<?=$base64link?>" alt="">