<?php
// Incluye el encabezado de la página
/* require_once '../header.php'; */
require_once '../principal.php';
?>
<section class="section">
    <!-- Mensaje informativo para el usuario -->
    <!-- <p>Seleccione una opción:</p> -->

    <!-- Lista de enlaces de navegación para realizar diversas acciones 
relacionadas con el manejo de Stock. -->
    <div class="section1">
        <ul>
            <!-- Enlace para crear nuevo stock -->
            <li><a href="create_stock.php">Crear Stock</a></li><!-- Enlace para ver el stock existente -->
        </ul>
    </div>
    <div class="section2">
        <ul>
            <li><a href="view_stock.php">Ver Stock</a></li><!-- Enlace para actualizar información de stock -->
        </ul>
    </div>
    <div class="section3">
        <ul>
            <li><a href="update_stock.php">Actualizar Stock</a></li><!-- Enlace para eliminar entradas de stock -->
        </ul>
    </div>
    <div class="section4">
        <ul>
            <li><a href="delete_stock.php">Eliminar Stock</a></li>
        </ul>
    </div>
</section>
<?php
// Incluye el pie de página
require_once '../footer.php';
?>