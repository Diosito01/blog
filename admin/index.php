<?php session_start();

require 'config.php';
require '../functions.php';

$conexion = conexion($db_config);

if (!$conexion) {
    header('Location: ../error.php');
}

comprobarSession();

$posts = obtener_post($blog_config['post_por_pagina'], $conexion);

require '../views/admin_index.view.php';
