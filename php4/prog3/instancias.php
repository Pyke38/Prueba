<?php
require_once 'prog3/adulto.php';
require_once 'prog3/infante.php';


$pacienteA = new pacienteAdulto("juan", "pobre carrera", "44", "hombre", "los buqueques", "diarrea, dolor muscular, rascadera", "soltero", "estudiante");

$pacienteB = new pacienteInfante("dikeny", "vivo por ahora", "18", "masculino", "agua lu", "disfuncion, dolor en el pie, pies frios", "52", "39");

print_r($pacienteA);
echo '<hr>';
print_r($pacienteB);