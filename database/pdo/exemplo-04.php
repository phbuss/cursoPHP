<?php
$conn = new PDO("mysql:host=localhost;dbname=cursophp","root","");
$stmt = $conn->prepare("delete from tb_usuarios where idusuario = :id");
$id      = 4;
$stmt->bindParam(":id", $id);

if ($stmt->errorCode() !== null) {
  echo "Erro alterando usuário: " . $stmt->errorInfo();
} else {
  echo "Usuário alterado com sucesso!<br>";
}