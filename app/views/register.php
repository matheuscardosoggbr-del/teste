
<!DOCTYPE html>
<htm lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>registro - StreamPlus</title>
    <link rel="stylesheet" href="/GITTRABALHOS/TESTE/public/assets/css/style.css">
</head>
<body class="register-body">
<?php if(isset($_GET['erro'])): ?>
<div class="register-error">
    <p>Email já cadastrado!</p></div>
<?php endif; ?>
<div class="register-container">
    <h1>StreamPlus</h1>

    <form method="POST" action="/GITTRABALHOS/TESTE/app/controllers/AuthController.php">
        <input name="nome" placeholder="Nome" required>
        <input name="email" placeholder="Email" required>
        <input type="password" name="senha" placeholder="Senha" required>
        <input type="hidden" name="action" value="register">
        <button>Criar conta</button>
    </form>

    <a href="?url=login">Já tem uma conta? Entre</a>
</body>
</html>