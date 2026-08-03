<?php
class Servicio {
    // 1. Atributos privados
    private $nombre;
    private $categoria;
    private $precio;
    private $duracionMinutos;

    // 2. Constructor
    public function __construct($nombre, $categoria, $precio, $duracionMinutos) {
        $this->setNombre($nombre);
        $this->setCategoria($categoria);
        $this->setPrecio($precio);
        $this->setDuracionMinutos($duracionMinutos);
    }

    // 3. Getters
    public function getNombre() {
        return $this->nombre;
    }

    public function getCategoria() {
        return $this->categoria;
    }

    public function getPrecio() {
        return $this->precio;
    }

    public function getDuracionMinutos() {
        return $this->duracionMinutos;
    }

    // 4. Setters con Validaciones para GLOWCLICK

    // Validacion 1: Nombre no vacio ni con solo espacios
    public function setNombre($nombre) {
        if (is_string($nombre) && trim($nombre) !== "") {
            $this->nombre = $nombre;
        } else {
            echo "<p>Error en Nombre: El nombre del servicio de GLOWCLICK no puede estar vacio.</p>";
        }
    }

    public function setCategoria($categoria) {
        if (is_string($categoria) && trim($categoria) !== "") {
            $this->categoria = $categoria;
        } else {
            echo "<p>Error en Categoria: La categoria debe ser valida.</p>";
        }
    }

    // Validacion 2: Precio mayor que 0
    public function setPrecio($precio) {
        if (is_numeric($precio) && $precio > 0) {
            $this->precio = $precio;
        } else {
            echo "<p>Error en Precio: El precio del servicio debe ser mayor a $0 ($precio).</p>";
        }
    }

    // Validacion 3: Duracion mayor que 0 minutos
    public function setDuracionMinutos($duracionMinutos) {
        if (is_numeric($duracionMinutos) && $duracionMinutos > 0) {
            $this->duracionMinutos = $duracionMinutos;
        } else {
            echo "<p>Error en Duracion: La duracion debe ser mayor a 0 minutos ($duracionMinutos min).</p>";
        }
    }

    // Metodo para resumen
    public function mostrarDetalle() {
        return "Servicio: $this->nombre | Categoria: $this->categoria | Precio: $$this->precio | Duracion: $this->duracionMinutos min.";
    }
}
?>