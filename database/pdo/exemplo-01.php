<?php
$conn = new PDO("mysql:dbname=cursophp;host=localhost","root","");
$stmt = $conn->prepare("select * from tb_usuarios order by dslogin");
$stmt->execute();


$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

var_dump($results);
echo "<br>";
foreach ($results as $row) {
  foreach ($row as $key => $value) {
    echo "<strong>".$key."</strong>:".$value."<br>";
  }
  echo "******************************************<br>";
}
