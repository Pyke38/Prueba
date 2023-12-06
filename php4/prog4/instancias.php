<?php
require_once 'prog4/administrador.php';
require_once 'prog4/empleado.php';
require_once 'prog4/supervisor.php';
require_once 'prog4/usuario.php';

$empleadoA = new Empleado("pedro", "vivas", "agaualuz", "7");

$nuevoUsuario = new Usuario("Juan", "1314123", array("dia" => date('d'), "mes" => date('m'), "year" => date('Y')), array("dia" => date('d'), "mes" => date('m'), "year" => date('Y', strtotime('+1 year'))));

$empleadoA->setUsername($nuevoUsuario->getUsername());

print_r($empleadoA);
echo "<hr>";
print_r($nuevoUsuario);

$nuevoUsuario->diHola();

echo "<hr>";



$empleadoB = new Empleado("jose", "pobre", "penon", "3");
$nuevoAdmin = new Admin("Pyke", "pepe123", array("dia" => date('25'), "mes" => date('5'), "year" => date('Y')), array("dia" => date('25'), "mes" => date('5'), "year" => date('Y', strtotime('+1 year'))));
$empleadoB->setUsername($nuevoAdmin->getUserName());

print_r($empleadoB);
echo "<hr>";
print_r($nuevoAdmin);

$nuevoAdmin->diHola();

echo "<hr>";

$empleadoC = new Empleado("saviel", "rodriguez", "centro", "9");
$supervisor = new Supervisor("savs", "elpro1423", array("dia" => date('13'), "mes" => date('6'), "year" => date('Y')), array("dia" => date('d'), "mes" => date('m'), "year" => date('Y', strtotime('+5 year'))));

print_r($empleadoC);
echo "<hr>";
print_r($supervisor);

$supervisor->diHola();