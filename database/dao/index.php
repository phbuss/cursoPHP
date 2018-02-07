<?php
require_once 'config.php';

echo "* Usuário específico **************************" . "<br>";
$usuario = new Usuario();
$usuario->loadById(1);
echo $usuario;

echo "<br>" . "* Lista TODOS os usuários **************************" . "<br>";
$usuarios = Usuario::getList();
echo json_encode($usuarios);

echo "<br>" ."* Lista de usuários por login **************************" . "<br>";
$usuarios = Usuario::searchByLogin("u");
echo json_encode($usuarios);

echo "<br>" ."* Login **************************" . "<br>";
$usuario = new Usuario();
//$usuario->login("root","AAA"); //Erro
$usuario->login("root","root"); //OS
echo $usuario . "<br>";