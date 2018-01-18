<?php

  function incluirClasses($nomeClasse) {
    if (file_exists($nomeClasse . ".php")) {
      require_once ($nomeClasse . ".php");
    }
  }

  function incluirInterfaces($nomeClasse) {
    if (file_exists("interface" . DIRECTORY_SEPARATOR . $nomeClasse . ".php")) {
      require_once ("interface" . DIRECTORY_SEPARATOR . $nomeClasse . ".php");
    }
  }
    
  spl_autoload_register("incluirClasses");
  spl_autoload_register("incluirInterfaces");
  
  //Função SPL INLINE
  spl_autoload_register(function ($nomeClasse) {
    if (file_exists("abstract" . DIRECTORY_SEPARATOR . $nomeClasse . ".php")) {
      require_once ("abstract" . DIRECTORY_SEPARATOR . $nomeClasse . ".php");
    }
  });
  
  $carro = new DelRey();
  $carro->acelerar(80);

?>