<?php
class Filme {
    private $conn;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function listarPorCategoria() {
        $sql = "SELECT f.*, c.nome AS categoria
        FROM filmes f
        JOIN filme_categoria fc ON fc.filme_id = f.id
        JOIN categorias c ON c.id = fc.categoria_id
        ORDER BY c.nome";

        return $this->conn->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }
}