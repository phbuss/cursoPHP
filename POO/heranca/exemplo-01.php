<?php

  class Documento
  {
    
    private $numero;

    public function getNumero()
    {
        return $this->numero;
    }

    public function setNumero($numero)
    {
        $this->numero = $numero;
    }
      
  }
  
  class CPF extends Documento {
      
      public function validar():bool {
          if (null !== $this->getNumero()) {
            return true;
          } else {
            return false;
          };
      }
  }
  
  $doc = new CPF();
  
  if ($doc->validar()) {
      echo "Documento '" . $doc->getNumero() . "' válido <br>";
  } else {
      echo "Documento '" . $doc->getNumero() . "' inválido <br>";
  }
  
  $doc->setNumero("023.662.199-89");

  if ($doc->validar()) {
      echo "Documento '" . $doc->getNumero() . "' válido <br>";
  } else {
      echo "Documento '" . $doc->getNumero() . "' inválido <br>";
  }
  