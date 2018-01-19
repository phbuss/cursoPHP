<?php
require_once 'config.php';
use Cliente\Cadastro;

$cad = new Cadastro();
$cad->setNome("Paulo");
$cad->setEmail("paulo.buss@gmail.com");
$cad->setSenha("phbuss");

echo $cad . "<br>";
$cad->registrarVenda();