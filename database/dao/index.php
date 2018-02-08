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
$usuarios = Usuario::searchByLogin("aluno");
echo json_encode($usuarios);

echo "<br>" ."* Login **************************" . "<br>";
$usuario = new Usuario();
//$usuario->login("root","AAA"); //Erro
$usuario->login("root","root"); //OS
echo $usuario . "<br>";

echo "<br>" ."* Insert **************************" . "<br>";
$aluno = new Usuario("aluno","aluno");
$aluno->insert();
echo $aluno;

echo "<br>"."* Update **************************"."<br>";
$aluno->setDslogin("alunoNovo");
$aluno->setDssenha("alunoNovo");
$aluno->update();
echo $aluno;

echo "<br>"."* Delete **************************"."<br>";
echo "Aluno que será apagado: ".$aluno."<br>";
$aluno->delete();
echo "Aluno apagado: ".$aluno;