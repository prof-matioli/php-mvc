<?php

// Retorna uma função que define todas as rotas para o dispatcher
return function(FastRoute\RouteCollector $r) {
    $controller = 'App\Controllers\TarefaController';

    // Rota para a página inicial e listagem de tarefas
    $r->addRoute('GET', '/', [$controller, 'index']);
    $r->addRoute('GET', '/tarefa', [$controller, 'index']);

    // Rota para exibir o formulário de criação
    $r->addRoute('GET', '/tarefa/criar', [$controller, 'criar']);
    
    // Rota para salvar uma nova tarefa (recebe dados do formulário)
    $r->addRoute('POST', '/tarefa/salvar', [$controller, 'salvar']);

    // Rota para exibir o formulário de edição. {id:\d+} garante que o id seja um número.
    $r->addRoute('GET', '/tarefa/editar/{id:\d+}', [$controller, 'editar']);

    // Rota para atualizar uma tarefa (recebe dados do formulário de edição)
    $r->addRoute('POST', '/tarefa/atualizar', [$controller, 'atualizar']);
    
    // Rota para excluir uma tarefa
    $r->addRoute('GET', '/tarefa/excluir/{id:\d+}', [$controller, 'excluir']);
};