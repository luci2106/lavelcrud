<?php
// resources/views/modulos.blade.php

// Aquí comienza la vista
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Módulos</title>
</head>
<body>
    <h1>Listado de Módulos</h1>

    <ul>
        <?php foreach($modulos as $modulo): ?>
            <li><?= $modulo->name ?> - <?= $modulo->curso ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>