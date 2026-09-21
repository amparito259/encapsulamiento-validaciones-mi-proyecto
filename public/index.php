<?php
// Incluye la conexion desde la carpeta config
require_once '../config/conexion.php';

// Creacion de un servicio valido inicial para GLOWCLICK
$servicio1 = new Servicio("Maquillaje", "Facial", 50000, 45);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>GLOWCLICK - Administracion de Servicios</title>
</head>
<body>

    <h1>Empresa GLOWCLICK - Registro de Servicios</h1>

    <h2>1. Datos Iniciales del Servicio</h2>
    <p>Nombre del servicio: <?= $servicio1->getNombre() ?></p>
    <p>Categoria: <?= $servicio1->getCategoria() ?></p>
    <p>Precio: $<?= $servicio1->getPrecio() ?></p>
    <p>Duracion: <?= $servicio1->getDuracionMinutos() ?> minutos</p>

    <hr>

    <h2>2. Probando Asignacion de Datos Incorrectos (Validaciones)</h2>

    <?php
    echo "<p>Intentando asignar un precio negativo de -$10000...</p>";
    try {
        $servicio1->setPrecio(-10000);
    } catch (Exception $e) {
        echo "<p>Error en Precio: " . $e->getMessage() . "</p>";
    }

    echo "<p>Intentando asignar un nombre vacio...</p>";
    try {
        $servicio1->setNombre("   ");
    } catch (Exception $e) {
        echo "<p>Error en Nombre: " . $e->getMessage() . "</p>";
    }

    echo "<p>Intentando asignar una duracion de 0 minutos...</p>";
    try {
        $servicio1->setDuracionMinutos(0);
    } catch (Exception $e) {
        echo "<p>Error en Duracion: " . $e->getMessage() . "</p>";
    }
    ?>

    <hr>

    <h2>3. Verificacion con Getters (Los datos correctos se mantuvieron)</h2>
    <p>Nombre conservado: <?= $servicio1->getNombre() ?></p>
    <p>Precio conservado: $<?= $servicio1->getPrecio() ?></p>
    <p>Duracion conservada: <?= $servicio1->getDuracionMinutos() ?> minutos</p>

    <hr>

    <h3>Resumen General en Sistema:</h3>
    <p><?= $servicio1->mostrarDetalle() ?></p>

</body>
</html>