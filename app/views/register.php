<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro - StreamPlus</title>

    <link rel="stylesheet" href="/GITTRABALHOS/TESTE/public/assets/css/style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
</head>

<body class="registro-body">

    <!-- LOGO -->
    <svg class="logo-svg" viewBox="0 0 400 150">
        <path id="curva" d="M 40 100 Q 200 20 360 100" fill="transparent"/>
        <text class="logo-text">
            <textPath href="#curva" startOffset="50%" text-anchor="middle">
                STREAMPLUS
            </textPath>
        </text>
    </svg>

    <div class="registro-wrapper">
        <div class="registro-card">

            <h2>Criar conta</h2>

            <form method="POST" action="/GITTRABALHOS/TESTE/register">

                <input type="text" class="input-netflix" placeholder="Nome completo" name="nome" required>

                <input type="email" class="input-netflix" placeholder="Email" name="email" required>

                <input type="password" class="input-netflix" placeholder="Senha" name="password" required>

                <input type="password" class="input-netflix" placeholder="Confirmar senha" name="confirm_password" required>

                <button type="submit" class="btn-netflix">Cadastrar</button>

                <div class="register-footer">
                    Já tem conta? 
                    <a href="/GITTRABALHOS/TESTE/app/views/login.php">Entrar</a>
                </div>

            </form>

        </div>
    </div>

</body>
</html>