<?php
namespace App\Models;
use PDO;
use PDOException;

class Database {
    private static $instance = null;
    private function __construct() {}
    private function __clone() {}

    public static function getInstance() {
        if (self::$instance === null) {
            try {
                self::$instance = new PDO('mysql:host=143.106.241.4;dbname=matioli;charset=utf8', 'matioli', 'matnaolhe');
                self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                die("Erro de conexão: " . $e->getMessage());
            }
        }
        return self::$instance;
    }
}