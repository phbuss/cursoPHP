<?php

interface Veiculo {
  
  public function acelerar($velocidade);
  public function frear($velocidade);
  public function trocarMarcha($marcha);
  
}

class Civic implements Veiculo {
  
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

$carro = new Civic();
$carro->trocarMarcha(1);
$carro->acelerar(20);
$carro->trocarMarcha(2);
$carro->acelerar(40);
$carro->trocarMarcha(3);
$carro->acelerar(60);
$carro->trocarMarcha(4);
$carro->acelerar(80);
$carro->trocarMarcha(5);
$carro->acelerar(110);
$carro->frear(30);
$carro->trocarMarcha(3);

?>