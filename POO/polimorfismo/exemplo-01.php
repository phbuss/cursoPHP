<?php

abstract class Animal {
  public function falar() {
    return "Som do animal" . "<br>";
  }
  
  public function mover() {
    return "Andando..." . "<br>";
  }
}

class Cachorro extends Animal {
  
  public function falar() {
    return "Latindo..." . "<br>";
  }
  
}

class Gato extends Animal {
  
  public function falar() {
    return "Miando..." . "<br>";
  }
  
}

class Passaro extends Animal {
  
  public function falar() {
    return "Cantando..." . "<br>";
  }

  public function mover() {
    return "Voando e " . parent::mover() . "<br>";
  }
  
}


$animal = new Cachorro();
echo $animal->falar();
echo $animal->mover();
echo "------------------------------------" . "<br>";
$animal = new Gato();
echo $animal->falar();
echo $animal->mover();
echo "------------------------------------" . "<br>";
$animal = new Passaro();
echo $animal->falar();
echo $animal->mover();
