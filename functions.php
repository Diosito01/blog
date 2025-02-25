<?php

function conexion($db_config)
{
    try {
        $conexion = new PDO('mysql:host=localhost;dbname=' . $db_config['basededatos'], $db_config['usuario'], $db_config['pass']);
        return $conexion;
    } catch (PDOException $e) {
        echo "Error intentando conectar a la base de datos.";
        return false;
    }
}

function limpiarDatos($datos)
{
    $datos = trim($datos);
    $datos = stripslashes($datos);
    $datos = htmlspecialchars($datos);
    return $datos;
}


function pagina_actual()
{
    return isset($_GET['p']) ? (int) $_GET['p'] : 1;
}

function obtener_post($post_por_pagina, $conexion)
{
    $inicio = (pagina_actual() > 1) ? pagina_actual() * $post_por_pagina - $post_por_pagina : 0;
    $statement = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM articulos ORDER BY id DESC LIMIT $inicio, $post_por_pagina");
    $statement->execute();
    return $statement->fetchAll();
}

function numero_paginas($post_por_pagina, $conexion)
{
    $total_post = $conexion->prepare('SELECT FOUND_ROWS() as total');
    $total_post->execute();
    $total_post = $total_post->fetch()['total'];

    $numero_paginas = ceil($total_post / $post_por_pagina);
    return $numero_paginas;
}

function id_articulo($id)
{
    return (int) limpiarDatos($id);
}

function obtener_post_por_id($conexion, $id)
{
    $resultado = $conexion->query("SELECT * FROM articulos WHERE id = $id LIMIT 1");
    $resultado = $resultado->fetchAll();
    return ($resultado) ? $resultado : false;
}

function fecha($fecha)
{
    $timestamp = strtotime($fecha);
    $meses = $meses = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];

    $dia = date('d', $timestamp);
    $mes = date('m', $timestamp) - 1;
    $year = date('Y', $timestamp);

    $fecha = "$dia de " . $meses[$mes] . " del $year";
    return $fecha;
}

function comprobarSession()
{
    if (!isset($_SESSION['admin'])) {
        header('Location: ' . RUTA . 'login.php');
    }
}
