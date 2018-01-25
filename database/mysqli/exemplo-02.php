<?php
$conn = new mysqli("localhost","root","","cursophp");

if ($conn->connect_error) {
 echo "Erro: " . $conn->connect_error;
}

$result = $conn->query("select * from tb_usuarios order by dslogin");
$dados = array();
while ($row = $result->fetch_assoc()) {
  array_push($dados, $row);
}

echo json_encode($dados);

