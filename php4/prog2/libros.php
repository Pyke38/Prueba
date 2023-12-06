<?php
class Libro
{
    private $titulo;
    private $edicion;
    private $editorial;
    private $autor = array();

    public function __construct($titulo, $edicion, $editorial)
    {
        $this->titulo = $titulo;
        $this->edicion = $edicion;
        $this->editorial = $editorial;
    }
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
    }
    public function setEdicion($edicion)
    {
        $this->edicion = $edicion;
    }
    public function setEditorial($editorial)
    {
        $this->editorial = $editorial;
    }

    public function getTitulo()
    {
        return $this->titulo;
    }
    public function getEdicion()
    {
        return $this->edicion;
    }
    public function getEditorial()
    {
        return $this->editorial;
    }
    public function getAutor()
    {
        return $this->autor;
    }
    public function agregarAutor($x){
        array_push($this->autor, ["nombre" => $x->getName(), "apellido" => $x->getApellido(), "alias" => $x->getAlias()]);
    }
}

class Autor
{
    private $nombre;
    private $apellido;
    private $alias;

    public function __construct($nombre, $apellido, $alias)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->alias = $alias;
    }

    public function setName($nombre)
    {
        $this->nombre = $nombre;
    }
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;
    }
    public function setAlias($alias)
    {
        $this->alias = $alias;
    }

    public function getName()
    {
        return $this->nombre;
    }
    public function getApellido()
    {
        return $this->apellido;
    }
    public function getAlias()
    {
        return $this->alias;
    }
}
$autorA = new Autor("Jose", "Martinez", "Azorin");
$autorB = new Autor("Pierre-Augustin", "Caron", "Beaumarchais");
$autorC = new Autor("Francisco de Paula", "Fernandez", "Blue Jeans");
$nuevoLibro = new Libro(
    "La Voluntad",
    "El barbero de Sevilla",
    "La chica invicible"
);
$nuevoLibro->agregarAutor($autorA);


print_r($nuevoLibro);