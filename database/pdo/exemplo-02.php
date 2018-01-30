<?php
$conn = new PDO("mysql:host=localhost;dbname=cursophp","root","");
$stmt = $conn->prepare("insert into tb_usuarios(dslogin, dssenha) values (:dslogin, :dssenha)");
$dslogin = "phbuss";
$dssenha = "phbuss";
$stmt->bindParam(":dslogin", $dslogin);
$stmt->bindParam(":dssenha", $dssenha);
$stmt->execute();

if ($stmt->errorCode() !== null) {
  echo "Erro inserindo usuário: <br>" . var_dump($stmt->errorInfo());
} else {
  echo "Usuário inserido com sucesso!<br>";
}