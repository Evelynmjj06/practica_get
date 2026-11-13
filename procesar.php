<?php
if (isset($_GET['producto']) && isset($_GET['categoria'])) {
    $producto = $_GET['producto'];
    $categoria = $_GET['categoria'];
    echo "Producto buscado: " . $producto . "<br>";
    echo "Categoría: " . $categoria;
}
?>