<?php
  
  $nome = "Paulo Henrique";
  $sobrenome = "Buss";
  $nomeCompleto = $nome . " " . $sobrenome;
      
  /* Variáveis não podem iniciar com número ou conter caracteres especiais,
   * exceto o "_":
   *   $1nome = "Paulo"; ERRO
   *   $@nome = "Paulo"; ERRO
   * */
  
  echo $nomeCompleto;
  echo $nome;
  
  unset($nome, $sobrenome);
  
  if (isset($nome)) {
    echo $nome;
  }
  
?>