<?php
session_start();

require_once "../../config/database.php";
require_once "../models/User.php";

/* ===== CONFIG GLOBAL ===== */
define("BASE_URL", "/GITTRABALHOS/TESTE/public/");

/* ===== CONEXÃO ===== */
$db = (new Database())->connect();
$user = new User($db);

/* ===== VERIFICA SE VEIO POST ===== */
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    /* =========================
       📝 REGISTRO
    ========================= */
    if (isset($_POST['action']) && $_POST['action'] === 'register') {

        // validação básica
        if (empty($_POST['nome']) || empty($_POST['email']) || empty($_POST['senha'])) {
            header("Location: " . BASE_URL . "?url=register&erro=campos");
            exit;
        }

        $result = $user->create(
            trim($_POST['nome']),
            trim($_POST['email']),
            $_POST['senha']
        );

        // email já existe
        if ($result === "email_existe") {
            header("Location: " . BASE_URL . "?url=register&erro=email");
            exit;
        }

        // sucesso
        header("Location: " . BASE_URL . "?url=login&sucesso=1");
        exit;
    }

    /* =========================
       🔐 LOGIN
    ========================= */
    if (isset($_POST['action']) && $_POST['action'] === 'login') {

        if (empty($_POST['email']) || empty($_POST['senha'])) {
            header("Location: " . BASE_URL . "?url=login&erro=campos");
            exit;
        }

        $auth = $user->login(
            trim($_POST['email']),
            $_POST['senha']
        );

        if ($auth) {
            $_SESSION['user'] = $auth;

            header("Location: " . BASE_URL . "?url=dashboard");
            exit;
        } else {
            header("Location: " . BASE_URL . "?url=login&erro=login");
            exit;
        }
    }
}

/* =========================
   🚪 LOGOUT
========================= */
if (isset($_GET['logout'])) {
    session_destroy();
    header("Location: " . BASE_URL . "?url=login");
    exit;
}