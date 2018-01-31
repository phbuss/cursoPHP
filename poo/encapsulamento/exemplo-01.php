<?php

  class Pessoa {
    
    public $nome = "Paulo";
    protected $idade = 37;
    private $senha = "pessoa1";
    
    public function verDados() {
      echo $this->nome . "<br>";  //OK (público)
      echo $this->idade . "<br>"; //Erro (protegido)
      echo $this->senha . "<br>"; //Erro (privado)
    }
    
  }

  $eu = new Pessoa();
  /*
  echo $eu->nome . "<br>";  //OK (público)
  echo $eu->idade . "<br>"; //Erro (protegido)
  echo $eu->senha . "<br>"; //Erro (privado)
  */
  $eu->verDados();
?>
