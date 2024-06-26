<?php

// Incluir parámetros de la aplicación
require_once 'parametros.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Configuración del juego de caracteres -->
    <meta charset="UTF-8">
    <!-- Configuración de la vista para dispositivos móviles -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <!-- Título de la página que aparecerá en la pestaña del navegador -->
    <title><?= _APPLICATION_NAME ?></title>
    <!-- Enlace al ícono de la página -->
    <link rel="icon" href="/img/logo inventariorh.jpg" type="image/x-icon">
    <!-- Enlace al archivo de estilos externo ubicado en la carpeta 'css' -->
    <link rel="stylesheet" href="/css/style.css">
    <!-- Incluir Bootstrap (agrega esto en tu encabezado) -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->


</head>

<body>
    <div id="header">
        <!-- Encabezado principal de la página -->
        <div id="titulo">
            <h1>SACS GROUP</h1>
        </div>
        <div class="lider">
            <h1>Andres ramirez lider del proyecto</h1>
        </div>


        <!--<label for="menu1">Regresar al menu principal</label> 
        Aquí irían más elementos HTML que forman el contenido de la página -->
        <form action="/principal.php" method="post">

            <button type="submit" name="Regresar">Regresar al menu principal</button>
        </form>
    </div>