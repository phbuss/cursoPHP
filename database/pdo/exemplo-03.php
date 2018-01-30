<?php
$conn = new PDO("mysql:host=localhost;dbname=cursophp","root","");
$stmt = $conn->prepare("update tb_usuarios set dslogin = :dslogin, dssenha = :dssenha where idusuario = :id");
$dslogin = "user1";
$dssenha = "user1";
$id      = 7;
$stmt->bindParam(":dslogin", $dslogin);
$stmt->bindParam(":dssenha", $dssenha);
$stmt->bindParam(":id", $id);
$stmt->execute();

if ($stmt->errorCode() !== null) {
  echo "Erro alterando usuário:  <br>" . var_dump($stmt->errorInfo());
} else {
  echo "Usuário alterado com sucesso!<br>";
}