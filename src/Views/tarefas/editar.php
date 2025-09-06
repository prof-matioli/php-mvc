<!DOCTYPE html>
<html>
<head>
    <title>Editar Tarefa</title>
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
    <h1>Editar Tarefa</h1>
    <form action="<?php echo BASE_URL; ?>/tarefa/atualizar" method="POST">
        <input type="hidden" name="id" value="<?php echo $tarefa['id']; ?>">
        <label>Título:</label><br>
        <input type="text" name="titulo" value="<?php echo htmlspecialchars($tarefa['titulo']); ?>" required><br><br>
        <label>Descrição:</label><br>
        <textarea name="descricao"><?php echo htmlspecialchars($tarefa['descricao']); ?></textarea><br><br>
        <button type="submit">Atualizar</button>
    </form>
</body>
</html>