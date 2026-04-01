<?php
require_once "../../config/database.php";
require_once "../models/Filme.php";

$db = (new Database())->connect();
$model = new Filme($db);

$dados = $model->listarPorCategoria();

$categorias = [];
foreach($dados as $d){
    $categorias[$d['categoria']][] = $d;
}   