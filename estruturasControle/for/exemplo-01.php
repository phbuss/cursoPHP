<?php

  for ($i = 0; $i < 10; $i++) {
    echo $i . "<br>";
  }

  echo "<br>============================<br>";

  for ($i = 0; $i < 100; $i += 5) {
    echo $i . "<br>";
  }

  echo "<br>============================<br>";

  for ($i = 0; $i < 100; $i += 5) {
    if ($i > 50 && $i < 80) continue;
    if ($i === 90) break;
    echo $i . "<br>";
  }

?>
