<?php

  //Fun��es an�nimas
  function teste($callback) {
    //Processo lento.....
    $callback();
  }

  teste(function () {
    echo "Terminou...";
  });

?>
