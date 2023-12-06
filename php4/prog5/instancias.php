<?php
require_once 'php4/prog5/trabajador.php';

$empleadoA = new Trabajador("28499788", "angela", "martinez martinez", "angelamar34@gmail.com");
$empleadoA->setSalarioFijo(150); $empleadoA->setTiempoServicio(5); $empleadoA->calcPrimaAntiguedad();

print_r($empleadoA);
echo "<br>Sueldo fijo: $ {$empleadoA->calcSueldoFijo()} / Prima por antiguedad: {$empleadoA->getPrimaAntiguedad()} $";
echo "<hr>";

$empleadoB = new Trabajador("30018020", "saul", "alejandro", "saulfiscal@gmail.com");

print_r($empleadoB);
$empleadoB->calcSueldoHora(6,5);
echo "<hr>";