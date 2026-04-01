<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login - StreamPlus</title>
    <link rel="stylesheet" href="/GITTRABALHOS/TESTE/public/assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
</head>

<body class="login-body">
   <svg class="logo-svg" viewBox="0 0 400 150">
    <!-- Curva -->
    <path id="curva" d="M 40 100 Q 200 20 360 100" fill="transparent"/>

    <!-- Texto -->
    <text class="logo-text">
        <textPath href="#curva" startOffset="50%" text-anchor="middle">
            STREAMPLUS
        </textPath>
    </text>

</svg>

    <div class="login-wrapper">
        <div class="login-card">
            <h2>Entrar</h2>

            <form method="POST" action="/GITTRABALHOS/TESTE/login">
                <input type="email" class="input-netflix" placeholder="Email ou número de telefone" name="email"
                    required>

                <input type="password" class="input-netflix" placeholder="Senha" name="password" required>

                <button type="submit" class="btn-netflix">Entrar</button>

                <div class="login-options">
                    <label>
                        <input type="checkbox"> Lembre-se de mim
                    </label>
                    <a href="#">Precisa de ajuda?</a>
                </div>
                <div class="icone-facebook">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-facebook" viewBox="0 0 16 16">
                        <path
                            d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951" />
                    </svg>
                    <a href="#">conectar com facebook</a>
                </div>
                <div class="login-footer">
                    Novo por aqui? <a href="#">Assine agora</a>
                </div>

            </form>
        </div>
    </div>

</body>

</html>