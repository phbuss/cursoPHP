<?php

interface Veiculo {
  
  public function acelerar($velocidade);
  public function frear($velocidade);
  public function trocarMarcha($marcha);
  
}

abstract class Automovel implements Veiculo {
  
  public function acelerar($velocidade) {
    echo "Acelerando até " . $velocidade . " km/h.<br>";
  }
  
  
  public function frear($velocidade) {
    echo "Freiando até " . $velocidade . " km/h.<br>";
  }
  
  
  public function trocarMarcha($marcha) {
    
    echo "Marcha trocada para " . $marcha . ".<br>";
    
  }
  
  
}

class DelRey extends Automovel {
  
  public function empurrar () {
    echo "Empurrando meu carro.<br>";
  }
  
}

$carro = new DelRey();
$carro->acelerar(200);