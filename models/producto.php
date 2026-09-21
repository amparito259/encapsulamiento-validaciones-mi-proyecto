<?php
// models/producto.php

class Producto {
    private string $nombre;
    private float $precio;
    private int $stock;

    public function __construct(string $nombre, float $precio, int $stock) {
        try {
            $this->setNombre($nombre);
            $this->setPrecio($precio);
            $this->setStock($stock);
        } catch (Exception $e) {
            echo "<p>Error en el constructor de Producto: " . $e->getMessage() . "</p>";
        }
    }

    // Getters y Setters
    public function getNombre(): string {
        return $this->nombre;
    }

    public function setNombre(string $nombre): void {
        if (!empty(trim($nombre))) {
            $this->nombre = trim($nombre);
        } else {
            throw new Exception("El nombre del producto no puede estar vacío.");
        }
    }

    public function getPrecio(): float {
        return $this->precio;
    }

    public function setPrecio(float $precio): void {
        if ($precio > 0) {
            $this->precio = $precio;
        } else {
            throw new Exception("El precio debe ser un valor positivo mayor a 0.");
        }
    }

    public function getStock(): int {
        return $this->stock;
    }

    public function setStock(int $stock): void {
        if ($stock >= 0) {
            $this->stock = $stock;
        } else {
            throw new Exception("El stock no puede ser un número negativo.");
        }
    }
}
?>