<!DOCTYPE html>
<html>
<head>
    <title>Lista de Tarefas</title>
        <style>
        body {
            font-family: sans-serif;
        }

        .container {
            width: 800px;
            margin: 20px auto;
        }

        .tarefa {
            border: 1px solid #ccc;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 5px;
        }

        .tarefa h2 {
            margin-top: 0;
        }

        a {
            text-decoration: none;
            padding: 10px;
            background-color: #007bff;
            color: white;
            border-radius: 5px;
        }
    </style>

</head>
<body>
    <h1>Lista de Tarefas</h1>
    <a href="<?php echo BASE_URL; ?>/tarefa/criar">Adicionar Nova Tarefa</a>
    <hr>
    <?php foreach ($tarefas as $tarefa): ?>
        <div>
            <h2><?php echo htmlspecialchars($tarefa['titulo']); ?></h2>
            <p><?php echo nl2br(htmlspecialchars($tarefa['descricao'])); ?></p>
            <a href="<?php echo BASE_URL; ?>/tarefa/editar/<?php echo $tarefa['id']; ?>">Editar</a>
            <a href="<?php echo BASE_URL; ?>/tarefa/excluir/<?php echo $tarefa['id']; ?>" onclick="return confirm('Tem certeza?');">Excluir</a>
        </div>
        <hr>
    <?php endforeach; ?>
</body>
</html>