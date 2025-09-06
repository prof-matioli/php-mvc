<?php
namespace App\Models;
use PDO;

class TarefaModel {
    private $pdo;

    public function __construct() {
        $this->pdo = Database::getInstance();
    }

    public function getAll() {
        $stmt = $this->pdo->query("SELECT * FROM tarefas ORDER BY criado_em DESC");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($id) {
        $stmt = $this->pdo->prepare("SELECT * FROM tarefas WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function create($titulo, $descricao) {
        $stmt = $this->pdo->prepare("INSERT INTO tarefas (titulo, descricao) VALUES (?, ?)");
        return $stmt->execute([$titulo, $descricao]);
    }

    public function update($id, $titulo, $descricao) {
        $stmt = $this->pdo->prepare("UPDATE tarefas SET titulo = ?, descricao = ? WHERE id = ?");
        return $stmt->execute([$titulo, $descricao, $id]);
    }

    public function delete($id) {
        $stmt = $this->pdo->prepare("DELETE FROM tarefas WHERE id = ?");
        return $stmt->execute([$id]);
    }
}