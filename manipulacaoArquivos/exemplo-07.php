<?php

$filePath = "usuarios.csv";

if (file_exists($filePath)) {
  
  $file = fopen($filePath,"r");
  
  $headers = explode(";", fgets($file));
  
  $data = array();
  
  while ($row = fgets($file)) {
    
    $rowData = explode(";", $row);
    
  }
  
  fclose($file);
  
}