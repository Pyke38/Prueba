<?php
require_once 'prog4/usuario.php';
class Supervisor extends Usuario{
    protected $rol = "supervisor";

    public function diHola(){
        echo "<br><br><b>yo soy el jefe, jaja</b>";
    }
}