<?php require "../../app/controllers/FilmeController.php"; ?>
<link rel="stylesheet" href="assets/css/style.css">

<header class="topo">
    <h1>StreamPlus</h1>
</header>

<section class="banner"></section>

<?php foreach($categorias as $nome => $filmes): ?>
<h2><?= $nome ?></h2>

<div class="row">
<?php foreach($filmes as $f): ?>
    <div class="card">
        <img src="../storage/capas/<?= $f['capa'] ?>">
        <div class="overlay">
            <h3><?= $f['titulo'] ?></h3>
            <p><?= $f['ano'] ?></p>
        </div>
    </div>
<?php endforeach; ?>
</div>

<?php endforeach; ?>