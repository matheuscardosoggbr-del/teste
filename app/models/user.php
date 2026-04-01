<?php
class User {
    private $conn;

    public function __construct($db) {
        $this->conn = $db;
    }

   public function create($nome, $email, $senha) {

    // verifica se já existe
    $check = $this->conn->prepare("SELECT id FROM usuarios WHERE email = ?");
    $check->execute([$email]);

    if ($check->fetch()) {
        return "email_existe";
    }

    $stmt = $this->conn->prepare(
        "INSERT INTO usuarios (nome,email,senha_hash) VALUES (?,?,?)"
    );

    $stmt->execute([
        $nome,
        $email,
        password_hash($senha, PASSWORD_DEFAULT)
    ]);

    return "sucesso";
}

    public function login($email,$senha) {
        $stmt = $this->conn->prepare("SELECT * FROM usuarios WHERE email=?");
        $stmt->execute([$email]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($senha,$user['senha_hash'])) {
            return $user;
        }
        return false;
    }
}