<?php
namespace App\Controllers;
use App\Models\TarefaModel;

class TarefaController {

    public function index() {
        $tarefaModel = new TarefaModel();
        $tarefas = $tarefaModel->getAll();
        require __DIR__ . '/../Views/tarefas/index.php';
    }

    public function criar() {
        require __DIR__ . '/../Views/tarefas/criar.php';
    }

    public function salvar() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $tarefaModel = new TarefaModel();
            $tarefaModel->create($_POST['titulo'], $_POST['descricao']);
            header('Location: ' . BASE_URL . '/');
            exit();
        }
    }

    public function editar($id) {
        $tarefaModel = new TarefaModel();
        $tarefa = $tarefaModel->getById($id);
        require __DIR__ . '/../Views/tarefas/editar.php';
    }

    public function atualizar() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $tarefaModel = new TarefaModel();
            $tarefaModel->update($_POST['id'], $_POST['titulo'], $_POST['descricao']);
            header('Location: ' . BASE_URL . '/');
            exit();
        }
    }

    public function excluir($id) {
        $tarefaModel = new TarefaModel();
        $tarefaModel->delete($id);
        header('Location: ' . BASE_URL . '/');
        exit();
    }
}