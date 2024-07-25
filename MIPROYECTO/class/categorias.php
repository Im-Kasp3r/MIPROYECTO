<?php
/* @autor Matias Oyarzun */

class Categoria {
    public $id;
    public $nombre;

    public function __construct($nombre) {
        $this->nombre = $nombre;
    }

    public function guardar($db) {
        // Implementar lógica para guardar la categoría
    }

    public function eliminar($db) {
        // Implementar lógica para eliminar la categoría
    }
}
?>
