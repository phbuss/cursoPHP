<?php

  class Pessoa {
    
    public $nome = "Paulo";
    protected $idade = 37;
    private $senha = "analista01";
    
    public function verDados() {
      echo $this->nome . "<br>";
      echo $this->idade . "<br>";
      echo $this->senha . "<br>";
    }
    
  }
  
  class Programador extends Pessoa {
    
    public function verDados() {
      echo get_class($this) . "<br>";
      echo $this->nome . "<br>";  //OK (público)
      echo $this->idade . "<br>"; //OK (protegido)
      echo $this->senha . "<br>"; //Erro (privado da classe pai)
    }
    
  }

  $eu = new Programador();
  /*
  echo $eu->nome . "<br>";  //OK (público)
  echo $eu->idade . "<br>"; //Erro (protegido)
  echo $eu->senha . "<br>"; //Erro (privado)
  */
  $eu->verDados();
?>
