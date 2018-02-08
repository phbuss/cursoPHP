<?php

  class Pessoa{

    public $nome; //Atributo

    //Métodos
    public function falar() {
      return "O meu nome é " . $this->nome;
    }

  }

  $paulo = new Pessoa();
  $paulo->nome = "Paulo H. Buss";

  echo $paulo->falar();

?>
