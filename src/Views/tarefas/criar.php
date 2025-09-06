<!DOCTYPE html>
<html>
<head>
    <title>Adicionar Tarefa</title>
        <style>
        body {
            font-family: sans-serif;
        }

        .container {
            width: 800px;
            margin: 20px auto;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-top: 10px;
        }

        input,
        textarea {
            padding: 8px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            margin-top: 20px;
            padding: 10px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>

</head>
<body>
    <h1>Adicionar Nova Tarefa</h1>
    <form action="<?php echo BASE_URL; ?>/tarefa/salvar" method="POST">
        <label>Título:</label><br>
        <input type="text" name="titulo" required><br><br>
        <label>Descrição:</label><br>
        <textarea name="descricao"></textarea><br><br>
        <button type="submit">Salvar</button>
    </form>
</body>
</html>