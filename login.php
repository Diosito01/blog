<?php session_start();
require 'admin/config.php';
require 'functions.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = limpiarDatos($_POST['usuario']);
    $password = limpiarDatos($_POST['password']);

    if ($usuario == $blog_admin['usuario'] && $password == $blog_admin['pass']) {
        $_SESSION['admin'] = $blog_admin['usuario'];
        header('Location: ' .  RUTA . 'admin');
    } else {
        echo "<script>
                alert('ERROR: Datos incorrectos.');
            </script>";
    }
}

require 'views/login.view.php';
