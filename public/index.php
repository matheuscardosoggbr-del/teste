<?php
$url = $_GET['url'] ?? 'login';

switch($url){

    case 'login':
        require "../app/views/login.php";
        break;

    case 'register':
        require "../app/views/register.php";
        break;

    case 'dashboard':

        // chama o controller primeiro
        require "../app/controllers/FilmeController.php";

        // garante que existe
        if (!isset($categorias)) {
            $categorias = [];
        }

        require "../app/views/dashboard.php";
        break;

    default:
        echo "404";
}