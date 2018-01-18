<?php

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