<?php
spl_autoload_register(function ($class_name) {
    $file = __DIR__ . '/' . strtolower($class_name) . '.php';
    if (file_exists($file)) {
        require_once $file;
    } else {
        error_log("Autoload error: no se pudo cargar la clase '$class_name' desde '$file'");
    }
});
?>



