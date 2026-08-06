<?php
// models/producto.php

class Producto {
    private string $nombre;
    private float $precio;
    private int $stock;

    public function __construct(string $nombre, float $precio, int $stock) {
        $this->setNombre($nombre);
        $this->setPrecio($precio);
        $this->setStock($stock);
    }

    // Getters y Setters
    public function getNombre(): string {
        return $this->nombre;
    }

    public function setNombre(string $nombre): void {
        if (empty(trim($nombre))) {
            throw new Exception("El nombre del producto no puede estar vacío.");
        }
        $this->nombre = trim($nombre);
    }

    public function getPrecio(): float {
        return $this->precio;
    }

    public function setPrecio(float $precio): void {
        if ($precio <= 0) {
            throw new Exception("El precio debe ser un valor positivo mayor a 0.");
        }
        $this->precio = $precio;
    }

    public function getStock(): int {
        return $this->stock;
    }

    public function setStock(int $stock): void {
        if ($stock < 0) {
            throw new Exception("El stock no puede ser un número negativo.");
        }
        $this->stock = $stock;
    }
}