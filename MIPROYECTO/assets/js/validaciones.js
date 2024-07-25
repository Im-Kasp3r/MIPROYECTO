$(document).ready(function() {
    // Validar formulario de categorías
    $('form[action="../categorias.php"]').submit(function(event) {
        let camposVacios = [];
        if ($('#id').val().trim() === '') {
            camposVacios.push('ID');
        }
        if ($('#nombre').val().trim() === '') {
            camposVacios.push('Nombre de la categoría');
        }
        
        if (camposVacios.length > 0) {
            event.preventDefault(); // Evitar que el formulario se envíe
            alert('Por favor complete los siguientes campos: ' + camposVacios.join(', ') + '\nS Matias Oyarzun');
        }
    });

    // Validar formulario de productos
    $('form[action="../productos.php"]').submit(function(event) {
        let camposVacios = [];
        if ($('#id').val().trim() === '') {
            camposVacios.push('ID');
        }
        if ($('#nombre').val().trim() === '') {
            camposVacios.push('Nombre del producto');
        }
        if ($('#imagen').val().trim() === '') {
            camposVacios.push('Imagen');
        }
        if ($('#descripcion').val().trim() === '') {
            camposVacios.push('Descripción');
        }
        if ($('#precio').val().trim() === '') {
            camposVacios.push('Precio');
        }
        if ($('#categoria').val().trim() === '') {
            camposVacios.push('Categoría');
        }
        
        if (camposVacios.length > 0) {
            event.preventDefault(); // Evitar que el formulario se envíe
            alert('Por favor complete los siguientes campos: ' + camposVacios.join(', ') + '\nMatias Oyarzun');
        }
    });
});
