<?php
  $pessoas = array();

  array_push($pessoas, array(
    'nome' => 'Paulo',
    'idade' => 37
  ));


  array_push($pessoas, array(
    'nome' => 'Priscila',
    'idade' => 34
  ));

  echo json_encode($pessoas);  
 ?>
