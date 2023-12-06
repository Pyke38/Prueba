<?php
require_once 'prog4/usuario.php';
class Admin extends Usuario{
    protected $rol = "admin";

    public function diHola(){
        echo "<br><br><b>hola soy administrador</b>";
    }

}