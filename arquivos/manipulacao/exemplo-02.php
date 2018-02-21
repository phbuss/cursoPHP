<?php
$dirName = "images";
$dirFiles = scandir($dirName);
$dados = array();

foreach ($dirFiles as $img) {
  if (!in_array($img, array(".",".."))) {
    $fileName = $dirName . DIRECTORY_SEPARATOR . $img;
    $info = pathinfo($fileName);
    $info["size"] = filesize($fileName);
    $info["modified"] = date("d/m/Y H:i:s", filemtime($fileName));
    $info["url"] = "http://localhost/cursoPHP/manipulacaoArquivos/".str_replace("\\", "/", $fileName);
    array_push($dados, $info);
  }
}

echo json_encode($dados);