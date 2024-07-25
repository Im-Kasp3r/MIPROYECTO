<?php
require_once __DIR__ . '/../class/autoload.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $categoria = new Categoria();
    $categoria->nombre = $_POST['nombre'];
    $categoria->guardar();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Agregar Categoría</title>
</head>
<body>
    <form action="categorias.php" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br>
        <button type="submit">Guardar</button>
    </form>
</body>
</html>




