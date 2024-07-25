<?php
require_once '../class/autoload.php';
$database = new Database();
$db = $database->getConnection();
$query = "SELECT * FROM categorias";
$result = $database->select($query);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Categorías</title>
</head>
<body>
    <h1>Lista de Categorías</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
        </tr>
        <?php foreach ($result as $categoria): ?>
            <tr>
                <td><?php echo $categoria['id']; ?></td>
                <td><?php echo $categoria['nombre']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
    <a href="categorias.php">Agregar Categoría</a>
    <div style="text-align: center;">
        <p>Matias Oyarzun</p>
    </div>
</body>
</html>

