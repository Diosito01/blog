<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo RUTA; ?>css/estilos.css">

    <title>FIC - Blog</title>
</head>

<body>
    <header>
        <div class="contenedor">
            <div class="logo izquierda">
                <p><a href="<?php echo RUTA ?>">FIC</a></p>
            </div>
            <div class="derecha">
                <form name="busqueda" class="buscar" action="<?php echo RUTA; ?>buscar.php" method="GET">
                    <input type="text" name="busqueda" placeholder="Buscar">
                    <button type="submit" class="icono fa fa-search"></button>
                </form>

                <nav class="menu">
                    <ul>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <!--Se mejoró para verificar si está loggeado o no para mostrar el icono-->
                        <!-- <li><a href="<?php echo RUTA . 'admin' ?>"><i class="fa fa-key"></i></a></li> -->
                        <?php if (!isset($_SESSION['admin'])) : ?>
                            <li><a href="<?php echo RUTA . 'login.php' ?>"><i class="fa fa-key"></i></a></li>
                        <?php else : ?>
                            <li><a href="<?php echo RUTA . 'admin' ?>"><i class="fa fa-dashboard"></i></a></li>
                        <?php endif; ?>
                    </ul>
                </nav>
            </div>
        </div>
    </header>