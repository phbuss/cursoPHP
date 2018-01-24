<?php
$conn = new mysqli("localhost","root","","cursophp");

if ($conn->connect_error) {
 echo "Erro: " . $conn->connect_error;
}

$stmt = $conn->prepare("insert into tb_usuarios (dslogin, dssenha) values (?,?)");
$stmt->bind_param("ss", $login, $senha);
$login = "root";
$senha = "root";
$stmt->execute();

if ($stmt->error) {
  echo "Erro inserindo usuário: " . $stmt->error;
}