<?php

define('RUTA', 'http://localhost/blog/');

$db_config = array(
    'basededatos' => 'blog',
    'usuario' => 'root',
    'pass' => ''
);

$blog_config = array(
    'post_por_pagina' => '4',
    'carpeta_imagenes' => 'imagenes/'
);

$blog_admin = array(
    'usuario' => 'Diosito',
    'pass' => '123'
);

define('USUARIO', $blog_admin['usuario']);
