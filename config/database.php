<?php
class Database {
    public function connect() {
        return new PDO("mysql:host=127.0.0.1;port=3308;dbname=streamplus;charset=utf8mb4", "root", "", [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]);
    }
}