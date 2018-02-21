<?php

$filePath = "usuarios.csv";

if (file_exists($filePath)) {
  
  $file = fopen($filePath,"r");
  
  $headers = explode(";", fgets($file));
  
  $rows = array();
  
  while ($row = fgets($file)) {
    
    $rowData = explode(";", $row);
    $linha = array();
    
    for ($i = 0; $i < count($headers); $i++) {
      $linha[$headers[$i]] = $rowData[$i];  
    }
    
    array_push($rows, $linha);
    
  }
  
  fclose($file);
  
}

echo json_encode($rows);