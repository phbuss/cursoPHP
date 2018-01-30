<?php
$conn = new PDO("mysql:host=localhost;dbname=cursophp","root","");

$conn->beginTransaction();

$stmt = $conn->prepare("delete from tb_usuarios where idusuario = ?");
$id = 7;
$stmt->execute(array($id));

//$conn->rollBack();
$conn->commit();