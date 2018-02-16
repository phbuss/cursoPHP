<?php

  //Métodos mágicos
  class Endereco {
    private $logradouro;
    private $numero;
    private $cidade;

    public function __construct($a, $b, $c) {
      $this->logradouro = $a;
      $this->numero = $b;
      $this->cidade = $c;
    }

    public function __destruct() {
      var_dump("Destruindo...");
    }

    public function __toString() {
      return $this->logradouro . ", " . $this->numero . " - " . $this->cidade;
    }

  }

  $meuEndereco = new Endereco("Av. João Manoel Galdino da Luz", 521, "Tubarão");

  var_dump($meuEndereco);

  echo $meuEndereco . "<br>";

  unset($meuEndereco);

?>
