<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Tarefas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="usuarios.php">Cadastro de Usuários</a></li>
                <li><a href="tarefas.php">Cadastro de Tarefas</a></li>
                <li><a href="gerenciar.php">Gerenciar Tarefas</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h2>Cadastro de Tarefas</h2>
        <form method="POST" action="salvar_tarefa.php">
            <label for="descricao">Descrição:</label>
            <input type="text" id="descricao" name="descricao" required>
            <label for="setor">Setor:</label>
            <input type="text" id="setor" name="setor" required>
            <label for="usuario">Usuário:</label>
            <select id="usuario" name="usuario" required>
                <!-- Aqui você deve buscar usuários cadastrados no banco -->
                <option value="1">Usuário A</option>
                <option value="2">Usuário B</option>
            </select>
            <label for="prioridade">Prioridade:</label>
            <select id="prioridade" name="prioridade" required>
                <option value="Alta">Alta</option>
                <option value="Média">Média</option>
                <option value="Baixa">Baixa</option>
            </select>
            <button type="submit">Cadastrar</button>
        </form>
    </main>
</body>
</html>
