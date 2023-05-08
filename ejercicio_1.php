<?php

class Producto
{
  private $id;
  private $nombre;
  private $descripcion;
  private $precio;
  private $existencias;
  private $imagen;

  public function __construct($id, $nombre, $descripcion, $precio, $existencias, $imagen)
  {
    $this->id = $id;
    $this->nombre = $nombre;
    $this->descripcion = $descripcion;
    $this->precio = $precio;
    $this->existencias = $existencias;
    $this->imagen = $imagen;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function setNombre($nombre)
  {
    $this->nombre = $nombre;
  }

  public function setDescripcion($descripcion)
  {
    $this->descripcion = $descripcion;
  }

  public function setPrecio($precio)
  {
    $this->precio = $precio;
  }

  public function setExistencias($existencias)
  {
    $this->existencias = $existencias;
  }

  public function setImagen($imagen)
  {
    $this->imagen = $imagen;
  }

  public function getId()
  {
    return $this->id;
  }

  public function getNombre()
  {
    return $this->nombre;
  }

  public function getDescripcion()
  {
    return $this->descripcion;
  }

  public function getPrecio()
  {
    return $this->precio;
  }

  public function getExistencias()
  {
    return $this->existencias;
  }

  public function getImagen()
  {
    return $this->imagen;
  }
}

// puedes crear objetos de la clase Producto de la siguiente manera
$producto = new Producto(1, "iPhone X", "El mejor smartphone de Apple", 999.99, 10, "https://example.com/images/iphone-x.jpg");

// y acceder a sus propiedades y métodos de la siguiente manera
echo $producto->getNombre(); // "iPhone X"
$producto->setExistencias(5);
echo $producto->getExistencias(); // 5
